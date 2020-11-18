<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribue extends Model
{
     public function bug()
    {
        return $this->belongsToMany(Bug::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    } //
}
