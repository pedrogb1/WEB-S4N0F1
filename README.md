# WEB-Sanofi

<h3> Como executar a aplicação localmente </h3>

<h3>1. Instale docker</h3>
<h3>2. inicialize o docker abrindo o app docker desktop</h3>
<h3>3. Abra o projeto e execute no cmd na raíz do projeto:</h3>


```console
C:\Users\Web-sanofi>docker-compose build
```

<h4>Isso fará a build da imagem </h4>

<h3>4. Execute o container </h3>

```console
C:\Users\Web-sanofi>docker-compose up
```

<h3> Output desejado: </h3>



```console
web-sanofi-web-sanofi-1  | 
web-sanofi-web-sanofi-1  |    INFO  Server running on [http://0.0.0.0:80].  
web-sanofi-web-sanofi-1  | 
web-sanofi-web-sanofi-1  | 
web-sanofi-web-sanofi-1  |   Press Ctrl+C to stop the server
web-sanofi-web-sanofi-1  |
web-sanofi-web-sanofi-1  |
web-sanofi-web-sanofi-1  |   2023-08-09 18:43:23
web-sanofi-web-sanofi-1  |  ................................................... ~ 0s
web-sanofi-web-sanofi-1  |   2023-08-09 18:43:23 /favicon.ico
web-sanofi-web-sanofi-1  |  ......................................
web-sanofi-web-sanofi-1  |  ~ 0s
```
<h3> Verifique se o serviço está disponível. Acesse <a href="http://localhost:8080">http://localhost:8080</a> no navagador </h3>

<h1>Perguntas:</h1>
<h4>Onde customizo o frontend (html, css e javascript)?<h4>
<h4>Veja na pasta resources/ lá, terá as pastas para css, javascript. O html está nessa mesma pasta dentro de /views</h4>

