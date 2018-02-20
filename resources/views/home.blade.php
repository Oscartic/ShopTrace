@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Todos los productos</h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <h2>{{ __("Products") }} </h2>
            <div class="card-columns">
                @forelse($products as $product)

                    <div class="card border-secondary">
                        <div class="card-header">EAN: {{ $product->ean }}</div>
                        <img class="card-img-top" src="{{ $product->img }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">
                                {{ $product->short_desc }}
                            </p>
                            <a href="/products/{{ $product->id }}" class="btn btn-sm btn-info">ver más</a>
                        </div>
                    </div>

                @empty

                    <div class="alert alert-danger">
                        {{ __("No hay productos en este momento") }}
                     </div>

                @endforelse
            </div>

        </div>
    </div>
</div>
@endsection
