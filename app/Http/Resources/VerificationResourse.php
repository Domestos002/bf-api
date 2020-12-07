<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VerificationResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'organization_name' => $this->organization_name,
            'contact_name' => $this->contact_name,
            'contact_email' => $this->contact_email,
            'status' => $this->status,
            'coordinator' => $this->coordinator,
            'expired_at' => (string) $this->expired_at,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}
