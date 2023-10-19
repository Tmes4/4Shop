@extends('layouts.admin')

@section('content')

<div class="d-flex align-items-center justify-content-around my-5">

    <form action="{{ route('admin.categories.update', $category) }}" method="POST" style="min-width: 320px;" enctype="multipart/form-data">

        <h4>Categorie aanpassen</h4>

        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $category->name) }}">
        </div>


        <button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
    </form>

    <div class="mt-4" >
        <h2>Producten</h2>
        <!-- {{ $category->$products}} -->
        @foreach ($products as $product)
        <ul class="mb-1">
            <li>{{ $product->title}}</</li>
        </ul>
        @endforeach
    </div>
</div>

@endsection
