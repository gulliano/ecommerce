<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique Moderne - Accueil</title>
    <!-- Chargement de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Configuration de la police Inter */
        body {
            font-family: 'Inter', sans-serif;
            @apply bg-gray-50 text-gray-800;
        }
        /* Styles pour le spinner de chargement */
        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-left-color: #6366f1; /* indigo-500 */
            border-radius: 50%;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <x-header />
        <main class="flex-grow container mx-auto px-4 py-12 md:py-16">
            @yield('content')
        </main>
    <x-footer />


</body>
</html>