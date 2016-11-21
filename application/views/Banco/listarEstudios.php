<?php
        
        require_once("conectar.php");
        // Pega todos os dados cadastrados na tabela Estudio
        $estudios = mysqli_query($con, "SELECT * from Estudio"); 
        
        while($estudio = mysqli_fetch_assoc($estudios)){
            echo "<section id=\"estudio".$estudio["id_estudio"]."\">";
            echo "<img src=\"".$estudio["ds_img"]."\" alt=imagem-\"".$estudio["nm_estudio"]."\" class=\"img-thumb\">";
            echo "<h2>".$estudio["nm_estudio"]."</h2>";
                $avaliacao = mysqli_query($con, "SELECT ROUND(SUM(vl_avaliacao)/5) as avaliacao from Avaliacao where id_estudio =".$estudio["id_estudio"].";");
                while($stars = mysqli_fetch_assoc($avaliacao)){
                   $s = (int)$stars["avaliacao"]; 
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
            }
            echo"<p>".$estudio["ds_estudio"]."</p>";
            echo "</section><br>";
            echo "<div class=\"border\"></div>";
        };
        // Fechando a conexao do banco
        mysqli_close($con); 
        ?>
        
        <script <?= 'src="'.base_url("static/js/avaliar.js").'"';?>></script>
