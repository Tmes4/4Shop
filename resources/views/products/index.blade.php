@extends('layouts.app')

@section('content')

<div class="products">
    <div class="dropdown">
        <button class="btn btn-secondary" type="button" id="customDropdownButton">
            Selecteer een categorie
        </button>
        <ul class="custom-dropdown-menu" aria-labelledby="customDropdownButton">
            @foreach($categories as $category)
            <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>

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
