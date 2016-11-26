<meta charset="UTF-8">
<div id="wrapper">
    <main class="inicio back-black-tp mains">
        <label class="form">
            <label><input type="radio" name="escolheUsuario" id="formUsuario" class="css3button" checked>Usuário comum</label>
            
            <label><input type="radio" name="escolheUsuario" id="formEstudio" class="css3button">Estúdio</label>
            <form method="POST" action="/index.php/welcome/cadastrar" class="formularioUsuario"> 
                    <h1>Cadastro de Usuário</h1>
                    <div class="cadastro">
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
                    <input type="date" name="nascimento" placeholder="ex: 01/01/1996" class="nascimento" max="2000-12-31" />
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
               </div>
           </form>
           
           <!--FORMULARIO DO ESTUDIO-->
           
           <form method="POST" action="/index.php/welcome/cadestudio" class="formularioEstudio" style="display:none;"> 
                <h1>Cadastro de Estúdio</h1>                                                                                                                        <!-- XABLAU -->
                <p>
                    Nome do estúdio
                 <br>  <input type="text" name="nome" placeholder="ex. Baixada Tattoo" maxlength="50" autofocus required/> 
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
                    Senha:
                    <br>
                <input type="password" name="senha" required/>
                   </p>
               </label>
               <label>
                   <p>
                    Possui CNPJ?
                 <br>  <input type="tel" name="cnpj" placeholder="xx.xxx.xxx/xxxx-xx" maxlength="14" autofocus /> 
                   </p>
                  </label>
                     <label>
                     <p>
                         Imagem do Estúdio:
                         <input type="file" name="pic" accept="image/*">
                    
                     </p> 
                  </label>
               <input type="submit" name="search" value="Cadastrar" class="css3button">
        </form>
        </label>
        
 </main>
 </div>



