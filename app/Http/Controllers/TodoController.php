<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('todo/List', [
            'todos'=> Todo::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('todo/Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['task'=>'required']);
        Todo::create($request->all());
        return redirect()->route('todo.index')->with('success','Task Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todo::find($id)->delete();
        return redirect()->route('todo.index')
            ->with('success', 'Task deleted successfully!');
    }

    public function moreToastExamples(Request $request)
    {
        if($request->has('success')){
            return redirect()->route('toast.more')
                ->with('success','THis is success message example');
        }
        if($request->has('error')){
            return redirect()->route('toast.more')
                ->with('success','THis is error message example');
        }
        if($request->has('multi')){
            return redirect()->route('toast.more')
                ->with('success','THis is success message example multiple')
                ->with('errors', 'This is error message example multiple');
        }

        //use with laracast flash
        if($request->has('larasuccess')){
            flash()->success('Laracast flash successful!');
            return redirect()->route('toast.more');
        }
        if($request->has('laraerror')){
            flash()->error('Laracast flash error message!');
            return redirect()->route('toast.more');
        }
        if($request->has('laraimportant')){
            flash()->warning('Laracast flash important message, will not autohide!')
                ->important();
            return redirect()->route('toast.more');
        }
        if($request->has('laramulti')){
            flash()->success('this is good success!')
                ->error('This is good error')
                ->warning('This is good warning');
            return redirect()->route('toast.more');
        }

        return Inertia::render('MoreExample');
    }
}
