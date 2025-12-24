<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <!-- styles / scripts -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
          <div class="max-w-4xl w-full bg-white rounded-lg shadow-sm p-8">
            {{ $slot }}
          </div>
        </div>
    </body>
</html>
