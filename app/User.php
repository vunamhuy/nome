<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;
use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait; // fb

class User extends Model implements AuthenticatableContract, CanResetPasswordContract,BillableContract
{

    use Billable;

    use Authenticatable, Authorizable, CanResetPassword;
    use SyncableGraphNodeTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'phone', 'sex', 'day', 'month', 'year'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

    public function hasRole($name)
    {
        foreach($this->roles as $role)
        {
            if($role->name == $name) return true;
        }

        return false;
    }

    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    public function removeRole($role)
    {
        return $this->roles()->detach($role);
    }

    public static $rules = [
        'name'            => 'required',
        'email'                 => 'required|email|unique:users',
        'password'              => 'required|min:6|max:20',
        'password_confirmation' => 'required|same:password'
    ];

    public static $messages = [
        'name.required'   => 'Name is required',
        'email.required'        => 'Email is required',
        'email.email'           => 'Email is invalid',
        'password.required'     => 'Password is required',
        'password.min'          => 'Password needs to have at least 6 characters',
        'password.max'          => 'Password maximum length is 20 characters'
    ];

    public function product(){
        return $this->hasMany('App\Product');
    }
    public function team(){
        return $this->hasMany('App\Team');
    }
    public function event_user_books(){
        return $this->hasMany('App\EventUserBooks');
    }
    public function social(){
        return $this->hasMany('App\Social', 'user_id');
    }
    public function avatar(){
        return $this->belongsTo('App\File', 'file_id');
    }
}
