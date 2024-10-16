<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
</head>

<body>
    <header class="bg-light fixed-top py-3 shadow">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo e nome da empresa -->
                <div class="col-6 col-md-3 text-start">
                    <img src="{{ asset('src/Frame.png') }}" alt="Logo" class="img-fluid ms-1">
                    <span class="h4 ms-3">Lalasia</span>
                </div>

                <!-- Navegação -->
                <div class="col-6 col-md-6">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="{{ route('product') }}">Product</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="{{ route('articles') }}">Articles</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Ícones à direita -->
                <div class="col-12 col-md-3 d-none d-md-flex justify-content-end">
                    <div class="d-flex">
                        <a href="#" class="btn me-1"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="btn me-1"><i class="fas fa-user"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-5 pt-5">
    <div class="row h-100">
        <!-- Seta à esquerda -->
        <div class="col-12 col-md-2 d-flex align-items-center justify-content-center mb-3 mb-md-0">
            <img src="{{ asset('src/seta.png') }}" alt="Seta" class="seta img-fluid">
        </div>

        <!-- Coluna central: Texto e título -->
        <div class="col-12 col-md-8 d-flex flex-column justify-content-center text-center">
            <h1 class="title">
                Discover Furniture With<br>High Quality Wood
                <img src="{{ asset('src/estrela.png') }}" alt="Estrela" class="star">
            </h1>
            <h5 class="description">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non. Purus parturient viverra nunc, tortor sit laoreet.</h5>
        </div>

        <!-- Seta à direita -->
        <div class="col-12 col-md-2 d-flex align-items-center justify-content-center mb-3 mb-md-0">
        </div>
    </div>
</div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
