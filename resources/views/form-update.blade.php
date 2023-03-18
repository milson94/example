<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/atualizar" method="post">
      @csrf
      <input type="hidden" name="id" id="id" value="{{$tarefa->id}}">

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" value="{{$tarefa->nome}}">

      <label for="descricao">Descrição: </label>
      <input type="textarea" name="descricao"  id=descricao  value="{{$tarefa->descricao}}">

      <label for="autor">Autor:</label>
      <input type="text" id="autor" name="autor" value="{{$tarefa->autores}}">

      <button type="submit" id="button" >Addicionar Tarefa</button>
    </form>
  </body>
</html>
