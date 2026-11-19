<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Praktikum PAW - Laravel 12</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body text-center p-5">

                <img
                    src="{{ Vite::asset('resources/images/main.svg') }}"
                    alt="Logo Laravel"
                    width="150"
                    class="mb-4"
                >

                <h1 class="text-primary fw-bold">
                    Selamat Datang!
                </h1>

                <h3 class="mb-3">
                    Praktikum Pemrograman Aplikasi Web
                </h3>

                <p class="text-muted">
                    Bundling Asset dengan Vite dan Bootstrap
                    pada Laravel 12.
                </p>

                <button type="button" class="btn btn-primary">
                    <i class="bi bi-check-circle"></i>
                    Bootstrap berhasil terpasang
                </button>

            </div>
        </div>
    </div>

</body>
</html>
