<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="container p-3">
        <form action="/products/{{$product->slug}}" method="post">
            @csrf
            @method('PUT')
            <br>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
            </div>
            <br>
            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
            </div>
            <br>

            <div class="form-group">
                <label for="price" class="form-label">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}">
            </div>
            <br>
            <div class="form-group">
                <label for="status" class="form-label">Estado:</label>
                <select class="form-select" id="status" name="status">
                    <option value="0" {{ old('status', $product->status) == 0 ? 'selected' : '' }}>Inactivo</option>
                    <option value="1" {{ old('status', $product->status) == 1 ? 'selected' : '' }}>Activo</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="photo_id" class="form-label">Foto:</label>
                <select class="form-select" id="photo_id" name="photo_id">
                        <option value="{{ $product->photo->id }}" {{ old('photo_id', $product->photo) == $product->photo->id ? 'selected' : '' }}>{{ $product->photo->name }}</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="category_id" class="form-label">Categoría:</label>
                <select class="form-select" id="category_id" name="category_id" disabled>
                    <option value="">Selecciona una categoría</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>




        <div class="col">
            @if( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

</x-app-layout>
