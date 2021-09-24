<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailQuestionModel extends Model
{
    use HasFactory;
    protected $table = 'detail_question';
    protected $fillable = [
        'id', 'new_memeber_id', 'question_id', 'answer', 'created_at', 'updated_at'
    ];

    public function new_member_rerol()
    {
        return $this->belongsTo(New_MemberModel::class, 'new_member_id');
    }

    public function question_rerol()
    {
        return $this->belongsTo(QuestionModel::class, 'question_id');
    }
}
