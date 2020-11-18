<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = [
        'libelle', 'description'
    ];//
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function bug()
    {
        return $this->hasMany(Bug::class);
    }
}
