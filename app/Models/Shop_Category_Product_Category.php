<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop_Category_Product_Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='shop_categories_product_categories';
    protected $guarded=[];

    protected static function booted(): void
    {
        static::creating(static function ($model) {
            $model->created_by = auth()->id();
        });

        static::updating(static function ($model) {
            $model->updated_by = auth()->id();
        });
    }

    public function created_user(): BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function updated_user(): BelongsTo
    {
        return $this->belongsTo(User::class,'updated_by');
    }
}
