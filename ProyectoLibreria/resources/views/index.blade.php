<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Libros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
@extends('template')

@section('contenido')
    <body class="antialiased">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <table class="table table-dark table-striped mt-4">
                    <thead>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Pages</th>
                        <th>Category</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </thead>
                    <tbody>
                        @foreach ($libros as $libro)
                        <tr>
                            <td>{{$libro->id}}</td>
                            <td>{{$libro->title}}</td>
                            <td>{{$libro->pages}}</td>
                            <td>{{$libro->category}}</td>
                            <td>
                            <form action="{{route('libro.destroy',$libro)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="Delete" class="btn-danger" onclick="return confirm('¿Deseas eliminar?')">
                                </form>
                                <td>
                            <form action="{{route('libro.edit',$libro->id)}}" method="get">
                                    @csrf
                                    <input type="submit" value="Update" class="btn-warning">
                                </form>
                             </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{route('libro.create')}}">
                <button class="btn btn-primary">Nuevo</button>
                                </div>
                            </div>
                    </form>
                    <div class="d-flex justify-content-end">
                {{ $libros->links() }}
                </div>
            </div>
        </div>
    </div>
    @endsection
    </body>
</html>

