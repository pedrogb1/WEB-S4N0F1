<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>active ingredients</title>

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
            <div id="pesquisar">
                <input type="text" placeholder="Pesquise um medicamento" id="search-input"/>
                <a href="#">
                    <img src="img/icon_search.png" alt="Pesquisar no site"/>
                </a>
            </div>
        </div>
    </div>

    <div id="principios" class="conteiner">
        <ul id="active-list">
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
<script>

function filterAndSortList() {
    const input = document.getElementById('search-input');
    const filter = input.value.toLowerCase();
    const list = document.getElementById('active-list');

    // Coletar todos os itens da lista
    const items = Array.from(list.getElementsByTagName('a'));

    // Dividir os itens em dois grupos: corresponde e não corresponde
    const matchingItems = items.filter(item => {
        const text = item.textContent || item.innerText;
        return text.toLowerCase().includes(filter);
    });

    const nonMatchingItems = items.filter(item => {
        const text = item.textContent || item.innerText;
        return !text.toLowerCase().includes(filter);
    });

    // Limpar a lista
    list.innerHTML = '';

    // Adicionar primeiro os itens que deram match com a busca
    matchingItems.forEach(item => {
        list.appendChild(item.cloneNode(true));
    });

    // Em seguida, adicionar os itens que não deram match com a busca
    nonMatchingItems.forEach(item => {
        list.appendChild(item.cloneNode(true));
    });
}

const searchInput = document.getElementById('search-input');
searchInput.addEventListener('input', filterAndSortList);

// Filtrar e classificar inicialmente
filterAndSortList();
</script>