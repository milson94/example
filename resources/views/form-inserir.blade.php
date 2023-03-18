<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/inserirTarefa" method="post">
      @csrf
      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo"  name="titulo" value="">

      <label for="descricao">Descrição: </label>
      <input type="textarea" name="descricao"  id=descricao  value="">

      <label for="autor">Autor:</label>
      <input type="text" id="autor" name="autor">

      <button type="submit" id="button" >Addicionar Tarefa</button>
    </form>
  </body>
</html>
