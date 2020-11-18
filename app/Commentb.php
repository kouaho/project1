<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fileable = ['commentaire', 'user_id', 'bug_id'] ;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bug()
    {
        return $this->belongsTo(Bug::class);
    }
}
