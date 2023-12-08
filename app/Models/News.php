<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'body', 'image', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function getCreatedAttribute() {
            
            return date('d.m.Y H:i', strtotime($this->created_at));
    }

}
