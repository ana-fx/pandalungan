<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Checkout extends Model
{
    protected $fillable = [
        'order_number',
        'unique_id',
        'total_amount',
        'total_participants',
        'status',
        'status_verifikasi',
        'payment_proof',
        'payment_deadline',
        'paid_at',
    ];

    protected $casts = [
        'payment_deadline' => 'datetime',
        'paid_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->unique_id)) {
                $model->unique_id = Str::uuid();
            }
        });
    }

    public function participants(): HasMany
    {
        return $this->hasMany(CheckoutParticipant::class);
    }

    public static function generateOrderNumber(): string
    {
        $prefix = 'NR' . date('Ymd');
        $lastOrder = self::where('order_number', 'like', $prefix . '%')
            ->orderBy('order_number', 'desc')
            ->first();

        if (!$lastOrder) {
            $number = '0001';
        } else {
            $lastNumber = intval(substr($lastOrder->order_number, -4));
            $number = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        }

        return $prefix . $number;
    }
}
