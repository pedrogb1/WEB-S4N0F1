<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variações</title>
</head>
<body>
        <div>
            <ul>
                @foreach ($versions as $version)
                    <h4>
                        {{$version->active_ingredients.' '.$version->complement}}
                    </h4>
                @endforeach
            </ul>
        </div>
</body>
</html>
