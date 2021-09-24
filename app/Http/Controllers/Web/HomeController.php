<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DepartementModel;
use App\Models\DetailQuestionModel;
use App\Models\New_MemberModel;
use App\Models\QuestionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        return view('Web.Home');
    }

    public function form()
    {
        $data = array(
            'departement' => DepartementModel::all(),
            'question' => QuestionModel::all(),
        );
        return view('Web.FormRecruitment')->with('data', $data);
    }

    public function insert(Request $request)
    {
        // return dd($request->all());
        $date = Carbon::now();
        $random = Str::random(11);
        $regist = $random . ".PENA-8";
        $path = 'public/image/CA';
        $img = $request->file('pic');
        $img_name = time() . "_" . $random . "." . $img->extension();
        $img->storeAs($path, $img_name);
        $data = array(
            'pic' => $img_name,
            'regis_number' => $regist,
            'name' => $request->name,
            'born' => $request->born,
            'sex' => $request->sex,
            'departemen_id' => $request->departemen_id,
            'semester' => $request->semester,
            'hp' => $request->hp,
            'cause' => $request->cause,
            'created_at' => $date,
            'updated_at' => $date,
        );
        New_MemberModel::create($data);

        $detail = $request->all();
        $member = New_MemberModel::where('regis_number', $regist)->value('id');
        foreach ($detail['answer'] as $item => $value) {
            $detquest = array(
                'new_member_id' => $member,
                'question_id' => $detail['question_id'][$item],
                'answer' => $detail['answer'][$item],
                'created_at' => $date,
                'updated_at' => $date,
            );
            DetailQuestionModel::create($detquest);
        }
        return redirect()->back()->with('status', 'Selamat kamu berhasil terdaftar, Jangan lupa cek pengumuman berikutnya disini tanggal 01 Oktober 2021');
    }
}
