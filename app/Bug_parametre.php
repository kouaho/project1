<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bug_parametre extends Model
{
   public function bug()
    {
        return $this->belongsToMany(Bug::class);
    }

    public function parametre()
    {
        return $this->belongsToMany(Parametre::class);
    } //
}
