@extends('admin.layouts.app')


@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    @if ($errors->any())
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
      </ul>
    @endif

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="text" name="name" id="name" placeholder="Nome"/>
      <input type="text" name="description" id="description" placeholder="Descrição"/>
      <input type="file" name="photo" id="photo">
      <button type="submit">Enviar</button>
    </form>
@endsection