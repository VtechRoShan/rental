@include('includes/header')
@include('includes/show_property')
@if (Session::get('deleted'))
<div class="alert alert-success">
    {{ Session::get('deleted') }}
</div>
    <section class="">
        <div class="container py-2">

{{--  
            <div class="h4 text-center text-dark" id="pageHeaderTitle">       @if (Session::get('deleted'))
                <div class="alert alert-success">
                    {{ Session::get('deleted') }}
                </div>
            @endif </div> --}}
            <div class="h6 text-center text-dark" id="pageHeaderTitle">     
            @endif </div>

    @foreach ($data_carts as $data_cart)
      

   <article class="postcard light blue">
              <a href="hello">
                <a class="postcard__img_link" href="#">
                  <?php
                    $a = "https://picsum.photos/1000/10";
                    $a .= $data_cart->id;
                    ?>
                    <img class="postcard__img" src="{{$a}}" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue"><a href="#">{{$data_cart->size}} <span style="color:red; font-size:24px;" > {{$data_cart->type}} available on  </span> {{$data_cart->size}} </a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>{{ $data_cart->created_at}}
                           
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div><span style="color:black; font-size:20px;"> <strong> Price: </strong></span><b> Rs. {{$data_cart->price}}|- </b> </div>
                    <div class="postcard__preview-txt"> 
                    <div> Address: {{$data_cart->district}} {{$data_cart->city}} {{$data_cart->municipal}} {{$data_cart->ward_no}} {{$data_cart->area_name}} </div>
                    <div class="col-md-12">
                      <button class="btn btn-outline-danger btn-sm"><span style="color:black"> Nearby Hospital: </span>{{$data_cart->nearby_hospital}}</button>
                      <button class="btn btn-outline-danger btn-sm"><span style="color:black"> Nearby Relegious Place: </span>{{$data_cart->nearby_relegious_place}}</button> 
                      <button class="btn btn-outline-danger btn-sm"><span style="color:black"> Nearby School: </span>{{$data_cart->nearby_school}}</button> 
                  </div>
                  <br>
                  <div><span style="color:black; font-size:20px;"> Highway/Subway Range: </span><b> {{$data_cart->nearby_hospital}} </b> </div>
                    <ul class="postcard__tagbox"> 
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Parking: {{$data_cart->parking}}</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>Kitchen: {{$data_cart->kitchen}}</li>
                        <li class="tag__item play blue">
                            <a href="#"><i class="fas fa-play mr-2"></i>Water & Electricity: {{$data_cart->config_electricity_water_charges}}</a>
                        </li>
                    </ul>
                    <ul class="postcard__tagbox"> 
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Balcony: {{$data_cart->config_balcony}}</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>Toilet Bathroom: {{$data_cart->toilet_bathroom}}</li>

                    </ul>
                </div>
                {{-- ('delete_upload',[$rent_room_data_cart->id]) --}}


                <div class="row">
                  <button class="col-6 mx-auto btn btn-info"> <a href="{{route('view_single_room',[$data_cart->id])}}" style="text-decoration: none"> <strong> View {{$data_cart->type}}</strong> </a></button>
                  <button class="col-6 mx-auto btn btn-primary"> <a href="{{route('remove_from_cart',[$data_cart->id])}}" style="text-decoration: none"> <strong>Remove from Cart</strong> </a></button>
                </div>
                </a>
            </article> 
            <br> <hr> <br>
            @endforeach

@include('includes/footer')