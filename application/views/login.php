   <aside class="propaganda1 back-gray">
    </aside>
    <main class="inicio back-black-tp">
      <label><input type="radio" name="escolheOpcao" id="logUsuario" class="css3button">Usuário Comum</label>
      
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
                    
                  <input type="text" name="login" required class="log" autofocus>
                    </p>
            </label>
            <label>
                <p>
                  <input type="password" name="senha" class="key"required>
            </p>
            </div>
            </label>
            </fieldset>
             <input type="submit" name="search" value="Entrar" class="css3button">
    </form>
      <!--LOGIN DO ESTUDIO-->      
            <br><form method="POST" class="loginEstudio"  action="/index.php/welcome/autenticarEstudio"  style="display:none;">
                
                 <h1><img <?= 'src="'.base_url("static/img/icons/login.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
            <fieldset>
                <div class="formstyle">
                <label>
                    <p>Logar como Estúdio</p>
                    <p>
                  <input type="text" name="login" placeholder="Login Estúdio" required autofocus>
                    </p>
            </label>
            <label>
                <p>
                  <input type="password" name="senha" placeholder="Senha" required>
            </p>
            </label>
            </fieldset>
             <input type="submit" name="search" value="Entrar" class="css3button">
            </div>  
        </form>
    </main>
