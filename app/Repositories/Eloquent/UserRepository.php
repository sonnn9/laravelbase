<?php
namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
     /**
     * @var User
     */
    protected $model;
    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function getModel()
    {
        return User::class;
    }

    public function getAllUsers()
    {
        return User::all();
    }
}
