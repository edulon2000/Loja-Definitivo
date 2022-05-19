<!DOCTYPE html>
@section('conteudo')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/bootstrap/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <title>Shopping</title>    
    </head>
        <div class="col-10 linha-vertical overflow-auto">
                @if (count($categories) > 0)
                <form action="{{ route('products.update', $product->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="row justify-content-center">
                            <div><p style="font-size: 24px;" >Editar de Produto</p></div>                    
                        </div>
                        <div><hr></div>
                        <div class="row">
                            <div class="col-lg-7 col-md-5 col-sm-12">
                                <label>Nome:</label>
                                <div class="input-group input-group-sm mb-3 ">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-user" style="font-size:12px"></i></span>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Digite o nome do produto" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12">
                                <label>Preço:</label>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-file" style="font-size:12px"></i></span>
                                    <input type="text" id="price" name="price" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label>Quantidade:</label>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-file" style="font-size:12px"></i></span>
                                    <input type="text" id="quantity" name="quantity" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-12">
                                <label>Categorias:</label>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-file" style="font-size:12px"></i></span>
                                    <select class="form-control" id="category" name="category">
                                        <option selected>Selecionar</option>
                                        @foreach($categories as $category)
                                            <option value={{$category->id}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>                        
                        <div><hr></div>
                        <div class="row justify-content-end">
                            <button type="submit" class="btn btn-outline-success mr-5">Enviar</button>
                        </div>                                     
                    </form>
@endif