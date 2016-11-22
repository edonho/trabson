<?php 
            foreach ($data->result() as $estudio){
                $estudio = (array)$estudio;
                ?>
            <section <?= 'id="estudio'.$estudio["id_estudio"].'"'; ?> class="projeto">
            <div <?= 'style=" background-image: url('.$estudio["ds_img"].');" alt="imagem-'.$estudio["nm_estudio"].'"'; ?> class="img1"></div>
            <h2><?= $estudio["nm_estudio"];?></h2>
            <?php
                   $s = (int)$estudio["avaliacao"]; 
                   switch ($s){
                        case 0:
                            echo "<span class=\"rating\" data-rating-id=\"".$estudio["id_estudio"]."\" data-rating-val=\"3".$estudio["id_estudio"]."\">";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-1".$estudio["id_estudio"]."\" value=\"1-".$estudio["id_estudio"]."\"><label for=\"star-1\">1-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-2".$estudio["id_estudio"]."\" value=\"2-".$estudio["id_estudio"]."\"><label for=\"star-2\">2-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-3".$estudio["id_estudio"]."\" value=\"3-".$estudio["id_estudio"]."\"><label for=\"star-3\">3-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-4".$estudio["id_estudio"]."\" value=\"4-".$estudio["id_estudio"]."\"><label for=\"star-4\">4-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-5".$estudio["id_estudio"]."\" value=\"5-".$estudio["id_estudio"]."\"><label for=\"star-5\">5-".$estudio["id_estudio"]."</label>";
                            echo "</span>";
                            break;
                        case 1:
                            echo "<span class=\"rating\" data-rating-id=\"".$estudio["id_estudio"]."\" data-rating-val=\"3".$estudio["id_estudio"]."\">";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-1".$estudio["id_estudio"]."\" value=\"1-".$estudio["id_estudio"]."\" checked><label for=\"star-1\">1-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-2".$estudio["id_estudio"]."\" value=\"2-".$estudio["id_estudio"]."\"><label for=\"star-2\">2-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-3".$estudio["id_estudio"]."\" value=\"3-".$estudio["id_estudio"]."\"><label for=\"star-3\">3-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-4".$estudio["id_estudio"]."\" value=\"4-".$estudio["id_estudio"]."\"><label for=\"star-4\">4-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-5".$estudio["id_estudio"]."\" value=\"5-".$estudio["id_estudio"]."\"><label for=\"star-5\">5-".$estudio["id_estudio"]."</label>";
                            echo "</span>";
                            break;
                        case 2:
                            echo "<span class=\"rating\" data-rating-id=\"".$estudio["id_estudio"]."\" data-rating-val=\"3".$estudio["id_estudio"]."\">";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-1".$estudio["id_estudio"]."\" value=\"1-".$estudio["id_estudio"]."\"><label for=\"star-1\">1-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-2".$estudio["id_estudio"]."\" value=\"2-".$estudio["id_estudio"]."\" checked><label for=\"star-2\">2-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-3".$estudio["id_estudio"]."\" value=\"3-".$estudio["id_estudio"]."\"><label for=\"star-3\">3-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-4".$estudio["id_estudio"]."\" value=\"4-".$estudio["id_estudio"]."\"><label for=\"star-4\">4-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-5".$estudio["id_estudio"]."\" value=\"5-".$estudio["id_estudio"]."\"><label for=\"star-5\">5-".$estudio["id_estudio"]."</label>";
                            echo "</span>";                            
                            break;
                        case 3:
                            echo "<span class=\"rating\" data-rating-id=\"".$estudio["id_estudio"]."\" data-rating-val=\"3".$estudio["id_estudio"]."\">";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-1".$estudio["id_estudio"]."\" value=\"1-".$estudio["id_estudio"]."\"><label for=\"star-1\">1-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-2".$estudio["id_estudio"]."\" value=\"2-".$estudio["id_estudio"]."\"><label for=\"star-2\">2-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-3".$estudio["id_estudio"]."\" value=\"3-".$estudio["id_estudio"]."\" checked><label for=\"star-3\">3-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-4".$estudio["id_estudio"]."\" value=\"4-".$estudio["id_estudio"]."\"><label for=\"star-4\">4-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-5".$estudio["id_estudio"]."\" value=\"5-".$estudio["id_estudio"]."\"><label for=\"star-5\">5-".$estudio["id_estudio"]."</label>";
                            echo "</span>";
                            break;
                        case 4:
                            echo "<span class=\"rating\" data-rating-id=\"".$estudio["id_estudio"]."\" data-rating-val=\"3".$estudio["id_estudio"]."\">";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-1".$estudio["id_estudio"]."\" value=\"1-".$estudio["id_estudio"]."\"><label for=\"star-1\">1-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-2".$estudio["id_estudio"]."\" value=\"2-".$estudio["id_estudio"]."\"><label for=\"star-2\">2-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-3".$estudio["id_estudio"]."\" value=\"3-".$estudio["id_estudio"]."\"><label for=\"star-3\">3-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-4".$estudio["id_estudio"]."\" value=\"4-".$estudio["id_estudio"]."\" checked><label for=\"star-4\">4-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-5".$estudio["id_estudio"]."\" value=\"5-".$estudio["id_estudio"]."\"><label for=\"star-5\">5-".$estudio["id_estudio"]."</label>";
                            echo "</span>";
                            break;
                        case 5:
                            echo "<span class=\"rating\" data-rating-id=\"".$estudio["id_estudio"]."\" data-rating-val=\"3".$estudio["id_estudio"]."\">";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-1".$estudio["id_estudio"]."\" value=\"1-".$estudio["id_estudio"]."\"><label for=\"star-1\">1-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-2".$estudio["id_estudio"]."\" value=\"2-".$estudio["id_estudio"]."\"><label for=\"star-2\">2-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-3".$estudio["id_estudio"]."\" value=\"3-".$estudio["id_estudio"]."\"><label for=\"star-3\">3-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-4".$estudio["id_estudio"]."\" value=\"4-".$estudio["id_estudio"]."\"><label for=\"star-4\">4-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-5".$estudio["id_estudio"]."\" value=\"5-".$estudio["id_estudio"]."\" checked><label for=\"star-5\">5-".$estudio["id_estudio"]."</label>";
                            echo "</span>";
                            break;
                        default:
                            echo "<span class=\"rating\" data-rating-id=\"".$estudio["id_estudio"]."\" data-rating-val=\"3".$estudio["id_estudio"]."\">";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-1".$estudio["id_estudio"]."\" value=\"1-".$estudio["id_estudio"]."\"><label for=\"star-1\">1-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-2".$estudio["id_estudio"]."\" value=\"2-".$estudio["id_estudio"]."\"><label for=\"star-2\">2-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-3".$estudio["id_estudio"]."\" value=\"3-".$estudio["id_estudio"]."\"><label for=\"star-3\">3-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-4".$estudio["id_estudio"]."\" value=\"4-".$estudio["id_estudio"]."\"><label for=\"star-4\">4-".$estudio["id_estudio"]."</label>";
                            echo "    <input class=\"star\" type=\"radio\" name=\"star".$estudio["id_estudio"]."\" id=\"star-5".$estudio["id_estudio"]."\" value=\"5-".$estudio["id_estudio"]."\" checked><label for=\"star-5\">5-".$estudio["id_estudio"]."</label>";
                            echo "</span>";
                            break;
                   }
            echo"<p>".$estudio["ds_estudio"]."</p>";
            echo "</section>";
        };
        ?>
        
        <script <?= "src='".base_url("static/js/avaliar.js")."'"; ?> ></script>