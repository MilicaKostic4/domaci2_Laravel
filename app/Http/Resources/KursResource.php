<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KursResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    
     public static $wrap='kurs';

     public function toArray(Request $request): array
    {
        return [
            'id'=>$this->resource->id,
            'nazivKursa'=>$this->resource->nazivKursa,
            'trajanje'=>$this->resource->trajanje,
            'godina'=>$this->resource->godina,
            'ocena'=>$this->resource->ocena,
            'sadrzaj'=>$this->resource->sadrzaj,
            'cena'=>$this->resource->cena,
            'predavac'=>new PredavacResource($this->resource->predavac),
            'kategorija'=>new KategorijaResource($this->resource->kategorija),
            'user'=>new UserResource($this->resource->user)
        ];
    }
}
