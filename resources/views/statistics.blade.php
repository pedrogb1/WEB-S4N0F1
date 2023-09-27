<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatísticas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abel&family=Inconsolata:wght@300&family=Open+Sans&display=swap">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                <h1>Total de extrações:</hi>
                <h2>{{$countTotal}}</h2>
        </ul>
    </div>

    <div class="chart-container">
        <!-- Bar chart canvas -->
        <canvas id="myBarChart"></canvas>
    </div>


    <script>
        // Sample data for the bar chart
        const data = {
            labels: @json($urlsList),
            datasets: [{
                label: 'Data',
                data: @json($valuesList),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        // Chart configuration
        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Create the chart
        const ctx = document.getElementById('myBarChart').getContext('2d');
        const myChart = new Chart(ctx, config);
    </script>

    <style>
        /* CSS to center the chart container */
        .chart-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh; /* Adjust the height as needed */
        }
    </style>

    
</body>
</html>