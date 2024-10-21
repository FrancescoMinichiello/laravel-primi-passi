<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
</head>
<body>
    <header class="container">
        <div class="row flex-column">
            <div class="col text-center my-4">
                <h1>{{$title}}!</h1>
            </div>
            <div class="col text-center mb-4">
                <h4>{{$desc}}!</h4>
            </div>
            <div class="col text-center">
                <ul>
                    @foreach ($list as $itemlist)
                    <li class="fw-semibold">
                        {{$itemlist}}
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>
</html>
