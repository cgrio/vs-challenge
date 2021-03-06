@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h2>Products</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Atenção!</strong> Revise as informações preenchidas.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="/admin/products" method="POST">
            @csrf
       @include('admin.products.form')
        </form>
        </div>
    </div>

</div>
@endsection
