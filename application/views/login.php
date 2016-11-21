<?php require_once("Padrao/header.php"); ?>
   <aside class="propaganda1 back-gray">
        <img src="../estatico/img/bannertattoo.png" alt="propaganda tatuagem">
    </aside>
    
    <main class="inicio back-black-tp">
        <form class="formLogin" id="formLogin" action="../autenticar.php" method="post">
            <h1>Login</h1>
            <fieldset>
                <label>
                    <p>
            Nome: <input type="text" name="login" placeholder="Login" required autofocus>
                    </p>
            </label>
            <label>
                <p>
            Senha: <input type="password" name="senha" placeholder="Senha" required>
            </p>
            </label>
            </fieldset>
            <input type="submit" value="entrar">
        </form>
    </main>
    
    <aside class="propaganda2 back-gray">
        propaganda
        propaganda
    </aside>
<?php require_once("Padrao/footer.php"); ?>