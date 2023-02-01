<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    protected $guarded = [];

    public function getPrettyCreatedAttribute() {
        return date('d F, Y ', strtotime($this->created_at));
    }
}
