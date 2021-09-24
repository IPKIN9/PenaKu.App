<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class New_MemberModel extends Model
{
    use HasFactory;
    protected $table = 'new_member';
    protected $fillable = [
        'id',
        'pic',
        'regis_number',
        'name',
        'born',
        'sex',
        'departemen_id',
        'semester',
        'hp',
        'cause',
        'created_at',
        'updated_at',
    ];

    public function departement_role()
    {
        return $this->belongsTo(DepartementModel::class, 'departemen_id');
    }
}
