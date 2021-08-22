<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header-component></header-component>
        {{-- <example-component></example-component> --}}
        <router-view></router-view>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
