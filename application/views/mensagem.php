<meta charset="UTF-8">
<div id="wrapper">
    <main class="inicio back-black-tp mains">
            <label class="form">
                    <form method="POST" action="/index.php/welcome/mensagem" class="formularioUsuario"> 
                    <h1><img <?= 'src="'.base_url("static/img/icons/msg.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
                        <div class="formstyle">
                                 <label>
                                     <p>
                                            Nome:<br>
                                            <img <?= 'src="'.base_url("static/img/icons/msg.png").'"';?> class="mail">
                                            <input type="text" name="nome"  required/> 
                                    </p>
                                </label>
                                 <label>
                                        <p>
                                                Email:<br>
                                            <img <?= 'src="'.base_url("static/img/icons/msg.png").'"';?> class="mail">
                                            <input type="text" name="email" required/> 
                                        </p>
                                </label>
                                <label>
                                        <p>Telefone:<br>
                                          <img <?= 'src="'.base_url("static/img/icons/msg.png").'"';?> class="mail" >
                                                    <input type="number" name="telefone" required/> 
                                        </p>
                                </label>
                                    
                                <label>
                                    <p>
                                           Deixe sua mensagem :<br>
                                           <img <?= 'src="'.base_url("static/img/icons/msg.png").'"';?>>
                                        <input type="text" name="mensagem" maxlength="140" class="mensagem" required/> 
                                    </p>
                                </label>
                                     <input type="submit" name="search" value="Enviar" class="css3button">
                        </div>
                    </form>
            </label>
    </main>
</div>    
   