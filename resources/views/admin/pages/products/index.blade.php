@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')
  <h1>Exibindo os produtos</h1>
  <a href="{{ route('products.create')}}">Cadastrar</a>
  @component('admin.components.card')

    @slot('title')
        <h3>Título card</h3>
    @endslot

      Um card de exemplo
  @endcomponent

  @include('admin.includes.alerts', ['content' => 'Alerta de preço de produtos'])
  
  <hr>

  @isset($products)
    @foreach ($products as $product)
          <p @if ($loop->last) class="last" @endif>{{$product}}</p>
    @endforeach
  @endisset

  <hr>

  @forelse ($products as $product)
      <p>{{$product}}</p>
  @empty
      <p>Não existem produtos cadastrados</p>
  @endforelse

  @if ($teste === 123)
    É igual
  @elseif($teste == 123)
    É igual a 123
  @else
    É diferente
  @endif


  @unless ($teste === '123')
    sdasdsas
  @else
    asdadasd
  @endunless

  
  @isset(($teste2))
      {{$teste2}}      
  @endisset


  @empty($teste3)
    <p>Vazio</p>
  @endempty


  @auth
    <p>Autenticado</p>
  @else
    <p>Não autenticado</p>    
  @endauth


  @guest
    <p>Não atendicado</p>   
  @endguest

  @switch($teste)
      @case(1)
          Igual 1
          @break
      @case(123)
          Igual 123
          @break
      @default
          Default
  @endswitch

@endsection

@push('styles')
  <style>
    .last{
      background: #ccc;
    }
  </style>  
@endpush

@push('scripts')
  <script>
      document.body.style.backgroundColor = '#efefef'
  </script>    
@endpush