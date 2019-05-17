@extends('layouts.main')
@section('content')
<div class="content-firstPage">
  <ul class="uk-breadcrumb">
    <li><a href="{{route('home')}}">HOME</a></li>
    <li><a href="{{route('collection')}}">COLLECTION</a></li>
     <li><span>{{$product['id']}}</span></li>
   </ul>
  <div class=" uk-child-width-1-2@s " uk-grid>
    <div class="product-image">
      <div class="product-main-image">
        <img src="{{asset('storage/collection/'.$product['id'].'/'.$product['id'].'.jpg')}}" alt="{{$product['id']}}">
      </div>
      <div class="uk-card-body">
            <div class="uk-child-width-1-2" uk-grid>
              <div>
                <img src="{{asset('storage/collection/'.$product['id'].'/'.$product['id'].'.jpg')}}" alt="{{$product['id']}}">
              </div>
              <div>
                <img src="{{asset('storage/collection/'.$product['id'].'/'.$product['id'].'.jpg')}}" alt="{{$product['id']}}">
              </div>

            </div>
      </div>
    </div>
    <div class="product-info uk-text-left">
      <h3 class="product-name">leather pump</h3>
      <p class="product-style">style  {{$product['id']}}</p>
      <p class="product-color">color <span class="product-color-vaue">black</span></p>
      <p class="product-description">SHARP PUMPS IN PATENT CALFSKIN WITH STILETTO HEEL, POINTED TAPERED TOE AND ROUNDED FRONT LINE HIGH ON THE FOOT</p>

      <ul uk-accordion>

    <li>
        <a class="uk-accordion-title" href="#">details</a>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>

</ul>



      <p class="product-buy-button"><a href="{{route('shops')}}" class="uk-button uk-button-secondary">where to buy</a></p>
    </div>
  </div>

</div>
@endsection
