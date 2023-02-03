<!doctype html>
<html lang="pl">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Klub wędkarski</title>

      </head>

      <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container-fluid">
            <a href="{{ route('start') }}" class="navbar-brand" style="color:rgb(252, 252, 252)">Klub wędkarski "Młode płotki" oficjalna strona</a>


          <div id="navbarSupportedContent">
            @include('log')
        </div>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            </ul>
          </div>
        </div>
      </nav>

<div id="fisheries" class="container mt-3 mb-5 ">
    <div class="navbar">
        <h1> Ryby </h1>
        <button><a class="text-decoration-none color-link-black" href="{{route('fishes.create')}}">Dodaj nową rybę</a></button>
    </div>
    <div class="row">
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Gatunek</th>
                <th scope="col">Średnia waga</th>
                <th scope="col">Średnia długość</th>
                <th scope="col">Opis </th>
                <th scope="col"> Edytuj </th>
                <th scope="col"> Usuń </th>
              </tr>
            </thead>
            <tbody>
              @forelse ($fishes as $fish)
              <tr>
                <td scope="row">{{$fish->id}}</td>
                <td>{{$fish->name}}</td>
                <td>{{$fish->weight}}</td>
                <td>{{$fish->length}}</td>
                <td>{{$fish->description}}</td>
                    <td><button><a class="text-decoration-none color-link-black" href="{{route('fishes.edit', $fish)}}">Edycja</a></button></td>
                    <td>
                        <form method="POST" action="{{ route('fishes.destroy', $fish->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Usuń</button>
                        </form>
                    </td>
            @empty
            <tr>
                <th scope="row" colspan="6">Brak ryb.</th>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<style>
    .navbar-brand{
    font-style: italic;
    margin-left: 650px;
    font-size: 30px;
 }
 </style>
</html>
