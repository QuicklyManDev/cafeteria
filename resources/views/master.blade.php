<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cafe107')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #4b2e05, #8d5524, #c3976f);
            font-family: 'Poppins', sans-serif;
            color: #fff8e1;
            min-height: 100vh;
            overflow-x: hidden;
            animation: bgShift 10s infinite alternate ease-in-out;
        }
        .navbar {
            background: linear-gradient(90deg, #3e2723, #6d4c41, #b8860b);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeDown 1s ease-out;
        }
        .navbar-brand {
            color: #f7d08a !important;
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 0 0 10px rgba(247, 208, 138, 0.6);
            transition: transform 0.3s ease, text-shadow 0.3s ease;
        }
        .navbar-brand:hover {
            transform: scale(1.1);
            text-shadow: 0 0 20px rgba(247, 208, 138, 0.9);
        }
        .nav-link {
            color: #fff8e1 !important;
            font-weight: 500;
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #f7d08a;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .nav-link:hover {
            color: #f7d08a !important;
        }
        .container {
            animation: fadeUp 1.2s ease-in-out;
        }
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes bgShift {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Cafe107</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Hacer pedido</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Administrar pedidos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>