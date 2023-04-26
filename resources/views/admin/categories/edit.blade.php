<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Categories') }}
        </h2>
    </x-slot>

<div class="container">
   
    <form action="/categories/{{$category->slug}}" method="post">
        @csrf
        @method('PUT')
        <br>
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input value="{{old('name', $category->name)}}" type="text" name="name" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea  name="description" id="description" class="form-control">{{old('description', $category->description)}}
            </textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="status">Estado:</label>
            <select name="status" id="status" class="form-control">
                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <br>
        <input type="submit" value="Edit" class="btn btn-success">
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