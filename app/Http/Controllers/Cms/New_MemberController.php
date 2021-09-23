<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\New_MemberRequest;
use App\Models\DepartementModel;
use App\Models\New_MemberModel;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $random = Str::random(11);
        $path = 'public/image/CA';
        $img = $request->file('pic');
        $img_name = time() . "_" . $random . "." . $img->extension();
        $img->storeAs($path, $img_name);
        $data = array(
            'pic' => $img_name,
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
        $id = $request->id;
        $date = Carbon::now();
        if ($request->file('pic') == null) {
            $img_name = $request->pic_update;
        } else {
            $random = Str::random(11);
            $path = 'public/image/CA';
            $img = $request->file('pic');
            $img_name = time() . "_" . $random . "." . $img->extension();
            $img->storeAs($path, $img_name);
            Storage::disk('local')->delete('public/image/CA/' . $request->pic_update);
        }
        $data = array(
            'pic' => $img_name,
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
        $pic = New_MemberModel::where('id', $id)->value('pic');
        New_MemberModel::where('id', $id)->delete();
        Storage::disk('local')->delete('public/image/CA/' . $pic);
        return response()->json();
    }
}
