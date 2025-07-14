<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="h-full bg-blue-500">
    <h1 class="font-bold text-3xl text-white">
        Hello World!
    </h1>
</body>
</html>