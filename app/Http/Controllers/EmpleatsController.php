<?php

namespace App\Http\Controllers;

use App\Models\Empleats;
use Illuminate\Http\Request;

class EmpleatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleats = Empleats::Paginate(5);
        return view('empleat.index')
            ->with('empleat', $empleats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleat.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Empleats $empleats)
    {
        /* $request->validate([
            'name' => 'required|max:15',
            'salary' => 'required|gte:50'
        ]); */
        /* return 'Anem a desar les dades'; */
        $empleat = Empleats::create($request->only('name', 'due', 'comments'));

        return redirect()->route('empleats.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleats  $empleats
     * @return \Illuminate\Http\Response
     */
    public function show(Empleats $empleats)
    {
        
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleats  $empleats
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleats $empleats)
    {
        return view('empleat.form')
            ->with('empleat', $empleats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleats  $empleats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleats $empleats)
    {
        $empleats->name = $request['name'];
        $empleats->due = $request['due'];
        $empleats->comments = $request['comments'];
        $empleats->save();

        return redirect()->route('empleats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleats  $empleats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleats $empleats)
    {
        $empleats->delete();
        return redirect()->route('empleats.index');
    }
}
