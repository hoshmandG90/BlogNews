<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZingSoft</title>

    @livewireStyles
</head>
<body>


@yield('content')

@livewireScripts
<script type="model">import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo'</script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>


    
</body>
</html>