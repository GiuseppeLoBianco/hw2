<html>
    <head>
        <link rel='stylesheet' href='http://localhost/Homework2/resources/css/signup.css'>
        <script src='http://localhost/Homework2/public/signup.js' defer></script>

        <title>Iscriviti</title>
    </head>
    <body>
        <main>

        <section class="box">
            <h1>Registrati</h1>
            <form name='signup' method='post' enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" name ="_token" value="{{ $csrf_token }}">
                <div class="names">

                    <div class="name">
                        <div><label for='name'>Nome</label></div>
                        <div><input type='text' name='name'  ></div>
                        <span>Nome strano</span>
                    </div>

                    <div class="surname">
                        <div><label for='surname'>Cognome</label></div>
                        <div><input type='text' name='surname'></div>
                        <span>Cognome strano</span>
                    </div>
                </div>

                <div class="username">
                    <div><label for='username'>Nome utente</label></div>
                    <div><input type='text' name='username' ></div>
                    <span>Nome utente non disponibile</span>
                </div>

                <div class="email">
                    <div><label for='email'>Email</label></div>
                    <div><input type='text' name='email' ></div>
                    <span>Indirizzo email non valido</span>
                </div>

                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password'></div>
                    <span>Inserisci almeno 8 caratteri</span>
                </div>

                <div class="confirm_password">
                    <div><label for='confirm_password'>Conferma Password</label></div>
                    <div><input type='password' name='confirm_password'></div>
                    <span>Le password non coincidono</span>
                </div>

                <div class="submit">
                    <input type='submit' value="Registrati" id="submit" >
                </div>
            </form>
            <div class="signup">Hai un account?  <a href="{{route('login')}}">Accedi</a>
        </section>
        </main>
    </body>
</html>