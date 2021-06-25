<html>
    <head>
        <link rel='stylesheet' href=' http://localhost/Homework2/resources/css/signup.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.png">

        <title>Accedi</title>
    </head>
    <body>
        <main class="login">
        <section class="box">
            <h1>Accedi</h1>
            <?php
                if (isset($error)) {
                    echo "<span class='error'>$error</span>";
                }
                
            ?>
            <form name='login' method='post'>
            <input type="hidden" name ="_token" value="{{ $csrf_token }}">
                <div class="username">
                    <div><label for='username'>Nome utente o email</label></div>
                    <div><input type='text' name='username'></div>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password'></div>
                </div>
                <br>
                <div>
                    <input type='submit' value="Accedi">
                </div>
            </form>
            <div class="signup">Non hai un account? <a href="{{route('signup')}}">Iscriviti</a>
        </section>
        </main>
    </body>
</html>