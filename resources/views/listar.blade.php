
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <th>Titulo</th>
        <th>autores</th>
        <th>descricoes</th>
      </tr>

      @foreach ($tarefas as $tarefa)
      <tr>
        <td>{{$tarefa->nome}}</td>
        <td>{{$tarefa->autores}}</td>
        <td>{{$tarefa->descricao}}</td>
      </tr>
      @endforEach

    </table>
  </body>
</html>
