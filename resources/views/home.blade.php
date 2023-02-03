<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Klub wędkarski</title>

  </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" style="color:rgb(252, 252, 252)">Klub wędkarski "Młode płotki" oficjalna strona</a>
              <div id="navbarSupportedContent">
                @include('log')
            </div>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                </ul>
              </div>
            </div>
          </nav>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block" src="img/slide1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="img/slide2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="img/slide5.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Następny</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Poprzedni</span>
        </a>
      </div>



      <h1 class="font"> Troszkę o nas... </h1>
      <ul></ul>
      <ul></ul>
      <p class="text">
          Nasz klub wędkarski "Młode płotki" powstał w 2013 roku, a jego założycielami była grupa 4 studentów pasjonujących się wędkowaniem. Klub bardzo szybko zaczął się rozrastać, zyskując coraz to nowszych klubowiczów, którzy tak jak my w wolnych chwilach chwytali za wędkę i na kilka godzin znikali z tego świata, zaszywając się w gęstwinach tataraków i trzcin. Wraz z rozwojem klubu i coraz to większą rzeszą klubowiczów postanowiliśmy stworzyć "Forum klubowe" mające na celu ułatwić nam wszystkim komunikację oraz szybki dostęp do wszelkich ogłoszeń!
      </p>


      <h2 class="font"> Ryby </h2>
      <p class="text2"> Oto największe sztuki złowione przez naszych klubowiczów!</p>
      <section class="py-5" id="features">
        <div class="container my-5">
            @forelse ($fishes as $fish)
                @if ($loop->index % 4 == 0)
                    <div class="row my-3">
                @endif
                <div class="col-12 col-sm-6  col-md-6 col-lg-3 mx-auto">
                    <div class="card">
                        <img src="{{ asset('img/rekord' . $fish->id . '.jpg') }}" class="card-img-top"
                            style="height: 12vw" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">Gatunek: {{ $fish->name }}</h5>
                            <p class="card-text text-zaw ">Średnia waga: {{ $fish->weight }}</p>
                            <p class="card-text text-zaw ">Średnia długość: {{ $fish->length }}</p>
                            <p class="card-text text-zaw ">Opis: {{ $fish->description }}</p>

                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 4 == 0)
        </div>
        @endif
    @empty
        @endforelse
        </div>
    </section>


        <h6 class="font"> Lista łowisk... </h6>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Województwo</th>
              <th scope="col">Nazwa łowiska</th>
              <th scope="col">Występująca ryba</th>
              <th scope="col">Rok powstania łowiska</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($fisheries as $fishery)
            <tr>
              <th scope="row">{{$fishery->id}}</th>
              <td>{{$fishery->voivodeship}}</td>
              <td>{{$fishery->fishery}}</td>
              <td>{{$fishery->fish->name}}</td>
              <td>{{$fishery->creationdate}}</td>
            </tr>
            @empty
            @endforelse

          </tbody>
        </table>



        <h6 class="font"> Regulamin klubu... </h6>
        <p class="text"> 1. Wypuszczamy wszystkie okazy złowione na łowiskach nie-prywatnych. </p>
        <p class="text"> 2. Nie pozostawiamy po sobie żadnych smieci, dbamy o czystość na łowisku.</p>
        <p class="text"> 3. Staramy się zachowywać odległości pozwalające na swobodne łowienie.</p>
        <p class="text"> 4. Zakazane jest łowienie przy pomocy żywej przynęty.</p>
        <p class="text"> 5. Każda złowiona ryba powinna być wpisana do dziennika klubowego.</p>
        <p class="text"> 6. Co miesiąc każdy zobowiązuje się wplacić 10zl, na rozwój klubu.</p>
        <p class="text"> 7. Staramy się zachować wysoko kluturę oraz spokój na łowiskach.</p>
        <p class="text"> 8. Nie wchodzimy na teren łowiska pod wpływem alkoholu bądź środków odurzających.</p>
        </p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  <style>
    .d-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
  }


  .font {
      font-style: italic;
      text-align: center;
      text-decoration: overline;
      font-size: 50px;
      margin-top: 50px;
  }

  .text {
    margin-left: 200px;
    margin-right: 200px;
    font-size: 30px;
}

 .text2 {
  text-align: center;
  font-size: 30px;
 }

 .buttonzam {
    font-style: italic;
 }

 .navbar-brand{
    font-style: italic;
    margin-left: 500px;
    font-size: 30px;
 }

.btn {
    margin-left:525px;
}

  </style>
</html>


