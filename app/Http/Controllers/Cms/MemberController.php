<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Models\DepartementModel;
use App\Models\GenerationModel;
use App\Models\MemberModel;
use App\Models\PositionModel;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $data = array(
            'all' => MemberModel::all(),
            'departement' => DepartementModel::all(),
            'generation' => GenerationModel::all(),
            'position' => PositionModel::all(),
        );
        return view('Cms.Member')->with('data', $data);
    }

    public function create(MemberRequest $request)
    {
        $date = Carbon::now();
        $random = Str::random(11);
        $path = 'public/image/member';
        $img = $request->file('pic');
        $img_name = time() . "_" . $random . "." . $img->extension();
        $img->storeAs($path, $img_name);
        $data = array(
            'pic' => $img_name,
            'regist_number' => $request->regist_number,
            'name' => $request->name,
            'born' => $request->born,
            'sex' => $request->sex,
            'departement_id' => $request->departement_id,
            'generation_id' => $request->generation_id,
            'position_id' => $request->position_id,
            'created_at' => $date,
            'updated_at' => $date,
        );
        MemberModel::create($data);
        return redirect()->back()->with('status', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $result = MemberModel::where('id', $id)->first();
        return response()->json($result);
    }

    public function update(MemberRequest $request)
    {
        $id = $request->id;
        $date = Carbon::now();
        if ($request->file('pic') == null) {
            $img_name = $request->pic_update;
        } else {
            $random = Str::random(11);
            $path = 'public/image/member';
            $img = $request->file('pic');
            $img_name = time() . "_" . $random . "." . $img->extension();
            $img->storeAs($path, $img_name);
            Storage::disk('local')->delete('public/image/member/' . $request->pic_update);
        }
        $data = array(
            'pic' => $img_name,
            'regist_number' => $request->regist_number,
            'name' => $request->name,
            'born' => $request->born,
            'sex' => $request->sex,
            'departement_id' => $request->departement_id,
            'generation_id' => $request->generation_id,
            'position_id' => $request->position_id,
            'updated_at' => $date,
        );
        MemberModel::where('id', $id)->update($data);
        return redirect()->back()->with('status', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $data = MemberModel::where('id', $id)->value('pic');
        Storage::disk('local')->delete('public/image/member/' . $data);
        MemberModel::where('id', $id)->delete();
        return response()->json();
    }
}
