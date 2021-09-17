<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use App\Models\EventModel;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
        $data = array(
            'all' => EventModel::all()
        );
        return view('Event.Event')->with('data', $data);
    }
    public function create(EventRequest $request)
    {
        $date = Carbon::now();
        $data = array(
            'img' => $request->img,
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
        $data = array(
            'img' => $request->img,
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
        EventModel::where('id', $id)->delete();
        return response()->json();
    }
}
