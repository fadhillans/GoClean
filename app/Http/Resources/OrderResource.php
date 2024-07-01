<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'namaCustomer' => $this->namaCustomer,
            'email' => $this->email,
            'alamat' => $this->alamat,
            'noHP' => $this->noHP,
            'jenisLayanan' => $this->jenisLayanan,
            'harga' => $this->harga,
            'promo' => $this->promo,
            'tanggalPesanan' => (new Carbon($this->tanggalPesanan))->format('Y-m-d'),
        ];
    }
}
