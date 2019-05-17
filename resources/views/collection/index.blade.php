@extends('layouts.main')
@section('content')
<div class="content-firstPage">
  <div class="uk-text-center uk-child-width-1-2@s uk-child-width-1-4@l" uk-grid>
    <!-- card start-->
      <div>
        <div class="uk-card uk-card-hover">
          <div class="uk-card-media-top">
                <a href="{{route('collection.product.show', ['id'=>'17-670-01-08-395' ])}}">
                  <img src="{{asset('storage/collection/17-670-01-08-395/17-670-01-08-395.jpg')}}" alt="17-670-01-08-395">
                </a>
          </div>
          <div class="uk-card-body">
                <div class="uk-child-width-1-2" uk-grid>
                  <div>
                    <div class="item-name uk-text-left"> leather pump </div>
                  </div>
                  <div>
                    <div class="item-price uk-text-right"> 300 € </div>
                  </div>
                  <div style="margin-top: 5px !important;">
                    <div class="item-art uk-text-left"> style 17-670-01-08-395 </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <!-- card end-->
      <!-- card start-->
        <div>
          <div class="uk-card uk-card-hover">
            <div class="uk-card-media-top">
                <a href="{{route('collection.product.show', ['id'=>'17-670-01-18-15' ])}}">
                  <img src="{{asset('storage/collection/17-670-01-18-15/17-670-01-18-15.jpg')}}" alt="17-670-01-18-15">
                </a>
            </div>
            <div class="uk-card-body">
                  <div class="uk-child-width-1-2" uk-grid>
                    <div>
                      <div class="item-name uk-text-left"> Suede pump </div>
                    </div>
                    <div>
                      <div class="item-price uk-text-right"> 300 € </div>
                    </div>
                    <div style="margin-top: 5px !important;">
                      <div class="item-art uk-text-left"> style 17-670-01-18-15 </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
        <!-- card end-->
        <!-- card start-->
          <div>
            <div class="uk-card uk-card-hover">
              <div class="uk-card-media-top">
                  <a href="{{route('collection.product.show', ['id'=>'17-670-01-18-185' ])}}">
                    <img src="{{asset('storage/collection/17-670-01-18-185/17-670-01-18-185.jpg')}}" alt="17-670-01-18-185">
                  </a>
              </div>
              <div class="uk-card-body">
                    <div class="uk-child-width-1-2" uk-grid>
                      <div>
                        <div class="item-name uk-text-left"> leather pump </div>
                      </div>
                      <div>
                        <div class="item-price uk-text-right"> 300 € </div>
                      </div>
                      <div style="margin-top: 5px !important;">
                        <div class="item-art uk-text-left"> style 17-670-01-18-185 </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
          <!-- card end-->
          <!-- card start-->
            <div>
              <div class="uk-card uk-card-hover">
                <div class="uk-card-media-top">
                    <a href="{{route('collection.product.show', ['id'=>'17-670-01-18-215' ])}}">
                      <img src="{{asset('storage/collection/17-670-01-18-215/17-670-01-18-215.jpg')}}" alt="17-670-01-18-215">
                    </a>
                </div>
                <div class="uk-card-body">
                      <div class="uk-child-width-1-2" uk-grid>
                        <div>
                          <div class="item-name uk-text-left"> leather pump </div>
                        </div>
                        <div>
                          <div class="item-price uk-text-right"> 300 € </div>
                        </div>
                        <div style="margin-top: 5px !important;">
                          <div class="item-art uk-text-left"> style 17-670-01-18-215 </div>
                        </div>
                      </div>
                </div>
              </div>
            </div>
            <!-- card end-->

  </div>

</div>
@endsection
