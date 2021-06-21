@extends('layouts.default', [
    'title' => 'Edit Product'
])

@section('content')
<div class="level">
    <div class="level-left">
        <h1 class="title is-4">Edit Product</h1>
    </div>
    <div class="level-right buttons">
        <a href="{{ route('products.show', $product->id) }}" class="button is-light">Detail</a>
        <a href="{{ route('products.index') }}" class="button is-light">Back</a>
    </div>
</div>

<hr>

<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    
    <div class="field">
        <label for="title" class="label">Title</label>
        <div class="control">
            <input type="text" name="title" id="title" value="{{ old('title', $product->title) }}" class="input">
        </div>
        @error('title')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <label for="description" class="label">Description</label>
        <div class="control">
            <textarea name="description" id="description" cols="30" rows="10" class="textarea">{{ old('description', $product->description) }}</textarea>
        </div>
        @error('description')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <label for="stock" class="label">Stock</label>
        <div class="control">
            <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" class="input">
        </div>
        @error('stock')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <button class="button is-primary">Save Change</button>
    </div>
</form>
@endsection