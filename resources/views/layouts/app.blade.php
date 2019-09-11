<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('../resources/css/bootstrap.min.css') }}">
        <title>@lang('messages.title') - @yield('title')</title>
    </head>
    <body>
        <div class="container">
            <div class="text-center mt-3">
                <h1>@lang('messages.title') - @lang('messages.app')</h1>
            </div>
            <hr>
            @yield('content')
        </div>
    </body>
</html>
