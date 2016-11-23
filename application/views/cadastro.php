<style <?= "src='".base_url("static/css/cadastro.css")."'"; ?> ></style>
<meta charset="UTF-8">
    <main class="inicio back-black-tp mains">
  
    <label class="form">
        <form method="POST" action="../cad.php"> 
    <h1>Cadastro</h1>
            <fieldset>
                <label>
                    <p>
                   Nome
                   <br>
                   <input type="text" name="nome" placeholder="ex. João" maxlength="10" autofocus required/> 
                   </p>
                  </label>
                <label>
                   <p>
                   Sobrenome
                   <br>
                   <input type="text" name="sobrenome" placeholder="ex. Silva" required/>
                   </p>
                </label>
                <label>
                    <p>
                    Nascimento
                    <br>
                <input type="date" name="nascimento" placeholder="ex: 01/01/1996" required/>
                    </p>
                </label>
                <label>
                    <p>
                    Email
                    <br>
                <input type="email" name="email" placeholder="ex. joao@gmail.com"  required/> 
                    </p>
               </label>
               <label>
                   <p>
                    Login
                    <br>
                <input type="text" name="login" placeholder="ex. Joao123" required/>
                   </p>
               </label>
               <label>
                   <p>
                    Senha
                    <br>
                <input type="password" name="senha" min-legngth="6" max-legngth="15"  required/>
                   </p>
               </label>
              <label>
                  <p>
                Sexo
              <input type="radio" name="sexo" value="M"> Masculino 
              <input type="radio" name="sexo" value="F"> Feminino 
                  </p>
              </label>
           <input type="submit" name="search" value="Cadastrar" class="css3button">
          </fieldset>
        </form>
    </label>
    
 </main>
    
    <aside class="void">

    </aside>




