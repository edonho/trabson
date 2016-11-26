   <aside class="propaganda1 back-gray">
    </aside>
    <main class="inicio back-black-tp">
        <form class="formLogin" id="formLogin" action="/index.php/welcome/autenticar" method="post">
            <h1><img <?= 'src="'.base_url("static/img/icons/login.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>        
          <label><input type="radio" name="escolheUsuario" id="formUsuario" class="css3button" checked>Usuário Comum</label>
          <label><input type="radio" name="escolheUsuario" id="formUsuario" class="css3button" >Estúdio</label>
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
      <!--LOGIN DO ESTUDIO-->      
    
            <br><form method="POST" class="formLoginEstudio" id="formLoginEstudio" action="/index.php/welcome/autenticarEstudio"  style="display:none;">
                
                 <h1><img <?= 'src="'.base_url("static/img/icons/login.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
                 
                <label><input type="radio" name="escolheUsuario" id="formUsuario" class="css3button" checked>Estúdio</label>    
    
            <fieldset>
                <label>
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
                      
        </form>
    </main>
