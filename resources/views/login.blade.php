<!DOCTYPE html>
<html lang="pt-br">

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abel&family=Inconsolata:wght@300&family=Open+Sans&display=swap">
        <link rel="stylesheet" href="{{ asset('css/loginStyle.css') }}">


        <script type="text/javascript" src="{{ asset('js/code.jquery.com_jquery-3.7.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/loginScript.js') }}"></script>

    </head>
    <body> 
      

        <div id="content" class="error">
            <img src="{{ asset('img/logo.png') }}" alt="Logo da Sanofi. Escrito em cor preta, com o pingo do i em cor roxa."/>
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div id="login_user" class="conteiner">
                <label>Email:</label>
                <br/>
                <input class="entry" type="text" placeholder="exemplo@gmail.com"  name="email" id="email" required/>
                <span class="alert"></span>
            </div>

            <div id="login_pass" class="conteiner">
                <label>Senha:</label>
                <br/>
                <input class="entry" type="password" placeholder="Senha"  name="password" id="password" required/>
                <span class="alert"></span>
            </div>

            <button type="submit">Clique aqui para acessar</button>
        </div>
</form>

    </body>
</html>