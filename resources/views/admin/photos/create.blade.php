<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

<div class="container">
   
    <form action="/photos" method="post">
        @csrf 
        <br>
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="file" name="name" id="foto" class="form-control">
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