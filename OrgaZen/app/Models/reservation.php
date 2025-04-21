<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $table = 'reservation';

    protected $fillable = [
        'user_id',
        'event_category_id',
        'name',
        'event_date',
        'event_time',
        'guest_count',
        'duration',
        'location',
        'description',
        'provider_id',
        'status',
        'is_paid',
    ];

    public function client()
{
    return $this->belongsTo(User::class, 'user_id');
}

    public function provider()
{
    return $this->belongsTo(User::class, 'provider_id');
}

    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
     
}
