<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\UserInterface;
use App\User;
use App\Password;
use Validator, Input, Hash;

class PasswordResetController extends Controller {

    protected $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }
    public function getPasswordReset()
    {
        return view('auth.password-reset');
    }

    public function postPasswordReset()
    {
        $rules = [
            'email' => 'email|required'
        ];

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $email  = Input::get('email');
        $user   = User::where('email', '=', $email)->first();
        if(empty($user))
        {
            return redirect()->back()
                ->withErrors(['User with this email does not exist']);
        }

        $this->userInterface->resetPassword( $user );
        
        return redirect()->back()
            ->with('status', 'success')
            ->with('message', 'Check your inbox!');

    }

    public function getPasswordResetForm( $token )
    {
        return view('auth.form-reset', compact('token'));
    }

    public function postPasswordResetForm( $token )
    {
        $rules = [
            'password'              => 'required|min:6|max:20',
            'password_confirmation' => 'required|same:password'
        ];

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator);
        }

        $password = Password::where('token', '=', $token)->first();
        if(empty($password))
        {
            return view('pages.status')
                ->with('error', 'Reset token is invalid');
        }

        $user = User::where('email', '=', $password->email)->first();
        $user->password = Hash::make(Input::get('password'));
        $user->save();

        $password->delete();

        return redirect()->route('auth.login')
            ->with('status', 'success')
            ->with('message', 'Password changed successfully!');
    }

}