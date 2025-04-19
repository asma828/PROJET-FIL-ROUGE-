<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'service';

    protected $fillable=[
        'name',
        'description',
        'price',
        'guest_count',
        'service_area',
        'experience_level',
        'image',
        'status',
        'provider_id',
    ];

    public function provider(){
        return $this->belongsTo(User::class,'provider_id');
    }

    public function images(){
        return $this->hasMany(ServiceImage::class);
    }
}
