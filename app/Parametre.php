<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = [
        'libelle', 'type','description',
    ];//
    public function bug()
    {
        return $this->belongsToMany(Bug::class);
    }
}
