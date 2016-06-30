<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Crud extends CI_Controller
  {
      public function __construct()
      {
          parent::__construct();
          $this->load->helper('url'); //Iniciar o módulo url
          $this->load->helper('form');
          $this->load->helper('array');
          $this->load->library('form_validation');
          $this->load->library('session');
          $this->load->model('crud_model');

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
          $this->form_validation->set_rules('nome','NOME','trim|required|alpha|max_lenght[50]|ucwords');
          $this->form_validation->set_rules('email','EMAIL','trim|required|max_lenght[50]|strtolower|valid_email|is_unique[curso_ci.email]');
          $this->form_validation->set_message('is_unique','Este %s já está cadastrado no sistema!');
          $this->form_validation->set_rules('login','LOGIN','trim|required|max_lenght[25]|strtolower|is_unique[curso_ci.login]');
          $this->form_validation->set_rules('senha','SENHA','trim|required|strtolower');
          $this->form_validation->set_rules('senha2','REPITA A SENHA','trim|required|strtolower|matches[senha]');

          if($this->form_validation->run() == TRUE):
              $dados = elements(array('nome','email','login','senha'),$this->input->post());
              $dados['senha'] = md5($dados['senha']);
              $this->crud_model->do_insert($dados);

              echo "Validação ok, inserindo no BD";
            endif;

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
