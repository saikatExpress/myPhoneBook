<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactnumber extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone_number',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

       /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id'                => 'integer',
        'name'              => 'string',
        'email'             => 'string',
        'phone_number'      => 'integer',
        'email_verified_at' => 'datetime',
        'created_at'        => 'timestamp',
        'updated_at'        => 'timestamp',
        'deleted_at'        => 'timestamp'
    ];
}