@extends('property.master')

@section('content')
    <div class="container my-3">

        <h1>Formulário de cadastro :: Imóveis</h1>

        <form action="<?= url('/imoveis/store'); ?>" method="post">

            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="rental_price">Valor de locação</label>
                <input type="text" id="rental_price" name="rental_price" class="form-control">
            </div>

            <div class="form-group">
                <label for="sale_price">Valor de compra</label>
                <input type="text" id="sale_price" name="sale_price" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar imóvel</button>
        </form>
    </div>

@endsection
