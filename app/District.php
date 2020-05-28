<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}
