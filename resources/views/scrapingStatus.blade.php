<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scraping status</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abel&family=Inconsolata:wght@300&family=Open+Sans&display=swap">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

</head>
<body>

    <div id="header">
        <img src="{{ asset('img/logo.png') }}" alt="Logo da Sanofi. Escrito em cor preta, com o pingo do i em cor roxa."/>
        <div id="menu">
            <<a href="{{url('/active-ingredients/')}}"></a>
            <a href="{{url('/statistics/')}}"></a>
            <a href="{{url('/scraping-status/')}}"></a>
            <div id="pesquisar">
            <div id="pesquisar">
                <input type="text" placeholder="Pesquise um medicamento"/>
                <a href="#">
                    <img src="img/icon_search.png" alt="Pesquisar no site"/>
                </a>
            </div>
        </div>
    </div>

    <div id="status" class="conteiner">
        <ul>
            @foreach ($scrapingStatus as $status)
                <div>
                    <h3>{{$status->url}}</h3>
                    <h4>Executado em: {{$status->updated}}</h4>
                    <h4>Status: {{$status->status}}</h4>
                </div>
            @endforeach
        </ul>
    </div>
</body>
</html>