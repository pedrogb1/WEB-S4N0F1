<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variações</title>
</head>
<body>
        <h1>FORMATOS:</h1>
        <div>
            @foreach ($possibleFormats as $format)
                <p>{{$format->format}}</p>
            @endforeach
        </div>
        <h1>EMBALAGENS:</h1>
        <div>
            @foreach ($possiblePackaging as $packaging)
                <p>{{$packaging->packaging}}</p>
            @endforeach
        </div>
        <h1>Tipos:</h1>
        <div>
            @foreach ($possibleTypes as $types)
                <p>{{$types->type}}</p>
            @endforeach
        </div>
        <div>
            <h1>Versões</h1>
            <ul>
                @foreach ($versions as $version)
                    <h5>
                        {{$version->active_ingredients.' '.$version->complement.' '.$version->dosage
                        .' - '.'denominação comercial: '.$version->product}}
                    </h5>
                @endforeach
            </ul>
        </div>
</body>
</html>
