<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarefas;

class TarefasController extends Controller
{
    function inserirTarefa(Request $request) {
      $tarefa = new Tarefas;

      $tarefa->nome = $request->titulo;
      $tarefa->descricao = $request->descricao;
      $tarefa->autores = $request->autor;
      $tarefa->save();

      echo 'dado adicionado'.' '.$tarefa->nome.'-...- '.$tarefa->descricao.'-...-'.$tarefa->autores.'.';
      die();
    }

    function showData(){
      $tarefas = DB::table('tarefas')->get();
      return view('listar', array('tarefas'=>$tarefas));
    }

    function update($nome){
      $tarefa =  Tarefas::find(5);
      $tarefa->nome = $nome;
      $tarefa->descricao = 'um conto intrigante ente dois irmaos e uma familia esquisita';
      $tarefa->update();

      return $tarefa;
    }

    function busca (){
      $tarefa =  DB::table('tarefas')
      ->where('id', 3)
      ->get();

      return $tarefa;
    }

    function remover($id){
      $tarefa  = Tarefas::find($id);
      $tarefa->delete();
      return $tarefa;

    }
}
