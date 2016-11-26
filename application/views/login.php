   <aside class="propaganda1 back-gray">
    </aside>
    <main class="inicio back-black-tp">
      <label><input type="radio" name="escolheOpcao" id="logUsuario" class="css3button" checked>Usuário Comum</label>
      
      <label><input type="radio" name="escolheOpcao" id="logEstudio" class="css3button" >Estúdio</label>
      
        <form  method="POST" action="/index.php/welcome/autenticar" class="loginUsuario" >
            <h1><img <?= 'src="'.base_url("static/img/icons/login.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>        
            <fieldset>
            <div class="login">
                <label>
                    <p>
                    Logar como Usuário
                    </p>
                    <p>
                   <img <?= 'src="'.base_url("static/img/icons/lock.png").'"';?> class="name">
                  <input type="text" name="login" placeholder="Login Usuário" required class="log" autofocus>
                    </p>
            </label>
            <label>
                <p>
                  <img <?= 'src="'.base_url("static/img/icons/key.png").'"';?> class="name">
                  <input type="password" name="senha" placeholder="Senha" class="key"required>
            </p>
               <input type="submit" name="search" value="Entrar" class="css3button">
            </div>
            </label>
            </fieldset>
    </form>
      <!--LOGIN DO ESTUDIO-->      
            <br><form method="POST" class="loginEstudio"  action="/index.php/welcome/autenticarEstudio"  style="display:none;">
                 <h1><img <?= 'src="'.base_url("static/img/icons/login.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
            <fieldset>
                <div class="login">
                <label>
                    <p>Logar como Estúdio</p>
                    <p>
                  <img <?= 'src="'.base_url("static/img/icons/lock.png").'"';?> class="name">
                  <input type="text" name="login" placeholder="Login Estúdio" required autofocus>
                    </p>
            </label>
            <label>
                <p>
                  <img <?= 'src="'.base_url("static/img/icons/key.png").'"';?> class="name">
                  <input type="password" name="senha" placeholder="Senha" required>
            </p>
             <input type="submit" name="search" value="Entrar" class="css3button">
            </label>
            </fieldset>
            </div>  
        </form>
    </main>
