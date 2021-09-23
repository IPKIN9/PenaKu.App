<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;
    protected $table = 'event';
    protected $fillable = [
        'id',
        'img',
        'name',
        'description',
        'link',
        'execution_date',
        'created_at',
        'updated_at'
    ];
}
