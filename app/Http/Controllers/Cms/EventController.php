<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\EventModel;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $data = array(
            'all' => EventModel::all()
        );
        return view('Cms.Event')->with('data', $data);
    }
    public function create(EventRequest $request)
    {
        $date = Carbon::now();
        $random = Str::random(11);
        $path = 'public/image/event';
        $img = $request->file('img');
        $img_name = time() . "_" . $random . "." . $img->extension();
        $img->storeAs($path, $img_name);
        $data = array(
            'img' => $img_name,
            'name' => $request->name,
            'link' => $request->link,
            'execution_date' => $request->execution_date,
            'description' => $request->description,
            'created_at' => $date,
            'updated_at' => $date
        );
        EventModel::create($data);
        return redirect()->back()->with('status', 'Data berhasil di tambahkan');
    }

    public function edit($id)
    {
        $result = EventModel::where('id', $id)->first();
        return response()->json($result);
    }

    public function update(EventRequest $request)
    {
        $date = Carbon::now();
        $id = $request->id;
        if ($request->file('img') == null) {
            $img_name = $request->img_update;
        } else {
            $random = Str::random(11);
            $path = 'public/image/event';
            $img = $request->file('img');
            $img_name = time() . "_" . $random . "." . $img->extension();
            $img->storeAs($path, $img_name);
            Storage::disk('local')->delete('public/image/event/' . $request->img_update);
        }
        $data = array(
            'img' => $img_name,
            'name' => $request->name,
            'link' => $request->link,
            'execution_date' => $request->execution_date,
            'description' => $request->description,
            'updated_at' => $date
        );
        EventModel::where('id', $id)->update($data);
        return redirect()->back()->with('status', 'Perubahan data berhasil dilakukan');
    }

    public function delete($id)
    {
        $img = EventModel::where('id', $id)->value('img');
        EventModel::where('id', $id)->delete();
        Storage::disk('local')->delete('public/image/event/' . $img);
        return response()->json();
    }
}
