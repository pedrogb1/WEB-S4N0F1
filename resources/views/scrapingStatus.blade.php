<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scraping status</title>
</head>
<body>
        <div>
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
