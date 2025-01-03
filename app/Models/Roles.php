<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = ['name'];

    protected $hidden = [
        "created_at"
    ];

    public function users()
    {
        return $this->hasMany(Admin::class, 'role');
    }
}
