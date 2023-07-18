<?php

namespace Sashagm\Messages\Models;

use App\Models\User;
use Sashagm\Messages\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dialog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user1_id',
        'user2_id',
        'type',


    ];

    public function user1()
    {
        return $this->belongsTo(User::class, 'user1_id');
    }

    public function user2()
    {
        return $this->belongsTo(User::class, 'user2_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
