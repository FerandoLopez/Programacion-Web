<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actualizar registros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
@extends('template')

@section('contenido')
    <body class="antialiased">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{$error}}<br>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{route('libro.update',$libro->id)}}" method = "post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                    <label for="title">Title</label>
                    <input type="text" class="form-control" name = "title" placeholder="Titulo" value="{{$libro->title}}">
                    </div>
                    <div class="form-group">
                    <label for="pages">Pages</label>
                    <input type="text" class="form-control" name = "pages" placeholder="Paginas" value="{{$libro->pages}}" >
                    </div>
                    <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" name = "category" placeholder="Categoria" value="{{$libro->category}}">
                    </div>
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <a href="{{route('libro.index')}}" class="btn btn-danger">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    </body>
</html>