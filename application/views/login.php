   <aside class="propaganda1 back-gray">
    </aside>
    <main class="inicio back-black-tp">
        <form class="formLogin" id="formLogin" action="/index.php/welcome/autenticar" method="post">
            <h1><img <?= 'src="'.base_url("static/img/icons/login.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
            <fieldset>
                <label>
                    <p>
                    
                  <input type="text" name="login" placeholder="Login"required autofocus>
                    </p>
            </label>
            <label>
                <p>
                  <input type="password" name="senha" placeholder="Senha"required>
            </p>
            </label>
            </fieldset>
             <input type="submit" name="search" value="Entrar" class="css3button">
        </form>
    </main>
