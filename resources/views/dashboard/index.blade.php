<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>后台管理</title>

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ config('blog.default_icon') }}">

    <style>
        [v-cloak] { display: none; }
    </style>

    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        }

        window.User = {!! Auth::user() !!}

            window.Language = "{{ config('app.locale') }}"
    </script>
</head>
<body>
    <div id="app"></div>
</body>
</html>