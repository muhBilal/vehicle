<?php

namespace App\Models;

use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable
{
    protected $connection = 'mongodb';
    protected $collection = 'pengguna';
    protected $guarded = [];


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return response()->json();
    }
}
