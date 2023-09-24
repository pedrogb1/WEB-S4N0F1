<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>active ingredients</title>
</head>
<body>
        <div>
            <ul>
                @foreach ($remedies as $remedy)
                    <a href="{{ url('/active-ingredient/'.$remedy->active_ingredients) }}">
                        {{$remedy->active_ingredients}} - {{$remedy->count}}
                    </a>
                    <br>
                @endforeach
            </ul>
        </div>
</body>
</html>
