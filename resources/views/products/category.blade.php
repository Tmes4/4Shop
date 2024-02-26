@extends('layouts.app')

@section('content')

<div class="products">
    @foreach($products as $product)

    <a class="product-row no-link" href="{{ route('products.show', $product) }}">
        <img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
        <div class="product-body">
            <div>
                <h5 class="product-title"><span>{{ $product->title }}</span><em>&euro;{{ $product->price }}</em></h5>
                @unless(empty($product->description))
                <p>{{ $product->description }}</p>
                @if ($product->discount > 0)
                <p class="discount">Nu <span> {{ $product->discount }}% </span>korting!</p>
                @endif

                @if ($product->discount > 0)<!-- Here, the original price should be displayed before the discount. -->
                <p class="original">Orginele prijs: <Span><em>&euro;{{$product->original_price}}</em></Span></p>
                @endif
                @endunless

            </div>
            <button class="btn btn-primary">Meer info &amp; bestellen</button>
        </div>
    </a>
    @endforeach
</div>

@endsection
