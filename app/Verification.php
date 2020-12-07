<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $fillable = [
        'organization_name',
        'contact_name',
        'contact_email',
        'status',
        'expired_at',
        'coordinator_id'
    ];

    protected $table = 'verifications';

    public function coordinator()
    {
        return $this->belongsTo(Coordinator::class);
    }
}
