
@extends('layouts.main')

@section('content')
<div class="content-firstPage">
  <div class="uk-grid-small uk-child-width-1-1@s uk-child-width-1-2@m uk-text-center uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-inline; delay: 500; repeat: true">
      <div >
          <div class="uk-inline  uk-padding-remove-bottom uk-inline-clip uk-transition-toggle" tabindex="0">
            <img class="uk-transition-scale-up uk-transition-opaque" src="{{asset('storage/images/firstPage/ameete_NIK0800-2_nopersonx1125.jpg')}}"  alt="ameete">
            <div class="uk-overlay uk-position-center"><img class="logo-white-overlay" width="" height="" alt="ameete" uk-img="data-src:{{asset('storage/front/ameete_logo_white.svg')}}" uk-svg></div>
          </div>
      </div>

      <div >
          <div class="uk-inline  uk-padding-remove-top uk-inline-clip uk-transition-toggle" tabindex="0">
            <img class="uk-transition-scale-up uk-transition-opaque" src="{{asset('storage/images/firstPage/ameete_NIK0244-2-no_personx1125px.jpg')}}"  alt="ameete">
            <div class="uk-overlay uk-position-center"><img class="logo-white-overlay" width="" height="" alt="ameete" uk-img="data-src:{{asset('storage/front/ameete_logo_white.svg')}}" uk-svg></div>
          </div>
      </div>

  </div>

</div>
@endsection
