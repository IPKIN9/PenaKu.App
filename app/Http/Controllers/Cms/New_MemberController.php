<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\New_MemberRequest;
use App\Models\DepartementModel;
use App\Models\New_MemberModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class New_MemberController extends Controller
{
    public function index()
    {
        $data = array(
            'all' => New_MemberModel::all(),
            'dept' => DepartementModel::all()
        );
        return view('Cms.New_Member')->with('data', $data);
    }

    public function create(New_MemberRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'pic' => $request->pic,
            'regis_number' => $request->regis_number,
            'name' => $request->name,
            'born' => $request->born,
            'sex' => $request->sex,
            'departemen_id' => $request->departemen_id,
            'semester' => $request->semester,
            'cause' => $request->cause,
            'created_at' => $date,
            'updated_at' => $date,
        );
        New_MemberModel::create($data);
        return redirect()->back()->with('status', 'Data berhasil di tambahkan');
    }

    public function edit($id)
    {
        $result = New_MemberModel::where('id', $id)->first();
        return response()->json($result);
    }

    public function update(New_MemberRequest $request)
    {
        $date = Carbon::now();
        $id = $request->id;
        $data = array(
            'pic' => $request->pic,
            'regis_number' => $request->regis_number,
            'name' => $request->name,
            'born' => $request->born,
            'sex' => $request->sex,
            'departemen_id' => $request->departemen_id,
            'semester' => $request->semester,
            'cause' => $request->cause,
            'updated_at' => $date
        );
        New_MemberModel::where('id', $id)->update($data);
        return redirect()->back()->with('status', 'Perubahan data berhasil dilakukan');
    }

    public function delete($id)
    {
        New_MemberModel::where('id', $id)->delete();
        return response()->json();
    }
}
