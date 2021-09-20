<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\PositionRequest;
use App\Models\PositionModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $data = PositionModel::all();
        return view('Cms.Position')->with('data', $data);
    }

    public function create(PositionRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'position_name' => $request->position_name,
            'created_at' => $date,
            'updated_at' => $date
        );
        PositionModel::create($data);
        return redirect()->back()->with('status', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $result = PositionModel::where('id', $id)->first();
        return response()->json($result);
    }

    public function update(PositionRequest $request)
    {
        $id = $request->id;
        $date = Carbon::now();
        $data = array(
            'position_name' => $request->position_name,
            'updated_at' => $date
        );
        PositionModel::where('id', $id)->update($data);
        return redirect()->back()->with('status', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        PositionModel::where('id', $id)->delete();
        return response()->json();
    }
}
