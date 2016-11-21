<?php require_once("Padrao/header.php"); ?>
<meta charset="UTF-8">
<aside class="propaganda1 back-gray">
        <img src="../estatico/img/bannertattoo.png" alt="propaganda tatuagem">
    </aside>
    
    <main class="inicio back-black-tp">
    <label class="form">
        <form method="POST" action="../cad.php"> 
    <h1>Cadastro</h1>
            <fieldset>
                  <label>
                    <p>
                   Nome: <input type="text" name="nome" placeholder="ex. João" maxlength="10" autofocus required/> 
                   </p>
                  </label>
                <label>
                   <p>
                   Sobrenome: <input type="text" name="sobrenome" placeholder="ex. Silva" required/>
                   </p>
                </label>
                <label>
                    <p>
                Data de nascimento: <input type="date" name="nascimento" placeholder="ex: 01/01/1996" required/>
                    </p>
                </label>
                <label>
                    <p>
                   Email: <input type="email" name="email" placeholder="ex. joao@gmail.com" required/> 
                    </p>
               </label>
               <label>
                   <p>
                       Login:  <input type="text" name="login" placeholder="ex. Joao123" required/>
                   </p>
               </label>
               <label>
                   <p>
                       Senha: <input type="password" name="senha" required/>
                   </p>
               </label>
                <label>
                    <p>
                Telefone: <input type="tel" name="telefone" placeholder="(13) 0000-0000" required/>
                    </p>
                </label>
              <label>
                  <p>
                Sexo:                
              <input type="radio" name="sexo" value="M"> Masculino 
              <input type="radio" name="sexo" value="F"> Feminino 
                  </p>
              </label>
             <input type="submit" value="Cadastrar" class="botao"/>
          </fieldset>
       
        </form>
        
    </label>
 </main>
    
    <aside class="propaganda2 back-gray">
        propaganda
        propaganda
    </aside>




<?php require_once("Padrao/footer.php"); ?>