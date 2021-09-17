<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\NewsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $data = NewsModel::all();
        return view('Cms.News')->with('data', $data);
    }

    public function create(NewsRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'title' => $request->title,
            'contents' => $request->contents,
            'created_at' => $date,
            'updated_at' => $date,
        );
        NewsModel::create($data);
        return redirect()->back()->with('status', 'Data berhasil di tambahkan');
    }

    public function edit($id)
    {
        $result = NewsModel::where('id', $id)->first();
        return response()->json($result);
    }

    public function update(NewsRequest $request)
    {
        $date = Carbon::now();
        $id = $request->id;
        $data = array(
            'title' => $request->title,
            'contents' => $request->contents,
            'updated_at' => $date
        );
        NewsModel::where('id', $id)->update($data);
        return redirect()->back()->with('status', 'Perubahan data berhasil dilakukan');
    }

    public function delete($id)
    {
        NewsModel::where('id', $id)->delete();
        return response()->json();
    }
}
