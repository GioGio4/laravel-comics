<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>

    @vite('resources/js/app.js')
</head>

<body> 
   
    @include('partials._header')
    @include('partials._jumbotron')


    <main>
        @yield('main_content')

    </main>

</body>

</html>