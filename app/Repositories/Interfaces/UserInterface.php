<?php
namespace App\Repositories\Interfaces;
interface UserInterface
{
    public function register($data);
    public function resetPassword($user);
}