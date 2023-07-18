<?php

namespace Sashagm\Messages\Models;

use App\Models\User;
use Sashagm\Messages\Models\Dialog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'dialog_id',
        'user_id',
        'body',


    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function dialog()
    {
        return $this->belongsTo(Dialog::class);
    }

}
