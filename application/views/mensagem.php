<meta charset="UTF-8">
<div id="wrapper">
    <main class="inicio back-black-tp mains">
            <label class="form">
                    <form method="POST" action="/index.php/welcome/mensagen" class="mensagens"> 
                    <h1><img <?= 'src="'.base_url("static/img/icons/contato.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
                        <div class="formstyle">
                                 <label>
                                     <p>
                                            Nome:<br>
                                            <img <?= 'src="'.base_url("static/img/icons/name1.png").'"';?> class="name">
                                            <input type="text" name="nome"  required/> 
                                    </p>
                                </label>
                                 <label>
                                        <p>
                                                Email:<br>
                                            <img <?= 'src="'.base_url("static/img/icons/mail1.png").'"';?> class="mail">
                                            <input type="text" name="email" required/> 
                                        </p>
                                </label>
                                <label>
                                        <p>Telefone:<br>
                                          <img <?= 'src="'.base_url("static/img/icons/tel1.png").'"';?> class="tel" >
                                                    <input type="number" name="telefone" required/> 
                                        </p>
                                </label>
                                    
                                <label>
                                    <p>
                                           Deixe sua mensagem :<br>
                                        <input type="text" name="mensagem" maxlength="140" class="mensagem" required/> 
                                    </p>
                                </label>
                                     <input type="submit" name="search" value="Enviar" class="css3button">
                        </div>
                    </form>
            </label>
    </main>
</div>    
   