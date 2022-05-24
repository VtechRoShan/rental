@include('includes/header')
@include('includes/show_property')
@if (Session::get('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif
@if (Session::get('Already_Added'))
<div class="alert alert-warning">
    {{ Session::get('Already_Added') }}
</div>
@endif
    <section class="">
        <div class="container py-2">
            <div class="h1 text-center text-dark" id="pageHeaderTitle"></div>

    @foreach ($datas as $data)
      

            <article class="postcard light blue">
              <a href="hello">
                <a class="postcard__img_link" href="#">
                  <?php
                    $a = "https://picsum.photos/1000/10";
                    $a .= $data->id;
                    ?>
                    <img class="postcard__img" src="{{$a}}" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue"><a href="#">{{$data->size}} <span style="color:red; font-size:24px;" > {{$data->type}} available on  </span> {{$data->size}} </a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>{{ $data->created_at}}
                            {{-- Mon, May 25th 2020  --}}
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div><span style="color:black; font-size:20px;"> <strong> Price: </strong></span><b> Rs. {{$data->price}}|- </b> </div>
                    <div class="postcard__preview-txt"> 
                    <div> Address: {{$data->state}} {{$data->district}} {{$data->city}} {{$data->municipal}} {{$data->ward_no}} {{$data->area_name}} </div>
                    <div class="col-md-12">
                      <button class="btn btn-outline-danger btn-sm"><span style="color:black"> Nearby Hospital: </span>{{$data->nearby_hospital}}</button>
                      <button class="btn btn-outline-danger btn-sm"><span style="color:black"> Nearby Relegious Place: </span>{{$data->nearby_relegious_place}}</button> 
                      <button class="btn btn-outline-danger btn-sm"><span style="color:black"> Nearby School: </span>{{$data->nearby_school}}</button> 
                  </div>
                  <br>
                  <div><span style="color:black; font-size:20px;"> Highway/Subway Range: </span><b> {{$data->nearby_hospital}} </b> </div>
                    <ul class="postcard__tagbox"> 
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Parking: {{$data->parking}}</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>Kitchen: {{$data->kitchen}}</li>
                        <li class="tag__item play blue">
                            <a href="#"><i class="fas fa-play mr-2"></i>Water & Electricity: {{$data->config_electricity_water_charges}}</a>
                        </li>
                    </ul>
                    <ul class="postcard__tagbox"> 
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Balcony: {{$data->config_balcony}}</li>
                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>Toilet Bathroom: {{$data->toilet_bathroom}}</li>

                    </ul>
                </div>
                {{-- ('delete_upload',[$rent_room_data->id]) --}}
                <div class="row">
                  <button class="col-6 mx-auto btn btn-info"> <a href="{{route('view_single_room',[$data->id])}}" style="text-decoration: none"> <strong> View {{$data->type}}</strong> </a></button>
                  <button class="col-6 mx-auto btn btn-primary"> <a href="{{route('add_to_cart',[$data->id])}}" style="text-decoration: none"> <strong>Add to Cart</strong> </a></button>
                </div>
                </a>
            </article>
            <br> <hr> <br>
            @endforeach

@include('includes/footer')
