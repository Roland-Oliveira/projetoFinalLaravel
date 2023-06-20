@extends('layout.main')
@section('title')
    <title>Jogos</title>

@endsection

@section('content')


<div class="container my-5">
    <h1 class="text-center">Lista de Generos</h1>
    <div class="container">
        <div class="row">
          <div class="col-12">
              <table class="table table-image table-dark table-striped">
                <thead>
                  <tr>

                      <th scope="col">Nome</th>
                      <th>Numero de Jogos</th>
                        <th></th>




                  </tr>
                </thead>
                <tbody>
                    @foreach ($genero as $item )


                  <tr>


                    <td >{{$item->nome}}</td>
                    <td>{{$item->num}}</td>

                    <td> <a class="btn btn-lg btn-danger" href="{{ route('jogosGenero', $item->id) }}">Ver Jogos</a> </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
      </div>
</div>



@endsection
