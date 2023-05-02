<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories List') }}
        </h2>
    </x-slot>

<div class="container p-3">
    <div class="container">
        <a href="/categories/create" class="btn btn-success">Add new Category</a>
    </div>
    <div class="container p-3">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td> @if ($item->status)
                            Activo
                            @else
                            Inactivo
                            @endif</td>
                        <td><a href="/categories/{{$item->slug}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                        <td><a href="/categories/{{$item->slug}}/edit" class="btn btn-success"> <i class="fa-solid fa-pen-to-square"></i> </a></td>
                        <td>
                            <form action="/categories/{{$item->slug}}" method="post">
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
