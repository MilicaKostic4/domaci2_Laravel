<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PredavacResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    
    public static $wrap='predavac';

     public function toArray(Request $request): array
    {
        return [
            'ime'=>$this->resource->ime,
            'prezime'=>$this->resource->prezime,
            'zanimanje'=>$this->resource->zanimanje,
            'obrazovanje'=>$this->resource->obrazovanje
        ];
    }
}
