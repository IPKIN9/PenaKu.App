<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenerationRequest;
use App\Models\GenerationModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GenerationController extends Controller
{
    public function index()
    {
        $data = GenerationModel::all();
        return view('Cms.Generation')->with('data', $data);
    }

    public function create(GenerationRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'generation' => $request->generation,
            'created_at' => $date,
            'updated_at' => $date
        );
        GenerationModel::create($data);
        return redirect()->back()->with('status', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $result = GenerationModel::where('id', $id)->first();
        return response()->json($result);
    }

    public function update(GenerationRequest $request)
    {
        $id = $request->id;
        $date = Carbon::now();
        $data = array(
            'generation' => $request->generation,
            'updated_at' => $date
        );
        GenerationModel::where('id', $id)->update($data);
        return redirect()->back()->with('status', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        GenerationModel::where('id', $id)->delete();
        return response()->json();
    }
}
