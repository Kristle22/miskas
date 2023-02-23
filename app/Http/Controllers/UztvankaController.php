<?php

namespace App\Http\Controllers;

use App\Models\Uztvanka;
use App\Http\Requests\StoreUztvankaRequest;
use App\Http\Requests\UpdateUztvankaRequest;

class UztvankaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uztvankos = Uztvanka::all();
        return view('uztvanka.index', ['uztvankos' => $uztvankos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uztvanka.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUztvankaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $uztvanka = new Uztvanka;
        $uztvanka->juodi = 0;
        $uztvanka->rudi = 0;
        $uztvanka->save();

        return redirect()->route('uztvanka-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uztvanka  $uztvanka
     * @return \Illuminate\Http\Response
     */
    public function show(Uztvanka $uztvanka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uztvanka  $uztvanka
     * @return \Illuminate\Http\Response
     */
    public function edit(Uztvanka $uztvanka)
    {
        // dd(Uztvanka::where('id', $uztvanka)->first());
        return view('uztvanka.edit', compact('uztvanka'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUztvankaRequest  $request
     * @param  \App\Models\Uztvanka  $uztvanka
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUztvankaRequest $request, Uztvanka $uztvanka)
    {
        // dd($request->all());
        if (isset($request->add)) {
            $uztvanka->juodi += null !== $request->j ? $request->j : 0;
            $uztvanka->rudi += null !== $request->r ? $request->r : 0;
        } else {
            $uztvanka->juodi -= null !== $request->j ? $request->j : 0;
            $uztvanka->rudi -= null !== $request->r ? $request->r : 0;
        }
        $uztvanka->save();
        return redirect()->route('uztvanka-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uztvanka  $uztvanka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uztvanka $uztvanka)
    {
        //
    }
}
