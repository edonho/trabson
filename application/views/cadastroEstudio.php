<style <?= "src='".base_url("static/css/cadastro.css")."'"; ?> ></style>
<meta charset="UTF-8">
    <main class="inicio back-black-tp mains">
    <label class="form">
        <form method="POST" action="../cad.php"> 
    <h1>Cadastro</h1>
            <fieldset>
                <label>
                    <p>
                   Nome do Estúdio:
                   <br>
                   <input type="text" name="nome" placeholder="ex. João" maxlength="10" autofocus required/> 
                   </p>
                  </label>
                <label>
                    <p>
                    Email do Estúdio:
                   <br>
                <input type="email" name="email" placeholder="ex. joao@gmail.com" required/> 
                    </p>
               </label>
               <label>
                   <p>
                    Login:
                    <br>    
                <input type="text" name="login" placeholder="ex. Joao123" required/>
                   </p>
               </label>
               <label>
                   <p>
                    Senha:
                    <br>
                <input type="password" name="senha" required/>
                   </p>
               </label>
                     <label>
                     <p>
                         Imagem do Estúdio:
                         <input type="file" name="pic" accept="image/*">
                     </p> 
                  </label>
           <input type="submit" name="search" value="Cadastrar" class="css3button">
          </fieldset>
        </form>
    </label>
 </main>
    
    <aside class="void">

    </aside>




