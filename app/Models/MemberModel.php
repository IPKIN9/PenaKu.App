<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;
    protected $table = 'member';
    protected $fillable = [
        'id', 'pic', 'regist_number', 'name', 'born',
        'sex', 'departement_id', 'generation_id', 'position_id'
    ];

    public function departement_rerol()
    {
        return $this->belongsTo(DepartementModel::class, 'departement_id');
    }

    public function generation_rerol()
    {
        return $this->belongsTo(GenerationModel::class, 'generation_id');
    }

    public function position_rerol()
    {
        return $this->belongsTo(PositionModel::class, 'position_id');
    }
}
