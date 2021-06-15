@extends('product.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">{{ __('Products') }}</h1>

                <div class="card-body">
                    <table border="1" style="margin-left:350px;" >
                        <thead>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                        </thead>
                        <tbody>
                            @foreach($products as $key=>$product)
                            <tr>
                                <td> {{ $key+1 }} </td>
                                <td> {{ $product->name }} </td>
                                <td> {{ $product->description }} </td>
                                <td> {{ $product->price }} </td>
                                <td> 
                                    <img src="{{ asset('uploads/products/'.$product->product_image) }}" alt="" width="70px">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
