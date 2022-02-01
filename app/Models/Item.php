<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function boot() 
    {
        parent::boot();
        static::created(function(Item $model) {
            $model->update([
                $model->order = $model->id
            ]);
        });
    }

}
