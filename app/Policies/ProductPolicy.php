<?php


namespace App\Policies;

use App\User;
use App\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function edit(User $user, Product $product)
    {
        //
        if(\Auth::user()->hasRole('admin')){
            return true;
        }else{
            return $user->id === $product->user_id;
        }
    }

    public function update(User $user, Product $product)
    {
        //
        if(\Auth::user()->hasRole('admin')){
            return true;
        }else{
            return $user->id === $product->user_id;
        }
    }
    
    public function delete(User $user, Product $product)
    {
        //
        if(\Auth::user()->hasRole('admin')){
            return true;
        }else{
            return $user->id === $product->user_id;
        }
    }

}
