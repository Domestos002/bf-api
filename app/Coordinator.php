<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    protected $fillable = [ 'full_name' ];
    protected $table = 'coordinators';

    public $timestamps = false;


    public function requests()
    {
        return $this->hasMany(Verification::class);
    }
}
