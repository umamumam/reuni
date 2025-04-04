<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Additional CSS -->
    @yield('styles')
    
    <!-- Custom Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .container {
            min-height: 70vh;
        }
        footer {
            background-color: #f8f9fa;
            color: #6c757d;
        }
        footer p {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('status_keluarga.index') }}">Status Keluarga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('keluarga.index') }}">Keluarga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('halal_bil_halal.index') }}">Halal Bihalal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('santunan.index') }}">Santunan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('galeri.index') }}">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="py-3 mt-4">
        <div class="container">
            <p class="mb-0 text-center">&copy; {{ date('Y') }} Laravel App. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Additional Scripts -->
    @yield('scripts')
</body>

</html>
