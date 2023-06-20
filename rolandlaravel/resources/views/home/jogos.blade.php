@extends('layout.main')
@section('title')
    <title>Jogos</title>

@endsection

@section('content')
<div class="container my-5">
    <h1 class="text-center">Lista de jogos</h1>
    <div class="container">
        <div class="row">
          <div class="col-12">
              <table class="table table-image table-dark table-striped">
                <thead>
                  <tr>
                      <th scope="col">Imagem</th>
                      <th scope="col">Nome</th>
                    <th scope="col">Data de lançamento</th>






                  </tr>
                </thead>
                <tbody>
                    @foreach ($games as $item )


                  <tr>

                    <td class="w-25">
                        <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg" class="img-fluid img-thumbnail" alt="Sheep">
                    </td>
                    <td scope="row">{{$item->nome}}</td>
                    <td>{{$item->ano}}</td>



                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
      </div>
</div>
@endsection
