<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class N8nChat extends Model
{
    protected $fillable = ['user_id','session_id','input','output'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
