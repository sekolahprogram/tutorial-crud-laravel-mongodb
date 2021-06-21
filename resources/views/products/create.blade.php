@extends('layouts.default', [
    'title' => 'Create Product'
])

@section('content')
<div class="level">
    <div class="level-left">
        <h1 class="title is-4">Create Product</h1>
    </div>
    <div class="level-right">
        <a href="{{ route('products.index') }}" class="button is-light">Back</a>
    </div>
</div>

<hr>

<form action="{{ route('products.store') }}" method="post">
    @csrf
    
    <div class="field">
        <label for="title" class="label">Title</label>
        <div class="control">
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="input">
        </div>
        @error('title')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <label for="description" class="label">Description</label>
        <div class="control">
            <textarea name="description" id="description" cols="30" rows="10" class="textarea">{{ old('description') }}</textarea>
        </div>
        @error('description')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <label for="stock" class="label">Stock</label>
        <div class="control">
            <input type="number" name="stock" id="stock" value="{{ old('stock') }}" class="input">
        </div>
        @error('stock')
            <p class="help is-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="field">
        <button class="button is-primary">Save</button>
    </div>
</form>
@endsection