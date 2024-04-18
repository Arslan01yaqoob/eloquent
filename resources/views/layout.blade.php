<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Eloquent</title>
</head>

<body>

    <div class="bg-warning p-4">
        <h1 style="text-align: center">Eloquent Crud</h1>
    </div>

    <div class="container py-4" style="background-color: #a7dae44d">
        <h2 style="text-align: center">@yield('title')</h2>
        <div class="row">
            @if (session('status'))
            <div class="alert alert-success">

                {{session('status')}}
                </div>    

            @endif
        </div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
