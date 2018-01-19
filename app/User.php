<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
    
     //Obtenemos el grupo y la companie de el cliente que creo el ticket
    public static function getGroup($id)
    {
        $data_office = self::select('groups.name as group','companies.name as companie')
                        ->join('companie_user', 'companie_user.companie_id', '=' , 'companies.id')
                        ->join('groups', 'groups.id', '=', 'companies.group_id')
                        ->join('tickets', 'tickets.user_creation', '=', 'companie_user.user_id')
                        ->where('tickets.id', $id)
                        ->first();

        return $data_office;
    }
}
