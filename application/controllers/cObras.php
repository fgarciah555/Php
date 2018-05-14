<?php
/**
*
*/
  class CLog extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->model('mObras');
    }

    public function index()
    {
      $this->load->helper('form');
      $this->load->view('Obras/vObras');
    }

    public function guardar()
    {
      $parametros['obra'] = $this->input->post('txtUser');
      $parametros['encargado'] = $this->input->post('pass');

      $lastId = $this->mUsuarios->guardar($parametros);
      $this->load->view('Obras/vObras');
    }
  }
?>
