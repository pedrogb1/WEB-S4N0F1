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
                @foreach ($activeIngredients as $activeIngredient)
                    <h4>{{ $activeIngredient->name }}</h4>
                @endforeach
            </ul>
        </div>
</body>
</html>
