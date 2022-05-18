@extends('layouts.app')

@section('conteudo')

<h1>Editar Produto</h1>
<form action="{{ route('products.update', $product->id ) }}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Nome</label><br>
        <input type="text" name="name" value="{{ $product->name }}" required>

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Preço</label><br>
        <input type="text" class="form-control"  name="price" value="{{ $product->price }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <select class="form-select" name="category_id" aria-label="Default select example">
            <option selected disabled>Selecione uma categoria</option>

            @foreach ($categories as $category )
            <option value="{{ $category->id }}" @if ($category->id == $product->category_id)
                selected
            @endif>{{ $category->name }}</option>

            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>
@endsection

