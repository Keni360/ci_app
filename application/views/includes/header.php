<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=width-device, initial-scale=1">
    <title><?php echo $titulo ?></title>
    <style>
      *{margin:0; padding:0; font-family:Arial;}
      body{display:block;min-height:700px:height:100vh; min-height:100vh;}
      #cabecalho{
        width:100%;
        height:50px;

        background-color:#16a085;

      }

      /*menu*/
      .menu {overflow:hidden;display:block;height:100%;}
      .menu li{
        display:inline-block;
        background-color:rgba(0,0,0,.1);
        color:#fff;
        font-weight:bold;
        height:100%;
        float:left;
        padding:18px 10px 0 10px;
        transition:all .4s;

      }
      .menu a{color:#fff;text-decoration: none;width:100%;height:100%;}
      .menu li:hover{
        background-color: rgba(0,0,0,.4);
        cursor:pointer;

      }

      /* ============== rodapé ================= */
      #rodape{
        height:50px;
        width:100%;

        bottom:0px;
        background-color:#16a085;
        text-align: center;
        color:#fff;
        text-shadow:1px 1px 1px rgba(0,0,0,.4);
        padding-top:10px;
        font-size:.7em;
        font-weight: bold;

      }

      form{
        padding:10px;
        display:block;
      }

      form label{
        display:block; margin:10px 5px 0px 0px;
        color:rgba(0,0,0,.8);
        font-size:1em;

      }
      form input{
        display:block;
        height:30px;
        margin-left:5px;
        border-radius:5px;
      }
    </style>
  </head>
  <header id="cabecalho">
    <ul class="menu">
      <?php echo anchor('crud','<li>home</li>')?>
      <?php echo anchor('crud/create','<li>Create</li>') ?>
      <?php echo anchor('crud/retrieve','<li>Retrieve</li>') ?>
      <?php echo anchor('crud/update','<li>Update</li>') ?>
      <?php echo anchor('crud/delete','<li>Delete</li>') ?>
    </ul>
  </header>

  <body>
    <div id="conteudo-principal">
