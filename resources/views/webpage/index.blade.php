@extends('webpage.master')
@section('body')
<div class="container p-3">
    <div id="category-slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-md-12">
                        <h3>{{ $category->name }} </h3>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($category->products as $product)
                              <div class="col">
                                <div class="card h-100">
                                  <img src="{{ Storage::url($product->photo->path) }}" class="card-img-top" alt="Imagen del producto">
                                  <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text">{{ $product->price }}</p>                                
                                    
                                    <a href="#" class="btn btn-primary">Comprar</a>

                                  </div>
                                </div>
                              </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection    