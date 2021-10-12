<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livewire</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css') }}">
        <livewire:styles />
        <livewire:scripts />
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </head>
    <body class="flex flex-wrap justify-center">
        <div class="flex w-full justify-between px-4 bg-purple-900 text-white">
            <a class="mx-3 py-4" href="/">Home</a>
            @auth
            <livewire:logout />
            @endauth
            @guest
                <div class="py-4">
                    <a class="mx-3 " href="/login">Login</a>
                    <a class="mx-3 " href="/register">Register</a>

                </div>
            @endguest

        </div>
        <div class="my-10 w-full flex justify-center">
            {{ $slot }}
        </div>
    </body>
</html>


