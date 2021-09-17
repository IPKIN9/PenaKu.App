<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartementRequest;
use App\Models\DepartementModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DeptController extends Controller
{
    public function index()
    {
        $data = DepartementModel::all();
        return view('Cms.Departement')->with('data', $data);
    }

    public function create(DepartementRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'name' => $request->name,
            'created_at' => $date,
            'updated_at' => $date,
        );
        DepartementModel::create($data);
        return redirect()->back()->with('status', 'Data berhasil di tambahkan');
    }

    public function edit($id)
    {
        $result = DepartementModel::where('id', $id)->first();
        return response()->json($result);
    }

    public function update(DepartementRequest $request)
    {
        $date = Carbon::now();
        $id = $request->id;
        $data = array(
            'name' => $request->name,
            'updated_at' => $date
        );
        DepartementModel::where('id', $id)->update($data);
        return redirect()->back()->with('status', 'Perubahan data berhasil dilakukan');
    }

    public function delete($id)
    {
        DepartementModel::where('id', $id)->delete();
        return response()->json();
    }
}
