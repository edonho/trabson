<meta charset="UTF-8">
<div id="wrapper">
    <main class="inicio back-black-tp mains">
           <h1>Estúdio</h1>
            <section <?= 'id="estudio'.$id_estudio.'"'; ?> class="projeto">
                <img <?= 'src="'.base_url($ds_img).'" alt="imagem-'.$nm_estudio.'"';?> class="img1">
                  <p><?=$ds_estudio?> </p>
            </section>
      <div class="maps">
              <h2><?=$nm_estudio?> </h2>
               <img <?= 'src="'.base_url("static/img/icons/tel.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
                <img <?= 'src="'.base_url("static/img/icons/home.png").'"';?> alt="propaganda tatuagem" class="icons"></h1>
                <p><?= $ds_telefone?></p>
                <p><?= $ds_endereco?></p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.1134919618735!2d-46.333811049162286!3d-23.95642658441209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce030d2c1fb66f%3A0xf906db4f2eaf9527!2sAv.+Dona+Ana+Costa%2C+Santos+-+SP!5e0!3m2!1spt-BR!2sbr!4v1480038820587" 
                 width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
</div>

