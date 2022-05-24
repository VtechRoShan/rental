@include('includes/header')
<br>
@if (Session::get('fail'))
<div class="alert alert-danger">
    {{ Session::get('fail') }}
</div>
@endif
<div class="card shadow border-0 text-center p-0">
    <div class="card-body pb-1">
        <h4 class="h3"> Update Rooms</h4>
    </div>
 </div>
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">General information Having ID {{$rent_room_datas->id}}</h2>
            {{-- @foreach ($rent_room_datas as $rent_room_datas) --}}
            <form action="{{route('update_room_data')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$rent_room_datas->id}}" >
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="Area ">Area <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="Area" name="area_name" type="text" placeholder="Enter the Area Location" value="{{$rent_room_datas->area_name}}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="size">Size <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="size" name="size" type="text" placeholder="Enter the Size of Room" value="{{$rent_room_datas->size}}" required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4 mb-3">
                        <label for="price"> Price <span style="color:#ff0000">*</span></label>
                        <div class="input-group">
                           <input data-datepicker="" class="form-control" id="price" name="price" type="number" value="{{$rent_room_datas->price}}" >                                               
                         </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="Available">Available for:</label>
                        <select class="form-select mb-0" id="Available"  name="available_for"  value="{{$rent_room_datas->available_for}}">
                            <option selected value="{{$rent_room_datas->available_for}}">{{$rent_room_datas->available_for}} </option>
                            <option value="Sinlge/Double Person">Sinlge/Double Person</option>
                            <option value="Family Only">Family Only</option>
                            <option value="All (Single/Double/Family)">Both</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="parking">Parking  <span style="color:#ff0000">*</span></label>
                        <select class="form-select mb-0" id="parking" name="parking" aria-label="Gender select example">
                            <option selected value="{{$rent_room_datas->parking}}"> {{$rent_room_datas->parking}}</option>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="city">Floor  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="city" name="floor" type="text" placeholder=" 2nd of 8 floor" value="{{$rent_room_datas->floor}}" required>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="state">Kitchen</label>
                        <select class="form-select w-100 mb-0" id="state" name="kitchen" aria-label="State select example">
                            <option selected value="{{$rent_room_datas->kitchen}}">{{$rent_room_datas->kitchen}}</option>
                            <option value="Available">Available </option>
                            <option value="Not Available">Not Available</option>

                        </select>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="state">Toilet/Bathroom  <span style="color:#ff0000">*</span></label>
                        <select class="form-select w-100 mb-0" id="toilet_bathroom" name="toilet_bathroom" aria-label="State select example">
                            <option selected value="{{$rent_room_datas->toilet_bathroom}}">{{$rent_room_datas->toilet_bathroom}}</option>
                            <option value="Shareable">Shareable</option>
                            <option value="Attached">Attached</option>
                            <option value="Seperate">Seperate</option>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="window_no"> Window No.</label>
                            <select class="form-select w-100 mb-0" id="window_no" name="window_no" aria-label="State select example">
                                <option selected value="{{$rent_room_datas->parking}}">{{$rent_room_datas->parking}}</option>
                                <option value="No"> None</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">3</option>
            
                            </select>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Location  <span style="color:#ff0000">*</span></h2>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label for="state">District  <span style="color:#ff0000">*</span></label>
                        <select class="form-select w-100 mb-0" id="state" name="district" aria-label="State select example">
                            <option selected value="{{$rent_room_datas->district}}"> {{$rent_room_datas->district}}</option>
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Kaski">Kaski</option>
                            <option value="Ruphendi">Ruphendi</option>

                        </select>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">City  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="city" name="city" type="text" value="{{$rent_room_datas->city}}" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="municipal">Municipility/Rural Municipality  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="municipal" type="text" name="municipal" value="{{$rent_room_datas->municipal}}" required>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="ward_no">Ward No.  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="ward_no" name="ward_no" type="number" value="{{$rent_room_datas->ward_no}}" required>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">Tole  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" name="tole" id="city" type="text" value="{{$rent_room_datas->tole_name}}"required>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Nearby Places</h2>
                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_hospital">Hospital</label>
                            <input class="form-control" id="nearby_hospital" type="text" name="nearby_hospital"  value="{{$rent_room_datas->nearby_hospital}}" >
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_school">School <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="nearby_school" type="text" name="nearby_school"  value="{{$rent_room_datas->nearby_school}}" required>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_religious_place">Religious Places</label>
                            <input class="form-control" id="nearby_religious_place" type="text" name="nearby_religious_place"   value="{{$rent_room_datas->nearby_relegious_place}}">
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_highway_range">Highway Range <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="nearby_highway_range" type="text" name="nearby_highway_range"  value="{{$rent_room_datas->nearby_highway_range}}" required>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Photos</h2>
                {{-- <div class="row">
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="photo_outside"> Photo Outside  <span style="color:#ff0000">*</span></label>
                            <input type="file" class="form-control-file" name="photo_outside" id="photo_outside">
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="indise_room"> Inside Room  <span style="color:#ff0000">*</span></label>
                            <input type="file"   class="form-control-file" name="indise_room" id="indise_room">
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="toilet_bathroom"> Toilet Bathroom  <span style="color:#ff0000">*</span></label>
                            <input type="file" class="form-control-file" name="toilet_bathroom" id="toilet_bathroom">
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="anyother"> AnyOther</label>
                            <input type="file" class="form-control-file" name="anyother_image" id="anyother">
                        </div>
                    </div>
                </div> --}}
                <h2 class="h5 my-4">Others</h2>
            
                {{-- <div class="mt-3">
                    {{-- <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button> --
                </div> --}}

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="balcony"> Balcony  <span style="color:#ff0000">*</span></label>
                                <select class="form-select w-100 mb-0" id="balcony" name="balcony" aria-label="State select example">
                                    <option selected value="{{$rent_room_datas->config_balcony}}"> {{$rent_room_datas->config_balcony}}</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="elex_water"> Electricity & Water Charges  <span style="color:#ff0000">*</span></label>
                                <select class="form-select w-100 mb-0" id="elex_water" name="elex_water" aria-label="State select example">
                                    <option selected value="{{$rent_room_datas->config_electricity_water_charges}}"> {{$rent_room_datas->config_electricity_water_charges}}</option>
                                    <option value="Included in Price">Including in Price</option>
                                    <option value="Based on Usage">Based on Usage</option>
                
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <div class="form-group">
                            <label for="textarea">Other's <span style="color:#ff0000">*</span></label>
                            <textarea class="form-control" placeholder="Enter your message..." id="textarea" rows="5" name="text_area"></textarea>
                          
                        </div>
                        <!-- End of Form -->  
                    </div>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" name="submit" class=" mt-2 form-control btn btn-outline-success animate-up-2" value="Submit">Submit</button>
                </div>
            </form>
            {{-- @endforeach --}}
        </div>
    </div>
</div>

@include('includes/footer')