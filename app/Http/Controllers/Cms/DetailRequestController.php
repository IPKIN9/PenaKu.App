<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\DetailQuestionModel;
use App\Models\MemberModel;
use App\Models\New_MemberModel;
use Illuminate\Http\Request;

class DetailRequestController extends Controller
{
    public function index()
    {
        $data = New_MemberModel::all();
        return view('Cms.ResultReq')->with('data', $data);
    }

    public function edit($id)
    {
        $where = DetailQuestionModel::where('new_member_id', $id)->with('new_member_rerol', 'question_rerol')->get();
        return response()->json($where);
    }

    public function delete($id)
    {
        $where = DetailQuestionModel::where('new_member_id', $id)->get();
        foreach ($where as $d) {
            DetailQuestionModel::where('id', $d->id)->delete();
        }
        return response()->json();
    }
}
