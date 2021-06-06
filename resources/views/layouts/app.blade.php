<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToDo List</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .app-container {
                max-width: 700px;
            }
            
            .card {
                margin: 10px auto;
                padding: 5px;
            }

            .add-task {
                margin-top: 80px;
            }

            .card-title {
                margin-top: 10px;
            }

            input[type=text] {
                width: 300px;
            }
        </style>
    </head>
    <body>
        <div class="container app-container">
            <nav class="navbar fixed-top bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">My Todo List</a>
                </div>
            </nav>

        @yield('content')

        </div>
    </body>
</html>