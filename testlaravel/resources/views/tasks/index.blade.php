@extends('layout.layout')
@section('content')
    <div class="titre">
    <h1>Liste des tâches:</h1></div>
    <div class="container">
     <form class="form" action="/tasks" method="post">
       {{ csrf_field()}}
      <label>Tâche:</label><input type="text" name="name" value=""><br/>
      <button type="submit">Envoyer</button>
    </form>
  </div>
@foreach($tabTasks as $tabtask)
  
  <h3>{{$tabtask->name}}</h3>
<form class="formu" action="/tasks/delete" method="post">
  {{ csrf_field()}}
  <input type="hidden" name="id" value="{{$tabtask->id}}">
  <input type="submit" name="" value="supprimer"/>
</form>
    @endforeach

@endsection
