<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerationModel extends Model
{
    use HasFactory;
    protected $table = 'generation';
    protected $fillable = [
        'id', 'generation', 'created_at', 'updated_at'
    ];
}
