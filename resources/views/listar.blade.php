
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
          <th>opcoes</th>

      </tr>

      @foreach ($tarefas as $tarefa)
      <tr>
        <td>{{$tarefa->nome}}</td>
        <td>{{$tarefa->autores}}</td>
        <td>{{$tarefa->descricao}}</td>
        <td>
           <a href="{{route('viewAtualizacao', $tarefa->id)}}"><button type="button" id="adicionar">Update</button></a>
        </td>
        <td>
          <a href="{{route('remover', $tarefa->id)}}"> <button type="button" id="remover">Delete</button> </a>
        </td>
      </tr>
      @endforEach
    </table>

<br>
<br>
  <a href="{{route('viewInsercao')}}">  <button type="button" id="adicionar">Adicionar nova tarefa</button> </a>



  </body>
</html>
