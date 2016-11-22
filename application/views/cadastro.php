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
                    Data de nascimento
                    <br>
                <input type="date" name="nascimento" placeholder="ex: 01/01/1996" required/>
                    </p>
                </label>
                <label>
                    <p>
                    Email
                   <br>
                <input type="email" name="email" placeholder="ex. joao@gmail.com" required/> 
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
                <input type="password" name="senha" required/>
                   </p>
               </label>
                <label>
                    <p>
                    Telefone
                    <br>
                <input type="tel" name="telefone" placeholder="(13) 0000-0000" required/>
                    </p>
                </label>
              <label>
                  <p>
                Sexo
                 <br>
              <input type="radio" name="sexo" value="M"> Masculino 
              <input type="radio" name="sexo" value="F"> Feminino 
                  </p>
              </label>
             <input type="submit" value="Cadastrar" class="botao"/>
          </fieldset>
        </form>
    </label>
 </main>
    
    <aside class="void">

    </aside>




