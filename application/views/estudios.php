
<meta charset="UTF-8">
  <section <?= 'id="estudio'.$id_estudio.'"'; ?> class="projeto">
            <div <?= 'style=" background-image: url('.$estudio["ds_img"].');" alt="imagem-'.$estudio["nm_estudio"].'"'; ?> class="img1"></div>
            <h2><?= $estudio["nm_estudio"];?></h2>
           <p><?= $estudio["ds_estudio"]; ?></p>
    </section>


