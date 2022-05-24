@include('includes/header')
<br>
@if (Session::get('fail'))
<div class="alert alert-danger">
    {{ Session::get('fail') }}
</div>
@endif
<div class="card shadow border-0 text-center p-0">
    <div class="card-body pb-0">
        <h4 class="h3">Land Update  </h4>
    </div>
 </div>
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">General information Having Id {{$rent_land_datas->id}}</h2>
            <form action="{{route('update_land_data')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$rent_land_datas->id}}" >
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div>
                            <label for="mohoda_width ">Mohoda (हातमा) <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="mohoda_width" name="mohoda_width" type="number" placeholder="Enter the Mohoda (हातमा) " value="{{$rent_land_datas->mohoda_width}}" required>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div>
                            <label for="mohoda_faced">Direction Faced <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="mohoda_faced" name="mohoda_faced" type="text" placeholder="Enter the Direction faced by Land" value="{{$rent_land_datas->mohoda_faced_direction}}" required>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div>
                            <label for="pichhad">Pichhad Length (हातमा) <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="pichhad" name="pichhad_length" type="number" placeholder="Enter the Pichhad (हातमा)" value="{{$rent_land_datas->pichhad_length}}" required>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="price"> Price <span style="color:#ff0000">*</span></label>
                        <div class="input-group">
                           <input data-datepicker="" class="form-control" id="price" name="price" type="number" placeholder="  Rs XXXX Amount"  value="{{$rent_land_datas->price}}" required>                                               
                         </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    {{-- <div class="col-md-4 mb-3">
                        <label for="road_penetration"> Touch With Road <span style="color:#ff0000">*</span></label>
                        <div class="input-group">
                           <input data-datepicker="" class="form-control" id="road_penetration" name="road_penetration" type="number" placeholder="  Rs XXXX Amount" required>                                               
                         </div>
                    </div> --}}
                    <div class="col-md-3 mb-3">
                        <div>
                            <label for="Area ">Area <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="Area" name="area_name" type="text" placeholder="Enter the Area Location" value="{{$rent_land_datas->area_name}}"  required>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="road_penetration">Touched By Road</label>
                        <input class="form-control" type=" number"  id="road_penetration"  name="road_penetration" placeholder=" " value="{{$rent_land_datas->road_penetration}}" >
                      
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="penetrated_road_type"> Penetrated Road Type </label>
                        <select class="form-select mb-0" id="penetrated_road_type"  name="penetrated_road_type" placeholder=" "">
                            <option  Selected value="{{$rent_land_datas->road_penetration_type}}">Selected: {{$rent_land_datas->road_penetration_type}} </option>
                            <option value="Pitched">Pitched</option>
                            <option value="Gravalled">Gravalled</option>
                            <option value="Semi Graavalled">Not Gravalled</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="road_width">Road Width <span style="color:#ff0000">*</span></label>
                        <input class="form-control " type=" number"  id="road_width" name="road_width" placeholder=" " value="{{$rent_land_datas->road_width}}" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="daam">Daam <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="daam" name="daam" type="text" placeholder=" 2nd of 8 floor" value="{{$rent_land_datas->area_unit_daam}}"  required>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="paisa">Paisa</label>
                         <input class="form-control " type=" number"  id="paisa" name="paisa" placeholder=" " value="{{$rent_land_datas->area_unit_paisa}}" > 
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="aana"> Aana <span style="color:#ff0000">*</span></label>
                         <input class="form-control " type=" number"  id="aana" name="aana" placeholder=" " value="{{$rent_land_datas->area_unit_aana}}" > 
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="ropani"> Ropani</label>
                            <input class="form-control " type=" number"  id="ropani" name="ropani" placeholder=" " value="{{$rent_land_datas->area_unit_ropani}}" > 
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Location  <span style="color:#ff0000">*</span></h2>
                <div class="row">

                    <div class="col-sm-4 mb-3">
                        <label for="state">District  <span style="color:#ff0000">*</span></label>
                        <select class="form-select w-100 mb-0" id="state" name="district" aria-label="State select example">
                            <option selected value="{{$rent_land_datas->district}}" >Selected {{$rent_land_datas->district}}</option>
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Kaski">Kaski</option>
                            <option value="Ruphendi">Ruphendi</option>

                        </select>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">City  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="city" name="city" type="text" placeholder="City"  value="{{$rent_land_datas->city}}"required>
                        </div>
                    </div>


                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="municipal">Municipility/Rural Municipality  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="municipal" type="text" name="municipal" placeholder="municipal" value="{{$rent_land_datas->municipal}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="ward_no">Ward No.  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="ward_no" name="ward_no" type="number" placeholder="ward_no" value="{{$rent_land_datas->ward_no}}" required>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">Tole  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" name="tole" id="city" type="text" placeholder="City" value="{{$rent_land_datas->tole_name}}" required>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">Street No. <span style="color:#ff0000">*</span></label>
                            <input class="form-control" name="tole" id="city" type="text" placeholder="City" value="{{$rent_land_datas->street_no}}" required>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Nearby Places</h2>
                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_hospital">Hospital</label>
                            <input class="form-control" id="nearby_hospital" type="text" name="nearby_hospital" placeholder="Nearest Hospital" value="{{$rent_land_datas->nearby_hospital}}" >
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_school">School <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="nearby_school" type="text" name="nearby_school" placeholder="Nearest School" value="{{$rent_land_datas->nearby_school}}" required>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_religious_place">Religious Places</label>
                            <input class="form-control" id="nearby_religious_place" type="text" name="nearby_religious_place" placeholder="Nearest Religious Place" value="{{$rent_land_datas->nearby_relegious_place}}" >
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_highway_range">Highway Range <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="nearby_highway_range" type="text" name="nearby_highway_range" placeholder="Highway Range Or Subway" required value="{{$rent_land_datas->nearby_highway_range}}">
                        </div>
                    </div>
                </div>
                {{-- <h2 class="h5 my-4">Photos</h2> --}}
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
                {{-- <h2 class="h5 my-4">Others</h2> --}}
            
                {{-- <div class="mt-3">
                    {{-- <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button> --
                </div> --}}

                {{-- <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="balcony"> Balcony  <span style="color:#ff0000">*</span></label>
                                <select class="form-select w-100 mb-0" id="balcony" name="balcony" aria-label="State select example">
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="elex_water"> Electricity & Water Charges  <span style="color:#ff0000">*</span></label>
                                <select class="form-select w-100 mb-0" id="elex_water" name="elex_water" aria-label="State select example">
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
                </div> --}}

                <div class="form-group mt-2">
                    <button type="submit" name="submit" class=" mt-2 form-control btn btn-outline-success animate-up-2" value="Submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('includes/footer')