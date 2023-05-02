<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Photos List') }}
        </h2>
    </x-slot>

    <div class="container p-3">
        <div class="container p-3">
            <a href="/photos/create" class="btn btn-success">Add new Photo</a>
        </div>
        <div class="container p-3">
            <table class="table">
                <thead>
                <tr>
                    <th>Img</th>
                    <th>Name</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td><img src="{{ Storage::url($image->path) }}" alt="{{ $image->name }}" width="200"></td>
                        <td>{{$image->name}}</td>
                        <td>
                            <form action="/photos/{{$image->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar el registro?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

</x-app-layout>
