@extends('admin.layouts.app')


@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    @include('admin.includes.alerts')

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="from-group">
      <input type="text" name="name" id="name" placeholder="Nome" class="form-control"/>
      </div>
      <div class="from-group">
      <input type="text" name="description" id="description" placeholder="Descrição" class="form-control"/>
      </div>
      <div class="from-group">
        <input type="text" name="price" id="price" class="form-control" placeholder="Preço">
      </div>
      <div class="from-group">
        <input type="file" name="photo" id="image" class="form-control">
      </div>
      <div class="form-group">
        <button class="btn btn-success" type="submit">Enviar</button>
      </div>
    </form>

@endsection