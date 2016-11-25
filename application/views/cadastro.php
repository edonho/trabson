<meta charset="UTF-8">
<link rel="stylesheet" <?php echo ' href="'.base_url("static/css/cadestudio.css").'"'; ?> >
<div id="wrapper">
    <main class="inicio back-black-tp mains">
        <label id="usuarioForm" class="form">
            <button id="btnTeste" onclick="formEstudio();" class="css3button">Possui um Estúdio?Cadastre ele aqui!</button>
            <form method="POST" action="/index.php/welcome/cadastrar"> 
                <h1>Cadastro de Usuário</h1>
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
           </form>
        </label>
        
        <label id="estudioForm" class="form">
           <button id="btnTeste" onclick="formUsuario();" class="css3button">Usuário comum?Cadastre-se </button>
            <form method="POST" action="/index.php/welcome/cadestudio"> 
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
                          <input type="submit">
                     </p> 
                  </label>
               <input type="submit" name="search" value="Cadastrar" class="css3button">
        </form>
        </label>
 </main>
 </div>



