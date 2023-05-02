<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('info Product') }}
        </h2>
    </x-slot>
    <div class="container p-3 ">
        <a href="/categories" class="btn btn-success">Categories</a>
    </div>
    <div class="container p-3 md-4">
        <div class="card">
            <img src="{{ Storage::url($product->photo->path) }}" alt="{{ $product->photo->name }}" width="400">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio: ${{ $product->price }}</li>
                    <li class="list-group-item">Estado: {{ $product->status == 1 ? 'Activo' : 'Inactivo' }}</li>
                    <li class="list-group-item">Categoría: {{ $product->category->name }}</li>
                </ul>
            </div>
        </div>

    </div>

</x-app-layout>
