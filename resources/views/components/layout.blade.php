<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eticom</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .user-container {
                margin: 0 auto;
            }
            .post {
                flex-flow: column;
                align-items: center;
                display: flex;
                margin: 0 30%;
            }
        </style>
    </head>
    <body>
        <nav class="flex justify-right bg-blue-300 mb-10 p-3">
            <a class="bg-white mr-4 p-2 rounded" href="/">Login</a>
            <a class="bg-white p-2 rounded" href="/signup">Register</a>
        </nav>
        {{ $slot }}
    </body>
</html>
