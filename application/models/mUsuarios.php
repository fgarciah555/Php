<?php

class MUsuarios extends CI_Model
{
    function __construct()
      {
        parent::__construct();
      }

    

    public function validaUsuario($user)
      {
        $this->db->select('user');
        $this->db->from('users');
        $this->db->where('user',$user);
        $result = $this->db->get();
        if ($result->num_rows() == 1)
          {
            return $result->result()[0];
          }
        else
          {
            return false;
          }
      }

    public function insertaUsuarios($parametros)
      {
        $campos = array
        (
            'user' => $parametros['user'],
            'pass' => $parametros['pass'],
            'perfil' => $parametros['user']
        );
        $this->db->insert('users',$campos);
      }

    public function validaPassword()
      {

      }

    public function modificaUsuarios($parametros)
      {

      }
  }
?>
