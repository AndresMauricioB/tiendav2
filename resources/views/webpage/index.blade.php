@extends('webpage.master')
@section('body')
<div class="container p-3">
    <div id="category-slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-md-12">
                        <h3 class=" p-3" style="background-color: #e3f2fd;">{{ $category->name }} </h3>
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            @foreach ($category->products as $product)
                              <div class="col">
                                <div class="card h-100">
                                  <img width="100" src="{{ Storage::url($product->photo->path) }}" class="card-img-top" alt="Imagen del producto">
                                  <div class="card-body">
                                    <h5 class="card-title text-primary">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text">${{ $product->price }}</p>                                
                                    <a href="/cart/{{$product->slug}}" class="btn btn-primary">Add to cart</a>
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
    <div class="icon-cart">
        <a name="" id="" class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-cart-shopping"></i> {{ $cart !== null ? count($cart) : 0 }}
        </a>
    </div>
   




  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container div-cart">
                @if ($cart !== null && count($cart) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price unit</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $products => $product)
                                <tr class="scroll2">
                                    <td> <img width="100" src="{{ Storage::url($product->photo->path) }}" alt=""></td>   
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->pricetotal }}</td>  
                                </tr>                 
                            @endforeach
        
                            <tr>
                                <td class="fw-bold" colspan=4>Total</td>
                                <td class="fw-bold"> {{$total}}</td>
                            </tr>
                        </tbody>
                    </table>
                @else
                    <p>There are no products in the cart</p>
                @endif
                <a href="/cart"><button class="btn btn-primary">Vaciar Cart</button></a>
            </div>
          
        </div>
       
      </div>
    </div>
  </div>


@endsection    