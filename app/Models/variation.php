<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class variation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function attribute()
    {
        return $this->belongsTo(attribute::class,);
    }

    public function attributeValue()
    {
        return $this->belongsTo(attributeValue::class,);
    }

    public function attribute_id()
    {
        return $this->hasMany(attribute::class,);
    }
}
