<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<header class="bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-3">
                <img src="{{ asset('sr/Frame.png') }}" alt="Logo" class="img-fluid">
            </div>

            <div class="col-12 col-md-6">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('product') }}"><i class="fas fa-box"></i> Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('services') }}"><i class="fas fa-concierge-bell"></i> Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('articles') }}"><i class="fas fa-newspaper"></i> Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aboutus') }}"><i class="fas fa-info-circle"></i> About Us</a>
                            </li>
                        </ul>

                        <!-- Botões de ações - Ajustados para dispositivos móveis -->
                        <div class="col-12 col-md-3">
                            <a href="#" class="btn btn-light"><i class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="btn btn-light"><i class="fas fa-user"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>




    <!-- Script do Bootstrap para funcionamento do navbar -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
