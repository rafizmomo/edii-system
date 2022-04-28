<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'roles'
    ];

    protected $table = 'user_roles';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
