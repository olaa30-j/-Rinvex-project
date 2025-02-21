<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\CartItem;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'status',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

     public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }
    
}