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
        $this->db->where("e.id_estudio",$id);
        $r = $this->db->get();
        return $r;
    }
    public function logar($login,$senha){
        $this->db->select("u.*")->from("Usuario as u")->where("ds_login",$login)->where("ds_senha ",$senha);
        $resp = $this->db->get()->result();
        if(count($resp) == 1 ){
            $r = (array)$resp[0];
            $id = $r['id_usuario'];
            $this->session->set_userdata("login",$login);
            $this->session->set_userdata("id",$id);
            return true;
        }else{
            return false;
        }
    }
    public function cadastrar($data){
        if ($this->db->insert('Usuario',$data)){
            return "Cadastrado com sucesso!";
        }else{
            return "Falha no cadastro, tente novamente";
        }
    }
}  

//TEMOS QUE PASSAR CADASTRO BJS
?>