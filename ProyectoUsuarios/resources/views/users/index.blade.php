<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Usuarios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
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
                        <form action="{{route('users.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <input type="text" name="name" class="from-control" placeholder="nombre" value="{{old('name')}}">
                                </div>
                                <div class="col-3">
                                    <input type="text" name="email" class="from-control" placeholder="email" value="{{old('email')}}" >
                                </div>
                                <div class="col-3">
                                    <input type="text" name="password" class="from-control" placeholder="password" value="{{old('password')}}">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <form action="{{route('users.destroy',$user)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn-danger" onclick="return confirm('¿Deseas eliminar?')">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>
