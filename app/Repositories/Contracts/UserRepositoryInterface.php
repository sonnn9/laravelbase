<?php
namespace App\Repositories\Contracts;

use App\Repositories\Contracts\UserRepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    //Get all users
    public function getAllUsers();
}
