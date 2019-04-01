@extends('layouts.main')

@section('title',' Компания Jeunesse Global в Казахстане - Официальный дистрибьютор')
@section('content')

       <div class="row">
            <div class="small-3 column">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('product')}}">
                            <img style="width:200px;height:200px;"src="images\products\zen.png"/>
                        </a>
                    </div>
                    <a href="{{route('product')}}">
                        <h3>
                            Kickin with Kraken Tee
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
        </div>

@endsection
