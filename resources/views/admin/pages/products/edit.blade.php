@extends('admin.layouts.app')


@section('title', 'Editar Produto {$product->name}')

@section('content')
<h1>Editar Produto {{ $product->name }}</h1>

<form action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="from-group">
  <input type="text" name="name" id="name" placeholder="Nome" class="form-control" value="{{$product->name}}"/>
  </div>
  <div class="from-group">
  <input type="text" name="description" id="description" placeholder="Descrição" class="form-control" value="{{$product->description}}"/>
  </div>
  <div class="from-group">
    <input type="text" name="price" id="price" class="form-control" placeholder="Preço" value="{{$product->price}}">
  </div>
  <div class="from-group">
    <input type="file" name="photo" id="image" class="form-control" value="{{$product->image}}">
  </div>
  <div class="form-group">
    <button class="btn btn-success" type="submit">Enviar</button>
  </div>
</form>
@endsection