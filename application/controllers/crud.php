<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Crud extends CI_Controller
  {
      public function __construct()
      {
          parent::__construct();
          $this->load->helper('url');
          $this->load->helper('form');
      }


      public function index()
      {
          $dados = array(
              'titulo' => 'CRUD com codeigniter',
              'tela' => '',
          );
          $this->load->view('crud',$dados);
      }

      public function create()
      {
          $dados = array(
              'titulo' => 'CRUD &&raquo; Create',
              'tela' => 'create'
          );
          $this->load->view('crud',$dados);
      }

      public function retrieve()
      {
          $dados = array(
              'titulo' => 'CRUD &&raquo; Retrieve',
              'tela' => 'retrieve'
          );
          $this->load->view('crud',$dados);
      }

      public function update()
      {
          $dados = array(
              'titulo' => 'CRUD &&raquo; Update',
              'tela' => 'update'
          );
          $this->load->view('crud',$dados);
      }

      public function delete()
      {
          $dados = array(
              'titulo' => 'CRUD &&raquo; Delete',
              'tela' => 'delete'
          );
          $this->load->view('crud',$dados);
      }


  }
