<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/bootstrap/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Listar</title>

</head>

<body>
    /*
    Falta alterar as rotas do botão Apagar e Editar

    */
    <h1>Produtos</h1>
    @foreach ($product as $products)
        <div class="row justify-content-sm-center">
            <div class="col-5">
                <hr>
                <ul class="list-group">
                    <li class="list-group-item align-middle">{{ $products->name }} <a
                            class="btn btn-outline-danger float-right btn-sm"
                            href="{{ route('products.create') }}">Apagar
                        </a>
                        <a class="btn btn-outline-success float-right btn-sm"
                            href="{{ route('products.create') }}">Editar
                        </a>
                        </p>
                </ul>
            </div>
            <hr>
        </div>
    @endforeach

</body>

</html>
