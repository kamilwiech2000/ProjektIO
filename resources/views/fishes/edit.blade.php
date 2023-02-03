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

    <div id="edit" class="container mt-3 mb-5">
    <a name="edit">
        <h1>Edytuj rybę</h1>
    </a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('fishes.update', $fish) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name"> Gatunek  </label>
            <input id="name" name="name" type="text" value="{{ $fish->name }}">
        </div>
        <div class="form-group mb-3">
            <label for="weight">Średnia waga</label>
            <input id="weight" name="weight" type="text" value="{{ $fish->weight }}">
        </div>
        <div class="form-group mb-3">
            <label for="length">Średnia długość</label>
            <input id="length" name="length" type="text" value="{{ $fish->length}}">
        </div>
        <div class="form-group mb-3">
            <label for="description">Opis</label>
            <input id="description" name="description" type="text" value="{{ $fish->description }}">
        </div>
        <input type="submit" value="Wyślij">
    </form>
    <br>
    <a href="{{route('fishes.index')}}"><button > Wróć </button></a>
</div>

<style>
    .navbar-brand{
    font-style: italic;
    margin-left: 650px;
    font-size: 30px;
 }
 </style>

</html>
