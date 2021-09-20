<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionModel extends Model
{
    use HasFactory;
    protected $table = 'position';
    protected $fillable = [
        'id', 'position_name', 'created_at', 'updated_at'
    ];
}
