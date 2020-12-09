<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $avatarpath = App::make('url')->to('/') . '/storage/' . $this->avatar;

        return [
            'id' => $this->id,
            'name' => $this->name,
            'avatar' => $avatarpath,
        ];
    }
}
