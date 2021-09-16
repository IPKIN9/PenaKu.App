<?php

namespace App\Http\Controllers\Contoh;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContohRequest;
use App\Models\ContohModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index()
    {
        $data = array(
            'all' => ContohModel::all()
        );
        return view('Contoh.Contoh')->with('data', $data);
    }

    public function create(ContohRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'contoh' => $request->contoh,
            'created_at' => $date,
            'updated_at' => $date,
        );
        ContohModel::create($data);
        return redirect()->back()->with('status', 'Data berhasil di tambahkan');
    }

    public function edit($id)
    {
        $result = ContohModel::where('id', $id)->first();
        return response()->json($result);
    }

    public function update(ContohRequest $request)
    {
        $date = Carbon::now();
        $id = $request->id;
        $data = array(
            'contoh' => $request->contoh,
            'updated_at' => $date
        );
        ContohModel::where('id', $id)->update($data);
        return redirect()->back()->with('status', 'Perubahan data berhasil dilakukan');
    }

    public function delete($id)
    {
        ContohModel::where('id', $id)->delete();
        return response()->json();
    }
}
