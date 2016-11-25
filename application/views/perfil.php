<meta charset="UTF-8">
<div id="wrapper">
    <main class="inicio back-black-tp mains">
          <h1><img <?= 'src="'.base_url("static/img/icons/perfil.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
          <div class="dadosperfil">
                  <p>
                        Login: <?php echo $ds_login ?>
                </p>
                <p>
                        Nome: <?php echo $nm_usuario ?>
                </p>
                <p>
                        Data de nascimento: 
                <?php   $dt = explode("-",$dt_nascimento); 
                        echo $dt[2]."/".$dt[1]."/".$dt[0];?>
                </p>
                <p>
                        Email: <?php echo $ds_email ?>        
                </p>
                <p>
                       Telefone: <?php echo $cd_telefone ?>                 
                </p>
                <p>
                        Sexo: <?php echo $sg_sexo ?>
                </p>
                
          </div>
     </main>
</div>

