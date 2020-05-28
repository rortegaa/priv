<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $guarded = [];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

}
