<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('info Category') }}
        </h2>
    </x-slot>

<div class="container">
    
    <div class="container">
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
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->status}}</td>
                    </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <a href="/products/create" class="btn btn-success">Add new Product</a>
    </div>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">pName</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <script>console.log($category)</script>
               
                @foreach($products as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->status}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>