<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    protected $guarded = ['id', 'created_at', 'updated_at'];
    
    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}