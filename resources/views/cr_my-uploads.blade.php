@include('includes/header')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Volt</a></li>
                <li class="breadcrumb-item active" aria-current="page">Transactions</li>
            </ol>
        </nav>
        <h2 class="h4">All Orders</h2>
        <p class="mb-0">Your web analytics dashboard template.</p>
    </div>
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::get('fail'))
    <div class="alert alert-success">
        {{ Session::get('fail') }}
    </div>
@endif
{{-- @if (Session::get('updated'))
    <div class="alert alert-success">
        {{ Session::get('updated') }}
    </div>
@endif --}}
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="ms-2 ms-lg-3">
            <button type="button" class="btn btn-sm btn-outline-gray-600 mx-2"> <a href="{{route('my-uploads')}} ">  All Uploads </a> </button>
            <button type="button" class="btn btn-sm btn-outline-gray-600 mx-2"> <a href="{{route('view_room')}} ">Rooms </a> </button>
            <button type="button" class="btn btn-sm btn-outline-gray-600 mx-2"> <a href="{{route('view_room')}} ">Lands </a> </button>
            <button type="button" class="btn btn-sm btn-outline-gray-600 mx-2"> <a href="{{route('view_room')}} ">Houses </a> </button>
        </div>
        <a href="{{route('trash_upload')}}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Trash
        </a>

    </div>
</div>
<div class="table-settings mb-4">
    <div class="row align-items-center justify-content-between">
        <div class="col col-md-6 col-lg-3 col-xl-4">
            <div class="input-group me-2 me-lg-3 fmxw-400">
                <span class="input-group-text">
                    <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </span>
                <input type="text" class="form-control" placeholder="Search orders">
            </div>
        </div>
        <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
            <div class="dropdown">
                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                    <span class="small ps-3 fw-bold text-dark">Show</span>
                    <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></a>
                    <a class="dropdown-item fw-bold" href="#">20</a>
                    <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-gray-200">Property Id</th>
                <th class="border-gray-200">Type</th>
                <th class="border-gray-200">Price</th>
                <th class="border-gray-200">Size</th>						
                {{-- <th class="border-gray-200">Views</th> --}}
                <th class="border-gray-200">Offers</th>
                <th class="border-gray-200">available For</th>
                <th class="border-gray-200">Address</th> 
                <th class="border-gray-200">Created At</th> 
                <th class="border-gray-200">Created By</th> 
                <th class="border-gray-200">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Item -->
            @foreach ($rent_room_datas as $rent_room_data)
            <tr>
                    {{-- {!! substr($teams->description, 0, 410) !!} --}}
                <td><span class="fw-bold">{{ $rent_room_data->id}}</span></td>
                <td><span class="fw-normal">{{ $rent_room_data->type }}</span></td>
                <td><span class="fw-bold">{{ $rent_room_data->price}}</span></td>           
                <td><span class="fw-normal">{{ $rent_room_data->size}}</span></td>
                {{-- <td><span class="fw-normal"> </span></td> --}}
                <td><span class="fw-normal"> </span></td>
                <td><span class="fw-normal">{{ $rent_room_data->available_for}}</span></td>
                <td><span class="fw-normal">{{ $rent_room_data->area_name }}</span></td> 
                <td><span class="fw-bold ">{{ $rent_room_data->created_at}}</span></td>
                <td><span class="fw-normal">{{ $rent_room_data->created_by }}</span></td> 

                <td> 
                    <div class="btn-group btn-sm" role="group" >
                        <button type="button" class="btn btn-warning btn-sm"  data-toggle="tooltip"  title="view"> <i class=""> <a  href="">View</a> </i> </button>
                        @if($rent_room_data->type  =='Room')
                            <button type="button" class="btn btn-success btn-sm"   data-toggle="tooltip"  title="Edit ">  <i class=""> <a  href="{{route('update_room',[$rent_room_data->id])}}">Edit Room</a>  </i> </button>
                        @elseif ($rent_room_data->type =='Land')
                            <button type="button" class="btn btn-success btn-sm"   data-toggle="tooltip"  title="Edit ">  <i class=""> <a  href="{{route('update_land',[$rent_room_data->id])}}">Edit Land</a>  </i> </button>
                        @elseif($rent_room_data->type =='House')
                            <button type="button" class="btn btn-success btn-sm"   data-toggle="tooltip"  title="Edit ">  <i class=""> <a  href="{{route('update_house',[$rent_room_data->id])}}">Edit House</a>  </i> </button>
                        @endif
                        <button type="button" class="btn btn-danger btn-sm"  data-toggle="tooltip"  title="Trash "> <i class=""> <a  href="{{route('delete_upload',[$rent_room_data->id])}}">Trash</a> </i> </button>
                    </div>
                </td>
            </tr>
            @endforeach
            <!-- Item -->
            <!-- Item -->                               
        </tbody>
    </table>
    <div class="row">
        <div class="d-flex justify-content-center">
            {!!$rent_room_datas->links()!!}
        </div>
    </div>


@include('includes/footer')