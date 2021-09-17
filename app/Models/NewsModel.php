<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'id', 'title', 'contents', 'id_user',
        'created_at', 'updated_at'
    ];
}
