<?php
/**
 * Arquivo responsável pela tela de formulario para indicação dos bancos de
 * dados a serem comparados
 *
 * @package     Base
 * @subpackage  Formulario
 * @name        BaseFormulario
 * @version     1.0
 * @copyright   Webart
 * @author      William Costa
 *
 */

 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Resultado > Comparador de banco de dados</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="format-detection" http-equiv="Content-Type" content="text/html; charset=utf-8; telephone=no" />

<script src="js/jquery-1-2-12.js"></script>
<script src="js/scripts.js"></script>

<style>
  html,body{
    font-family:arial;
  }
  fieldset{
      width:300px;
  }
  fieldset.bd2 .copiarChaves{
    float: right;
    padding: 10px;
    font-size: 11px;
    font-weight: bold;
    color: blue;
    cursor: pointer;
  }
  fieldset.bd2 .copiarChaves:hover{
    text-decoration: underline;
  }
</style>

</head>
<body>
<h1>Comparador de banco de dados</h1>
<form method="post">

 <fieldset>
   <legend>Banco A</legend>
   <input type="text" name="bd[servidor]" placeholder="Servidor"><br>
   <input type="text" name="bd[usuario]" placeholder="Usuário"><br>
   <input type="password" name="bd[senha]" placeholder="Senha"><br>
   <input type="text" name="bd[banco]" placeholder="Banco"><br>
 </fieldset>

 <fieldset class="bd2">
   <legend>Banco B</legend>
   <span class="copiarChaves" title="Copia os dados de acesso do Banco A para o Banco B">Copiar chaves do Banco A</span>
   <input type="text" name="bd2[servidor]" placeholder="Servidor"><br>
   <input type="text" name="bd2[usuario]" placeholder="Usuário"><br>
   <input type="password" name="bd2[senha]" placeholder="Senha"><br>
   <input type="text" name="bd2[banco]" placeholder="Banco"><br>
 </fieldset>
<br>
 <button> Comparar >>> </button>
</form>
</body>
