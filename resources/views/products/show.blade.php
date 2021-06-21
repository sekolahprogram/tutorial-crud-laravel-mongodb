@extends('layouts.default', [
    'title' => 'Detail Product'
])

@section('content')
<div class="level">
    <div class="level-left">
        <h1 class="title is-4">Detail Product</h1>
    </div>
    <div class="level-right buttons">
        <a href="{{ route('products.edit', $product->id) }}" class="button is-light">Edit</a>
        <a href="{{ route('products.index') }}" class="button is-light">Back</a>
    </div>
</div>

<hr>

<div class="field">
    <label class="label">Title</label>
    <pre>{{ $product->title }}</pre>
</div>

<div class="field">
    <label class="label">Description</label>
    <pre>{{ $product->description }}</pre>
</div>

<div class="field">
    <label class="label">Stock</label>
    <pre>{{ $product->stock }}</pre>
</div>

<div class="field">
    <label class="label">CreatedAt</label>
    <pre>{{ $product->created_at->format('d F Y') }}</pre>
</div>

<div class="field">
    <label class="label">UpdatedAt</label>
    <pre>{{ $product->updated_at->format('d F Y') }}</pre>
</div>
@endsection