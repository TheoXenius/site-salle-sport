<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&family=Poppins:ital,wght@0,100;0,200;0,400;0,500;1,100&display=swap');
</style>
<body>
    <header>
        <h1>site-salle-sport</h1>
        <div>
            <nav>
                <a href= "{{ route('main.accueil') }}">Accueil </a>
                <a href= "{{ route('main.cours') }}">Cours </a>
                <a href= "{{ route('main.tarifs') }}">Tarifs </a>
                <a href= "{{ route('main.contact') }}">Contact </a>
                <a href= "{{ route('main.mentions-legales') }}">Mentions-Legales </a>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer>
        <div>
            <a href= "{{ route('main.mentions-legales') }}">Mentions-Legales </a>
        </div>
    </footer>
</body>
</html>