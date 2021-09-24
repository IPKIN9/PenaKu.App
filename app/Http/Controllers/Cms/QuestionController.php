<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\QuestionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $data = array(
            'all' => QuestionModel::all()
        );
        return view('Cms.question')->with('data', $data);
    }
    public function create(QuestionRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'point' => $request->point,
            'questions' => $request->questions,
            'created_at' => $date,
            'updated_at' => $date
        );
        QuestionModel::create($data);
        return redirect()->back()->with('status', 'Data berhasil di tambahkan');
    }

    public function edit($id)
    {
        $result = QuestionModel::where('id', $id)->first();
        return response()->json($result);
    }

    public function update(QuestionRequest $request)
    {
        $date = Carbon::now();
        $id = $request->id;
        $data = array(
            'point' => $request->point,
            'questions' => $request->questions,
            'updated_at' => $date
        );
        QuestionModel::where('id', $id)->update($data);
        return redirect()->back()->with('status', 'Perubahan data berhasil dilakukan');
    }

    public function delete($id)
    {
        QuestionModel::where('id', $id)->delete();
        return response()->json();
    }
}
