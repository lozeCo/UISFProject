<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Project extends Resource
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
            'user_id' => $this->user_id,
            'name' => $this->name,
            'objective' => $this->objective,
            'key' => $this->key,
            'progress' => $this->progress,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
        
    }
}
