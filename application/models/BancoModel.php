<?php 
class BancoModel extends CI_Model{
    
    public function busca($nome){
        $this->db->select("e.*, ROUND( SUM( a.vl_avaliacao ) / COUNT( a.vl_avaliacao ) ) AS avaliacao");
        $this->db->from("Estudio as e, Avaliacao as a");
        $this->db->where("`nm_estudio` LIKE  '%".$nome."%' OR `ds_estudio` LIKE  '%".$nome."%' OR `ds_img` LIKE  '".$nome."' AND `a`.`id_estudio` = `e`.`id_estudio`" );
        $this->db->group_by("`e`.`id_estudio`");
        $result = $this->db->get();
        return $result;
    }
    public function estudios($id){
        $this->db->select("e.*, ROUND( SUM( a.vl_avaliacao ) / COUNT( a.vl_avaliacao ) ) AS avaliacao");
        $this->db->from("Estudio as e, Avaliacao as a");
        $this->db->where("cd_estudio = " .  $id);
        $r = $this->db->get();
        return $r;
    }
    
}  

//TEMOS QUE PASSAR CADASTRO BJS
?>