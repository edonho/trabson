<meta charset="UTF-8">
<div id="wrapper">
    <main class="inicio back-black-tp mains">
           <h1>Estúdio</h1>
            <section <?= 'id="estudio'.$id_estudio.'"'; ?> class="projeto">
                <img <?= 'src="'.base_url($ds_img).'" alt="imagem-'.$nm_estudio.'"';?> class="img2">
                  <p><?=$ds_estudio?></p>
                 <span class="rating" data-rating-id="1" data-rating-val="3">
                        <input class="star" type="radio" checked name="star" id="star-1" value="1"><label for="star-1">1</label>
                        <input class="star" type="radio" name="star" id="star-2" value="2"><label for="star-2">2</label>
                        <input class="star" type="radio" name="star" id="star-3" value="3"><label for="star-3">3</label>
                        <input class="star" type="radio" name="star" id="star-4" value="4"><label for="star-4">4</label>
                        <input class="star" type="radio" name="star" id="star-5" value="5"><label for="star-5">5</label>
                </span>
            </section>
      <div class="maps">
              <h2> <?=$nm_estudio?> </h2>
                    <img <?= 'src="'.base_url("static/img/icons/tel.png").'"';?> alt="propaganda tatuagem" class=" tel1">
                    <p class="tel2"><?= $ds_telefone;?></p><br>
                    <img <?= 'src="'.base_url("static/img/icons/home.png").'"';?> alt="propaganda tatuagem" class=" end">
                    <p><?= $ds_endereco;?></p>
                    <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.1134919618735!2d-46.333811049162286!3d-23.95642658441209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce030d2c1fb66f%3A0xf906db4f2eaf9527!2sAv.+Dona+Ana+Costa%2C+Santos+-+SP!5e0!3m2!1spt-BR!2sbr!4v1480038820587" 
                 width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
</div>

