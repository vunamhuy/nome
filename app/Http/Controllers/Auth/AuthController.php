<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use Validator;
use Input;
use Request;
use App\Social;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    protected $auth;
    protected $userInterface;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth, UserInterface $userInterface)
    {
        $this->auth = $auth;
        $this->userInterface = $userInterface;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'facebookID' => $data['facebookID'],
            'facebookName' => $data['facebookName'],
            'facebookEmail' => $data['facebookEmail']
        ]);
    }
    // new
    public function getLogin()
    {
        \Session::put('url_before_login', Request::server('HTTP_REFERER'));
        return view('auth.login');
    }

    public function postLogin()
    {
        $email      = Input::get('email');
        $password   = Input::get('password');
        $remember   = Input::get('remember');

        if($this->auth->attempt([
            'email'     => $email,
            'password'  => $password
        ], $remember == 1 ? true : false))
        {

            if( $this->auth->user()->hasRole('supper_user') || $this->auth->user()->hasRole('basic_user') || $this->auth->user()->hasRole('free_user'))
            {
                return redirect()->route('user.index');
            }

            if( $this->auth->user()->hasRole('admin'))
            {
                return redirect()->route('admin.index');
            }

        }
        else
        {
            return redirect()->back()
                ->with('message','Incorrect email or password')
                ->with('status', 'danger')
                ->withInput();
        }

    }

    public function getLogout()
    {
        \Auth::logout();

        return redirect()->route('auth.login')
            ->with('status', 'success')
            ->with('message', 'Logged out');

    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister()
    {
        $input = Input::all();
        $validator = Validator::make($input, User::$rules, User::$messages);
        if($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'name'    => $input['name'],
            'email'         => $input['email'],
            'password'      => $input['password']
        ];

        $this->userInterface->register($data);

        return redirect()->back()
            ->with('status', 'success')
            ->with('message', 'You are registered successfully. Please login.');
    }
    // new

     public function getSocialRedirect( $provider )
    {
        $providerKey = \Config::get('services.' . $provider);
        if(empty($providerKey))
            return view('pages.status')
                ->with('error','No such provider');

        return Socialite::driver( $provider )->redirect();

    }

    public function getSocialHandle( $provider )
    {
        $user = Socialite::driver( $provider )->user();

        Request::session()->push('user', $user->user);

        $socialUser = null;
        //Check is this email present
        $userCheck = User::where('email', '=', $user->email)->first();
        if(!empty($userCheck))
        {
            $socialUser = $userCheck;
        }
        else
        {
            $sameSocialId = Social::where('social_id', '=', $user->id)->where('provider', '=', $provider )->first();

            if(empty($sameSocialId))
            {
                //There is no combination of this social id and provider, so create new one
                $newSocialUser = new User;
                $newSocialUser->email = $user->email;
                $name = explode(' ', $user->name);
                $newSocialUser->name         = $name[0];
                // $newSocialUser->last_name          = $name[1];
                $newSocialUser->save();

                $socialData = new Social;
                $socialData->social_id = $user->id;
                $socialData->user_id = $newSocialUser->id;
                $socialData->provider= $provider;
                $socialData->save();

                // Add role
                $role = Role::whereName('basic_user')->first();
                $newSocialUser->assignRole($role);

                $socialUser = $newSocialUser;
            }
            else
            {
                //Load this existing social user
                $socialUser = $sameSocialId->user;
            }

        }

        $this->auth->login($socialUser, true);
        if( $this->auth->user()->hasRole('basic_user'))
        {
            if (\Session::get('url_before_login')) {
                return redirect(\Session::get('url_before_login'));
            }
            return redirect()->route('user.index');
        }

        if( $this->auth->user()->hasRole('admin'))
        {
            if (\Session::get('url_before_login')) {
                return redirect(\Session::get('url_before_login'));
            }
            return redirect()->route('admin.index');
        }

        return abort(403);
    }
}
