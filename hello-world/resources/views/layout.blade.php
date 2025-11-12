<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('titulo', 'Meu Site!!')
    </title>
</head>
<body>
    <header> <a href="{{ Route('home_page') }}"> Home </a> | <a href="/services"> Serviços </a> | <a href="{{ Route('contact_page') }}"> Entre em contato </a> </header>
    <hr>
    <main> @yield('content')</main>
    <hr>
    <footer> Rodapé </footer>
</body>
</html>
