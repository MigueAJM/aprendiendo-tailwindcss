<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwindcss</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container">
        <div class="grid grid-cols-4 gap-4">
            <div class="bg-blue-100 col-span-2 col-start-2">A</div>
            <div class="bg-blue-200 col-start-1">B</div>
            <div class="bg-blue-300">C</div>
            <div class="bg-blue-400">D</div>
        </div>
    </div>


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
