<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
    crossorigin="anonymous">
    <title>Livewire</title>


    <livewire:styles />
    <livewire:scripts />

</head>

<body class="flex justify-center">

    <div class="w-10/12 my-10 flex">

        <div class="w-5/12 rounded border p-2">
            <livewire:tickets />
        </div>

        <div class="w-7/12 mx-2 rounded border p-2">
            <livewire:comments />
        </div>

    </div>

</body>
</html>
