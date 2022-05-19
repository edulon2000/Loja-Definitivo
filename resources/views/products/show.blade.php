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
    <h1>Produtos</h1>
    <hr>
    <form action="{{ route('products.search') }}" method="post" form="form form-inline"
        value="{{ $name['name'] ?? '' }}">
        @csrf
        <input type="text" class="form-control col-2" name="filter" placeholder="Nome: ">
        <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        @foreach ($products as $product)
            <tbody>
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td><a class="btn btn-outline-success btn-sm"
                            href="{{ route('products.edit', $product->id) }}">Editar
                        </a>
                        <a class="btn btn-outline-danger  btn-sm"
                            href="{{ route('products.destroy', $product->id) }}">Deletar
                        </a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>

    @if (isset($name))
        {!! $products->appends($name)->links() !!}
    @else
        {!! $products->links() !!}
    @endif


</body>

</html>
