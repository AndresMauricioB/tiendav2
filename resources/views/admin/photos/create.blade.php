<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Photo') }}
        </h2>
    </x-slot>

<div class="container p-3">
    <div class="row-end-3">
        <img lass="rounded mx-auto d-block" id="blah" src="#" alt="" />
    </div>
    <form action="/photos" method="post" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="form-group">
            <label for="name">Foto:</label>
            <input  id="imgInp" type="file" name="name" id="name" class="form-control">
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
    <script>



        function readURL(input) {
            if (input.files && input.files[0]) { //Revisamos que el input tenga contenido
                var reader = new FileReader(); //Leemos el contenido

                reader.onload = function(e) { //Al cargar el contenido lo pasamos como atributo de la imagen de arriba
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp").change(function() { //Cuando el input cambie (se cargue un nuevo archivo) se va a ejecutar de nuevo el cambio de imagen y se verá reflejado.
            readURL(this);
        });
    </script>
</div>

</x-app-layout>
