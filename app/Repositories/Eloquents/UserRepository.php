<?php
namespace App\Repositories\Eloquents;
use DB;
use App\Role;
use App\User;
use App\Password;
use Hash;
use App\Repositories\Mailers\UserMailer;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as Files;

class UserRepository extends Repository implements UserInterface {
    /**
    * Eloquent model
    */
    protected $model;
    protected $userMailer;

    /**
    * @param Lesson $model
    */
    function __construct(User $model, UserMailer $userMailer )
    {
        $this->model = $model;
        $this->userMailer = $userMailer;
    }
   public function register( $data )
    {

        $user = new User;
        $user->email            = $data['email'];
        $user->name       = ucfirst($data['name']);
        $user->password         = Hash::make($data['password']);
        $user->save();

        //Assign Role
        if(empty($data['role']) && !isset($data['role'])){
            $role = Role::whereName('free_user')->first();
        }else{
            $role = $data['role'];
        }
        $user->assignRole($role);
        return $user;
    }

    public function resetPassword($user)
    {
        $token = sha1(mt_rand());
        $password = new Password;
        $password->email = $user->email;
        $password->token = $token;
        $password->save();

        $data = [
            'name'    => $user->name,
            'token'         => $token,
            'subject'       => 'Example.com: Password Reset Link',
            'email'         => $user->email
        ];

        return $this->userMailer->passwordReset($user->email, $data);
    }

    public function saveFile($file) {
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  Files::get($file));
        $entry = new \App\File();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;
        $entry->user_id = \Auth::user()->id;
        $entry->save();
        return $entry;
    }
}