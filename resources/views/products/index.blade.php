@extends('layouts.default', [
    'title' => 'Products'
])

@section('content')
<div class="level">
    <div class="level-left">
        <h1 class="title is-4">All Products</h1>
    </div>
    <div class="level-right">
        <a href="{{ route('products.create') }}" class="button is-light">Create</a>
    </div>
</div>

<hr>

<div class="table-container">
    <table class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Stock</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>{{ $item->created_at->format('d F Y') }}</td>
                    <td>{{ $item->updated_at->format('d F Y') }}</td>
                    <th class="buttons">
                        <a
                            href="{{ route('products.show', $item->id) }}"
                            class="button is-info is-small">
                            Detail
                        </a>
                        <a
                            href="{{ route('products.edit', $item->id) }}"
                            class="button is-primary is-small">
                            Edit
                        </a>
                        <form
                            action="{{ route('products.destroy', $item->id) }}"
                            method="POST"
                            onclick="return confirm('Do you want to delete the data?');"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $products->links() }}

@endsection