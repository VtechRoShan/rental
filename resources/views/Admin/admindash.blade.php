@include('includes/header')
  <br>
  <div class="">
    @foreach ($datas as $data)
        <figure class="text-center">
            <blockquote class="blockquote">
              <p> <b>{{$data->name}}  </b> {{$data->email}} of {{$data->role}} has {{$data->action}} property of type {{$data->property_type}} at {{$data->created_at}}</p>
            </blockquote>
          </figure>
    @endforeach
  </div> 
@include('includes/footer')