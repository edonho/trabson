<meta charset="UTF-8">
<div id="wrapper">
    <main class="inicio back-black-tp mains">
            <label class="form">
                    <form method="POST" action="/index.php/welcome/mensagem" class="formularioUsuario"> 
                    <h1><img <?= 'src="'.base_url("static/img/icons/msg.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
                        
                                 <label>
                                     <p>
                                            Nome:<br>
                                            <input type="text" name="nome" placeholder="ex. José Silva" required/> 
                                    </p>
                                </label>
                                 <label>
                                        <p>
                                                Email:<br>                                                    <input type="text" name="email" placeholder="exemplo@exemplo.com.br" required/> 
                                        </p>
                                </label>
                                <label>
                                        <p>Telefone:<br>
                                                    <input type="number" name="telefone" class="telefone"required/> 
                                        </p>
                                </label>
                                    
                                <label>
                                    <p>
                                           Entre em contato conosco :<br>
                                        <input type="text" name="mensagem" maxlength="140" class="mensagem" placeholder="Mensagem" required/> 
                                    </p>
                                </label>
                                     <input type="submit" name="search" value="Enviar" class="css3button">
                    </form>
            </label>
    </main>
</div>    
   