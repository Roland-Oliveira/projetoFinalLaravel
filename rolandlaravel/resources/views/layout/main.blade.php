<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--js-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.jogos') }}">Jogos</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.generos') }}">Generos
                    </a>
                  </li>


                </ul>

              </div>
            </div>
          </nav>
    </header>

    <main>

        @yield('content')
        @yield('endcontent')
    </main>

    <footer>
        <div class="footer">
            <div class="boxs">



                   <div> <img src="{{asset('assets\img\logo.png')}}"></div>

            </div>

            <div class="boxs">
                <h3>Contacts</h3>
                <ul>

                    <li><span class="text-grey">Telefone:</span>(xxx) xxx xxx xxx</li>
                    <li><span class="text-grey">Email:</span>xxx@gmail.com</li>
                    <li><span class="text-grey">Web:</span>lipsum.com</li>
                </ul>
            </div>

            <div class="boxs">
                <h3>Links</h3>
                <ul>
                    <li><a href="#">Lorem </a></li>
                    <li><a href="#">Lorem </a></li>
                    <li><a href="#">Lorem </a></li>
                    <li><a href="#">Lorem  </a></li>
                    <li><a href="#">Lorem </a></li>
                    <li><a href="#">Lorem </a></li>
                    <li><a href="#">Lorem </a></li>

                </ul>
            </div>

            <div class="boxs">
                <h3>Lorem</h3>
                <p>ELorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum, nisi in aliquam placerat, mi quam finibus turpis, rutrum rutrum felis odio vel tortor.

                </p>

            </div>
        </div>
            <div class="rodape"> &copy; Todos os direitos reservados 2023 </div>
    </footer>

</body>
</html>
