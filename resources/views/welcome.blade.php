<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwindcss</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        /* Comprobar que la clase container si funciona */
        .container{
            background-color: cyan;
        }
    </style>
</head>
<body>
    <div class="container mx-auto">
        <h1>Este es un H1</h1>
        <h2>Este es un H2</h2>
        <h3>Este es un H3</h3>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
