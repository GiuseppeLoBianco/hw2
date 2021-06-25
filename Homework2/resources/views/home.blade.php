<html>

    <head>
    <title>Homework</title>
    <link rel="stylesheet" href="http://localhost/Homework2/resources/css/main-style.css" />
    <script src="http://localhost/Homework2/resources/js/home.js" defer="true"></script>
    <meta name="viewport"content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
            
        <body>
            
            <nav>
            <div id="overlay"><h1 class="titolo"> Parliamo di film e serie TV</h1></div>
            </nav>
          
            <div class ="allflex">
            <div class ="sx_pag">
            <button onclick="location.href='#'">Home</button>
            <button onclick="location.href='{{route('preferiti')}}'">Preferiti</button>
            <button onclick="location.href='{{route('logout')}}'">Logout</button>
            </div>
        
            <div class = "dx_pag">
            <h1 class = "benvenuto">Ciao {{$user["name"]}}!</h1>
            <form name = "ricerca" id ="ricerca">
                <h1>Ricerca il tuo film o la tua serie TV:</h1>

                <label>Contenuto: <input type = "text" name = "content" id = "content"></label>
                
                <label>&nbsp;<input class="submit" type ="submit"></label>
                
            </form>

            <section class="griglia">
                
            </section>

            <h1 id="migliori">Le migliori del momento:</h1>
            <section class="top">
               
            </section>
             </div>
            </div>
    
            <footer>Powered by Web Programming 2021 - Unict</footer>
     </body>
   

</html>