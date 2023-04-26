<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Categories') }}
        </h2>
    </x-slot>

<div class="container">
   
    <form action="/categories" method="post">
        @csrf 
        <br>
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="status">Estado:</label>
            <select name="status" id="status" class="form-control">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
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