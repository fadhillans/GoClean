<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'alamat', 'noHP'];
    
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    public function email()
    {
        return $this->belongsTo(User::class, 'email');
    }
    public function alamat()
    {
        return $this->belongsTo(User::class, 'alamat');
    }
    public function noHP()
    {
        return $this->belongsTo(User::class, 'noHP');
    }
}
