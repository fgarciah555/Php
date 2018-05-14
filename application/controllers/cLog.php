<?php
/**
*
*/
  class CLog extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->model('mUsuarios');
    }

    public function index()
    {
      $this->load->helper('form');
      $this->load->view('Login/vLog');
    }

    public function guardar()
    {
      $parametros['user'] = $this->input->post('txtUser');
      $parametros['pass'] = md5($this->input->post('pass'));
      $parametros['perfil'] = $this->input->post('perfil');

      $lastId = $this->mUsuarios->guardar($parametros);
      $this->load->view('Login/vLog');
    }
  }
?>
