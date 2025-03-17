<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title> {{ $title ?? 'Sistem Prodi' }}</title>
    <link rel="icon" href="" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
        }

        .spinner {
            border: 5px solid rgba(0, 0, 0, 0.2);
            /* Light border for background */
            border-radius: 50%;
            border-top: 5px solid #3498db;
            /* Blue border for spinner */
            width: 36px;
            /* Increased size for visibility */
            height: 36px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="flex flex-col w-full z-14">
    <livewire:component.navbar />
    <div class="flex flex-col min-h-screen md:flex-row z-12">
        <aside class="flex-shrink-0 z-11">
            <livewire:component.sidebar />
        </aside>
        <div class="flex flex-col flex-1">
            <main class="flex-1 bg-gray-200">
                {{ $slot }}
            </main>
            <livewire:component.footer />
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS untuk memperkecil ukuran modal -->
    <style>
        .small-swal {
            font-size: 0.8rem;
            /* Ukuran font lebih kecil */
            padding: 1.5rem;
            /* Mengurangi padding modal */
            width: 300px;
            /* Mengurangi lebar modal */
        }
    </style>
    @livewireScripts
</body>

</html>
