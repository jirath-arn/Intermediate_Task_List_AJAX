<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = ['description'];

    /**
     * Has a relationship with the users table.
     *
     */
    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
