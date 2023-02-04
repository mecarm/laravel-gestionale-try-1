<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProspectActivity extends Model
{
    protected $guarded = [];

    public function scopeProspectId($query, $id)
    {
        return $query->where('prospect_id', $id);
    }

    public function documents()
    {
        return $this->hasMany(\App\ProspectDocument::class, 'activity_id', 'id');
    }

    public function getPrettyCreatedAttribute() {
        return date('d F, Y ', strtotime($this->created_at));
    }
}
