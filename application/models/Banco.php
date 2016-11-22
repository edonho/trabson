<?php 
class Banco extends CI_Model{
    
    public function busca($nome){
        $this->db->select('*');
        $this->db->from('Estudio');
        $this->db->where("nm_estudio LIKE  '%".$nome."%' OR ds_estudio LIKE  '%".$nome."%' OR ds_img LIKE  '".$nome."' LIMIT 0 , 30" );
        $query = $this->db->get();
        return $query;
    }
}
?>

