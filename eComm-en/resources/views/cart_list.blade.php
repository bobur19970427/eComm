@extends('master')
@section('content')
    <div class="custom-product">

        <div class="col-sm-10">
            <div class="trending-wrapper">

                <h4>Result for product</h4>
                <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
                @foreach($products as $item)
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-4">
                            <a href="detail/{{$item->id}}">
                                <img style="height: 200px;" src="{{$item->gallery}}" alt="" class="treding-image">


                            </a>
                        </div>
                        <div class="col-sm-4">


                                <div>
                                    <h2>
                                        {{$item->name}}
                                    </h2>
                                    <h5>{{$item->description}}</h5>
                                </div>

                        </div>
                        <div class="col-sm-3">
                            <a href="remove_cart/{{$item->cart_id}}" class="btn btn-warning">Romove to cart</a>
                        </div>

                    </div>
                @endforeach
            </div>
            <a href="ordernow" class="btn btn-success">Order Now</a><br><br>

        </div>

    </div>
@endsection
