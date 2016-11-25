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
     public function mensagem($data){
         if ($this->db->insert('Mensagem',$data)){
             return "mensagem enviada com sucesso, obrigado!";
         }else{
             return "Falha na mensagem, tente novamente";
         }
     }
     public function perfil($id){
         $this->db->select("ds_login,nm_usuario,dt_nascimento,ds_email,cd_telefone,sg_sexo");
         $this->db->from("Usuario");
         $this->db->where("id_usuario",$id);
         $r = $this->db->get()->result_array();
         return $r[0];
     }
}   
?>