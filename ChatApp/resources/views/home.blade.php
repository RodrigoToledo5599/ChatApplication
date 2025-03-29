<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/livewire/conversation-side-bar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/livewire/conversation.css') }}" rel="stylesheet"> --}}
    <style>
        body{
            padding:0
        }
        .home-page-content{
            padding-top: 3vh;
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
    </style>
    @livewireStyles
</head>
<body>
    <div class="home-page-content">
        <livewire:conversation-side-bar />
        {{-- <livewire:conversation-box :receiverId= "0" /> --}}
        <livewire:conversation-box/>
    </div>
    


    @livewireScripts
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>