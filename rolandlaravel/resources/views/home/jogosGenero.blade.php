@extends('layout.main')
@section('title')
    <title>Jogos do Genero</title>

@endsection

@section('content')

<div class="container ">

    <h2 class="text-center">Jogos {{ $genero->nome }}</h2>

    <div class="container tabela">
            @foreach ($todosJogos as $item)
<div class="card " style="width: 18rem;">
    <img class="card-img-top"
                        src="{{ $item->foto ? asset('uploads/' . $item->foto) : asset('../img/no-pic.jpeg') }}"
                        alt="">
    <div class="card-body">
      <h5 class="card-title">{{ $item->nome }}</h5>
      <p class="card-text">Ano de lançamento: {{ $item->ano }}</p>
    </div>
  </div>

            @endforeach

        </div>
</div>
@endsection
