@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>{{ __("Product") }}</h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="row">
                <div id="product-section" class="col-md-3">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="2"><h3> <span class="octicon package"></span> {{ $product->name }}</h3></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Marca:</td>
                                <td>{{ $product->brand_name }}</td>
                            <tr>
                                <td>EAN:</td>
                                <td>{{ $product->ean }}</td>
                            </tr>
                                <td>Categoria:</td>
                                <td>{{ $product->category->name  }}</td>
                            </tr>
                            <tr>
                                <td>Stock total:</td>
                                <td><span class="badge badge-primary badge-pill">14</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <img class="card-img-top" src="{{ $product->img }}" alt="">
                </div>
                <div class="col-md-5">
                    <p>
                        {{ $product->description }}
                    </p>
                    <a href="/products/{{ $product->id }}" class="btn btn-sm btn-info">ver más</a>
                </div>
            </div>

        </div>
    </div>
@endsection