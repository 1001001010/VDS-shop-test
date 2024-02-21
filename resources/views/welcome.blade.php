<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ZETRIX - надежный хостинг для вашего бизнеса.</title>
    <meta name="keywords" content="VDS, servers, hosting, virtual dedicated servers" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
    content="Крупнейший провайдер VDS серверов. Гибкие тарифы, высокая производительность, круглосуточная поддержка." />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    {{-- <link rel="shortcut icon" href="/public/img/fav.svg" type="image/x-icon" /> --}}
</head>

<body>
    <div id="app">
    <header-component></header-component>
    </div>
    @vite('resources/js/app.js')
</body>

</html>