@extends('login::layouts.dashboard')

@section('content')
    <h1>Clientes Cadastrados</h1>


       <table class="table table-bordered">
           <thead>
           <tr>
               <th>#</th>
               <th>Nome</th>
               <th>Email</th>
               <th>Ações</th>
           </tr>
           </thead>
           <tbody>
           @foreach($users as $user)
           <tr>
               <td>{{$user->id}}</td>
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>
                   <a href="#editar" class="btn btn-dark">Editar</a>
                   <a href="#excluir" class="btn btn-danger">Excluir</a>
               </td>
           </tr>
           @endforeach

           </tbody>
       </table>
@stop
