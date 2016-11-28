<meta charset="UTF-8">
<div id="wrapper">
    <main class="inicio back-black-tp mains">
          <h1><img <?= 'src="'.base_url("static/img/icons/perfil.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
          <?php if($this->session->userdata('TipoUsuario')== 'usuario'){          ?>
          <div class="dadosperfil">
                <p>
                     <?php echo $ds_login ?>
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
                  <a href="/index.php/welcome/pulverizar" name="Logout" class="css3button">Logout </a>
          </div>
          <?php }else{      ?>
          <div class="dadosestudio">
                <p>
                     <?php echo $ds_login ?>
                </p>
                <p>
                        Nome: <?php echo $nm_estudio ?>
                </p>
                <p>
                        CNPJ: <?php echo $cd_cnpj ?>
                </p>
                <p>
                        Descrição: <?php echo $ds_estudio ?>
                </p>
                <p>
                        Email: <?php echo $ds_email ?>        
                </p>
                <p>
                       Telefone: <?php echo $ds_telefone ?>                 
                </p>
                  <a href="/index.php/welcome/pulverizar" name="Logout" class="css3button">Logout </a>
          </div> 
          <?php }   ?>
     </main>
</div>

