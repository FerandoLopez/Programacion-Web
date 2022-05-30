<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $libros = Libro::paginate(5);

        // $libros = libro::latest()->get();
        //dd($user);
        return view('index',[
            'libros' => $libros
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insertar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'pages' => ['required'],
            'category'=> ['required']
        ]);

        Libro::create([
            'title' => $request->title,
            'pages'=> $request->pages,
            'category'=> $request->category
        ]);

        $libros = Libro::paginate(5);
        return view('index',[
            'libros' => $libros
        ]);
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
        $libro = Libro::find($id);
        return view('editar')->with('libro',$libro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'title' => 'required',
            'pages' => ['required'],
            'category'=> ['required']
        ]);

        $libro->update($request->all());

        return redirect()->route('libro.index')
        ->with('Correcto','Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro -> delete();
        return back();
    }
}
