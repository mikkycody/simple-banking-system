<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
