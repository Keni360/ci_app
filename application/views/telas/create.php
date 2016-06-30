<?php echo basename(__FILE__);
            //ação,atributo css(classe,id)
            if($this->session->flashdata('cadastrook')){
            echo "<p>".$this->session->flashdata('cadastrook')."</p>";
            }
echo form_open("crud/create");
//mensagens de validação
echo validation_errors('<p>','</p>');
//campo nome
echo form_label("Nome completo: ");
echo form_input( array('id'=> 'nome','name'=>'nome', 'placeholder'=>'Digite seu nome'),set_value('nome'),'autofocus');
echo '<br>';
//campo email
echo form_label("Email: ");
echo form_input( array('name'=>'email', 'placeholder'=>'Digite seu email'),set_value('email'));
echo '<br>';
//campo login
echo form_label("Login: ");
echo form_input( array('name'=>'login', 'placeholder'=>'Digite seu nome de login'),set_value('login'));
echo '<br>';
//campo senha
echo form_label("Senha: ");
echo form_input( array('name'=>'senha', 'placeholder'=>'Digite uma senha'),set_value('senha'));
echo '<br>';
//campo repita senha
echo form_label("Reptita a senha: ");
echo form_input( array('name'=>'senha2', 'placeholder'=>'Repita a senha'),set_value('senha2'));
echo '<br>';
//botão de submit
echo form_submit( array('name'=>'cadastrar'),'cadastrar');

echo form_close();
