<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'guard_name'=>$this->guard_name,
            'permmission' => PermissionResource::collection($this->permissions)->toArray($request)
        ];
    }
}
