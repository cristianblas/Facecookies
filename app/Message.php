<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'content',
    ];
    public function chats(){
        return $this->belongsTo(Chat::class);
    }

}