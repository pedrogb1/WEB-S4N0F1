<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variações</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abel&family=Inconsolata:wght@300&family=Open+Sans&display=swap">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

</head>
<body>

    <div id="header">
        <img src="{{ asset('img/logo.png') }}" alt="Logo da Sanofi. Escrito em cor preta, com o pingo do i em cor roxa."/>
        <div id="menu">
            <a href="{{url('/active-ingredients/')}}"></a>
            <a href="{{url('/statistics/')}}"></a>
            <a href="{{url('/scraping-status/')}}"></a>
            <div id="pesquisar">
                <input type="text" placeholder="Pesquise um medicamento"/>
                <a href="#">
                    <img src="{{ asset('img/icon_search.png') }}"alt="Pesquisar no site"/>
                </a>
            </div>
        </div>
    </div>

    <div id="versions" class="conteiner">
        <h1>Formatos:</h1>
        <div>
            @foreach ($possibleFormats as $format)
                <p>{{$format->format}}</p>
            @endforeach
        </div>
        <h1>Embalagens:</h1>
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
        <h1>Ver semelhantes:</h1>
        <div id='principios2'>
        <ul >
            @foreach ($matchRemedies as $match)
            <a href="{{ url('/active-ingredient/'.$match->match) }}">
                {{$match->match}}
            </a>
            @endforeach
</ul>
        </div>
        <div>
            <h1>Versões</h1>
            <ul>
                @foreach ($versions as $version)
                    <h4>
                        {{$version->active_ingredients.' '.$version->complement}}
                        <span style="color: red;" > {{$version->dosage}}</span>
                        - denominação comercial:<span style="color: blue;" >  {{ $version->product }}</span>

                    </h4>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>