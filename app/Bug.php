<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
        protected $fillable = [
        'resume', 'description','img','user_id','categorie','impact','priorite','visibilite','reproductibilite','domain_id','impact','libelle'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }//
    public function parametre()
    {
        return $this->belongsToMany(Parametre::class);
    }

    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }

}
