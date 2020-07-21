<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Time;
use App\Http\Requests\admin\time\CreateRequest;
use App\Http\Requests\admin\time\UpdateRequest;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time = Time::all()->first();
        return view('admin.time.index', compact('time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.time.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $time = Time::create($request->all());
        $time->save();
        flash()->success('Success');
        return redirect(route('time.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertising  $advertising
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertising  $advertising
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $time = Time::findOrFail($id);
        $time = Time::find($time->id);
        return view('admin.time.edit', compact('time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertising  $advertising
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request)
    {
        $ad = Time::findOrFail($request->id);
        $ad->update($request->all());
        flash()->success('updated'); 
        return redirect(route('time.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertising  $advertising
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Time::findOrFail($id);
        $ad->delete();
        flash()->success('Deleted'); 
        return back();
    }
}
