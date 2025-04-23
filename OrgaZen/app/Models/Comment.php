<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
  // app/Models/Comment.php

protected $fillable = [
    'user_id',
    'provider_id',
    'comment',
    'rating', 
];

public function user()
{
    return $this->belongsTo(User::class,'user_id');
}


}
