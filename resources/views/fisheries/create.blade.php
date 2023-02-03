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

    <div id="create" class="container mt-3 mb-5">
        <a name="create">
            <h1>Dodaj nowe łowisko</h1>
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
        <form method="POST" action="{{route('fisheries.store')}}">
            @csrf
            <div class="form-group mb-3">
                <label for="voivodeship"> Województwo </label>
                <input id="voivodeship" name="voivodeship" type="text">
            </div>
            <div class="form-group mb-3">
                <label for="fishery">Nazwa łowiska</label>
                <input id="fishery" name="fishery" type="text">
            </div>
            <div class="form-group mb-3">
                <label for="fish_id">Występująca ryba</label>
                <input id="fish_id" name="fish_id" type="text">
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gatunek</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($fishes as $fish)
                  <tr>
                    <th scope="row">{{$fish->id}}</th>
                    <td>{{$fish->name}}</td>
                  </tr>
                  @empty
                  @endforelse

                </tbody>
              </table>
            <div class="form-group mb-3">
                <label for="creationdate">Rok powstania łowiska</label>
                <input id="creationdate" name="creationdate" type="text">
            </div>

            <input class="btn btn-primary" type="submit" value="Wyślij">
        </form>
    </div>

    <style>
        .navbar-brand{
        font-style: italic;
        margin-left: 650px;
        font-size: 30px;
     }
     </style>
</html>
