@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')
  <h1>Exibindo os produtos</h1>
  <a href="{{ route('products.create')}}" class="btn btn-primary">Cadastrar</a>

  <form action="{{route('products.search')}}" method="post" class="form form-inline">
  @csrf
  <input type="text" name="filter" id="filter" placeholder="Filtrar:" class="form-control">
  <button type="submit" class="btn btn-info">Pesquisar</button>
</form>


  @isset($products)
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
          <td>
            {{$product->name}}
          </td>
          <td>
            {{$product->price}}
          </td>
          <td>
            <a href={{ route('products.edit', $product->id)}}>Editar</a>
            <a href="{{ route('products.show', $product->id)}}">Detalhes</a>
          </td>
        </tr>
      @endforeach
    </tbody>  
  </table>
  {{$products->links()}}
  @endisset

@endsection