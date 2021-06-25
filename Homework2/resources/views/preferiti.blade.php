<html>
    <head>
    <title>Homework</title>
    <link rel="stylesheet" href="http://localhost/Homework2/resources/css/main-style.css" />
    <script src="http://localhost/Homework2/resources/js/preferiti.js" defer="true"></script>
    <meta name="viewport"content="width=device-width, initial-scale=1"/>
    
    </head>
            
        <body>
            
            <nav>
            <div id="overlay"><h1 class="titolo"> Parliamo di film e serie TV</h1></div>
            </nav>

            <div class ="allflex">

            <div class ="sx_pag">
            <button  onclick="location.href='{{route('home')}}'">Home</button>
            <button onclick="location.href='#'">Preferiti</button>
            <button onclick="location.href='{{route('logout')}}'">Logout</button>
            </div>

            <div class = "dx_pag">
            <h1 class = "benvenuto">Ciao {{$user["name"]}}!</h1>        
            <article class="hidden" id="preferiti">
                <h1>Preferiti:</h1>
                <section id ="prefelem"></section>
            </article>
            </div>
            </div>

            <footer>Powered by Web Programming 2021 - Unict</footer>
     </body>
   

</html>