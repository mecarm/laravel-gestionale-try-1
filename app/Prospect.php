<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    protected $guarded = [];

    public function contact(){
        return $this->hasOne(\App\ProspectContact::class);
    }

    public function getPrettyCreatedAttribute() {
        return date('d F, Y ', strtotime($this->created_at));
    }
}
