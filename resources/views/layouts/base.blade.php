<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZingSoft</title>

    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.min.css') }}">
    @livewireStyles

   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>


@yield('content')

@livewireScripts



    
</body>
</html>