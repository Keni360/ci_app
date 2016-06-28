<?php echo basename(__FILE__);
            //ação,atributo css(classe,id)
echo form_open("crud/create");
//campo nome
echo form_label("Nome completo: ");
echo form_input( array('id'=> 'nome','name'=>'nome', 'placeholder'=>'Digite seu nome'),'','autofocus');
echo '<br>';
//campo email
echo form_label("Email: ");
echo form_input( array('name'=>'nome', 'placeholder'=>'Digite seu email'));
echo '<br>';
//campo login
echo form_label("Login: ");
echo form_input( array('name'=>'login', 'placeholder'=>'Digite seu nome de login'));
echo '<br>';
//campo nome
echo form_label("Senha: ");
echo form_input( array('name'=>'senha', 'placeholder'=>'Digite seu nome'));
echo '<br>';
//botão de submit
echo form_submit( array('name'=>'cadastrar'),'cadastrar');

echo form_close();
