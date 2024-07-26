<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Custom\StatusController;
use App\Custom\Authenticate;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     /**
     * @param mixed $request
     * @return array
     */
    public static function setRegister($request): array
    {
        //proceso de registro de usuarios
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Authenticate::encryption($request->password);
        $user->save();

        //valida si el registro se completó
        if ($user) {
            return StatusController::successfullMessage(201, "Register Successfull", true, 1, ['register_user' => $user]);
        }
        return StatusController::successfullMessage(102, "Register Error", false, 0, ['error' => ['unknown error']]);
    }

}
