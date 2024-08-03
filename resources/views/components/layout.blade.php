<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Job-Board</title>
</head>

<body class="mx-auto mt-10 mx-w-2xl bg-slate-200 text-slate-700">
    {{-- <div class="text-4xl">this should be a big tixt</div> --}}
    {{ $slot }}
</body>

</html>
