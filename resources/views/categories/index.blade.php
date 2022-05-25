<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/bootstrap/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Shopping</title>
</head>

<body>
    <div class="container">
        <div class="col-12 top">
            <p>Seja Bem vindo!</p>
        </div>
        <div class="col-2 box">
            <nav class="side-navbar">
                <!--Sidebar Navidation Menus-->
                <ul class="list-unstyled py-4">                    
                    <li class="sidebar-item">
                        <hr><i class='fab fa-codepen' style='font-size:12px'><a class="ml-2"
                                href="{{ route('products.index') }}">Produtos</a></i>
                        <hr>
                    </li>
                    <li class="sidebar-item">
                        <i class='fas fa-list' style='font-size:12px'><a class="ml-2"
                                href="{{ route('categories.create') }}">Cadastrar</a></i>
                        <hr>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="col-10 linha-vertical overflow-auto">
            @if (count($categories) > 0)
            @else
                <p>Ainda não há nenhum item cadastrado!</p>
                <a class="btn btn-primary" href="{{ route('categories.create') }}">Cadastrar Categoria</a>
                <!--{{ Redirect::to('products/create') }}-->
            @endif
            <div class="col-lg-7 col-md-5 col-sm-12">                    
                <div class="input-group input-group-sm my-4 ">                        
                    <h4>Categorias</h4>
                </div>
            </div>            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>               
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td><a class="btn btn-outline-success btn-sm"
                                    href="{{ route('categories.edit', $category->id) }}">Editar
                                </a>
                                <form>
                                <a class="btn btn-outline-danger  btn-sm"
                                    href= "{{ route('categories.destroy', $category->id) }}"
                                    href="deletar?id=1" onclick="return confirm('Tem certeza que deseja deletar esta categoria?')">Deletar                                    
                                    @method('Delete')
                                </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>               
            </table>
        </div>
        <div class="col-12 footer">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-12 text-center my-3">
                        <a href="#"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-instagram text-white"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <p class="text-white">I.SOFTWARE &copy; 2022</p>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Mensagem:</h4>
                </div>
                <div class="modal-body" id="message">
                    <p class="text-warning">Nenhum registro encontrado!</p>
                </div>
                <div class="modal-footer justify-content-center bottom-0 bg-dark text-white">
                    <p class="mb-0">Shopping &copy; 2022</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>

</html>
