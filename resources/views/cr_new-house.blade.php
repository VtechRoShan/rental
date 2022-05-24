@include('includes/header')
<br>
@if (Session::get('fail'))
<div class="alert alert-danger">
    {{ Session::get('fail') }}
</div>
@endif
<div class="card shadow border-0 text-center p-0">
    <div class="card-body pb-0">
        <h4 class="h3">House </h4>
    </div>
 </div>
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-1"> <strong>जग्ग विवरण  </strong> </h2>
            <form action="{{route('create_house_uploads')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div>
                            <label for="mohoda_width ">  Mohoda (हातमा) <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="mohoda_width" name="mohoda_width" type="number" placeholder="Enter the Mohoda (हातमा) " required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div>
                            <label for="mohoda_faced">Direction Faced <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="mohoda_faced" name="mohoda_faced" type="text" placeholder="Enter the Direction faced by Land" required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div>
                            <label for="pichhad">Pichhad Length (हातमा) <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="pichhad" name="pichhad_length" type="number" placeholder="Enter the Pichhad (हातमा) " required>
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
                    {{-- <div class="col-md-3 mb-3">
                        <div>
                            <label for="Area ">Area <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="Area" name="area_name" type="text" placeholder="Enter the Area Location" required>
                        </div>
                    </div> --}}
                    <div class="col-md-3 mb-3">
                        <div>
                            <label for="Area ">Area <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="Area" name="area_name" type="text" placeholder="Enter the Area Location" required>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="road_penetration">Touched By Road</label>
                        <input class="form-control" type=" number"  id="road_penetration"  name="road_penetration" placeholder=" "">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="penetrated_road_type"> Penetrated Road Type </label>
                        <select class="form-select mb-0" id="penetrated_road_type"  name="penetrated_road_type" placeholder=" "">
                            <option value="Pitched">Pitched</option>
                            <option value="Gravalled">Gravalled</option>
                            <option value="Semi Graavalled">Not Gravalled</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="road_width">Road Width <span style="color:#ff0000">*</span></label>
                        <input class="form-control " type=" number"  id="road_width" name="road_width" placeholder=" ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="daam">Daam <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="daam" name="daam" type="text" placeholder=" 2nd of 8 floor" required>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="paisa">Paisa</label>
                         <input class="form-control " type=" number"  id="paisa" name="paisa" placeholder=" "> 
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label for="aana"> Aana <span style="color:#ff0000">*</span></label>
                         <input class="form-control " type=" number"  id="aana" name="aana" placeholder=" "> 
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="ropani"> Ropani</label>
                            <input class="form-control " type=" number"  id="ropani" name="ropani" placeholder=" "> 
                        </div>
                    </div>
                </div>

                <h2 class="h5 mb-4"> <strong>घरको विवरण  </strong> </h2>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <div>
                            <label for="bedroom ">  No.of Bed Room <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="bedroom" name="bedroom" type="number" placeholder="Enter the number of bedroom">
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div>
                            <label for="living_room"> No. of Living Room<span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="living_room" name="living_room" type="number" placeholder="Enter the  No. of Living Room" required>
                        </div>
                    </div>

                    <div class="col-md-2 mb-3">
                        <div>
                            <label for="kitchen"> No. of Kitchen<span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="kitchen" name="kitchen" type="number" placeholder="Enter the  No. of Living Room" required>
                        </div>
                    </div>

                    <div class="col-md-2 mb-3">
                        <div>
                            <label for="floor ">  No.of floor <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="floor" name="floor" type="number" placeholder="Enter the number of floor">
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div>
                            <label for="bathroom">No of Bathroom<span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="bathroom" name="bathroom" type="number" placeholder="Enter the bathroom " required>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div>
                            <label for="toilet">No of Toilet<span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="toilet" name="toilet" type="number" placeholder="Enter the toilet " required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col mb-3">
                        <div>
                            <label for="house_type ">Type of House <span style="color:#ff0000">*</span></label>
                            <select class="form-select mb-0"  id="house_type" name="house_type"  placeholder=" "">
                                <option value="Pitched">Residential</option>
                                <option value="Gravalled">office</option>
                                <option value="Semi Graavalled">Shutter and Store</option>
                            </select>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <label for="parking">Parking</label>
                        <input class="form-control" type=" number"  id="parking"  name="parking" placeholder=" "">
                      
                    </div>
                    <div class="col mb-3">
                        <label for="balcony"> balcony </label>
                        <input class="form-control " type=" number"  id="balcony" name="balcony" placeholder=" ">
                        </select>
                    </div>
                    <div class="col mb-3">
                        <label for="built_year">Built Year<span style="color:#ff0000">*</span></label>
                        <input class="form-control " type=" number"  id="built_year" name="built_year" placeholder=" ">
                    </div>
                    <div class="col mb-3">
                        <label for="mohoda">House's Mohoda </label>
                        <input class="form-control " type=" number"  id="house_mohoda" name="mohoda" placeholder=" ">
                        </select>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3 mb-3">
                        <label for="picchad">House's Pichhad<span style="color:#ff0000">*</span></label>
                        <input class="form-control " type=" number"  id="house_picchad" name="picchad" placeholder=" ">
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="Finishing">Finishing <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="Finishing" name="finishing" type="text" placeholder=" 2nd of 8 floor" required>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="furnishing">Furnishing</label>
                            <input class="form-control " type=" number"  id="furnishing" name="furnishing" placeholder=" "> 
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="price">Price </label>
                        <input class="form-control " type=" number"  id="price" name="price" placeholder=" ">
                        </select>
                    </div>
                </div>








                <h2 class="h5 my-4">Location  <span style="color:#ff0000">*</span></h2>
                <div class="row">

                    <div class="col-sm-4 mb-3">
                        <label for="state">District  <span style="color:#ff0000">*</span></label>
                        <select class="form-select w-100 mb-0" id="state" name="district" aria-label="State select example">
                            <option selected>Select District</option>
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Kaski">Kaski</option>
                            <option value="Ruphendi">Ruphendi</option>

                        </select>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">City  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="city" name="city" type="text" placeholder="City" required>
                        </div>
                    </div>


                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="municipal">Municipility/Rural Municipality  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="municipal" type="text" name="municipal" placeholder="municipal" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="ward_no">Ward No.  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="ward_no" name="ward_no" type="number" placeholder="ward_no" required>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">Tole  <span style="color:#ff0000">*</span></label>
                            <input class="form-control" name="tole" id="city" type="text" placeholder="City" required>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="street">Street No. <span style="color:#ff0000">*</span></label>
                            <input class="form-control" name="street" id="street" type="number" placeholder="street no" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mb-3">
                        <div class="form-group">
                            <label for="google_map_location">Google Map Location<span style="color:#ff0000">*</span></label>
                            <input class="form-control" name="google_map_location" id="google_map_location" type="text" placeholder="Paste the google Map location link" required>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Nearby Places</h2>
                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_hospital">Hospital</label>
                            <input class="form-control" id="nearby_hospital" type="text" name="nearby_hospital" placeholder="Nearest Hospital" >
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_school">School <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="nearby_school" type="text" name="nearby_school" placeholder="Nearest School" required>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_religious_place">Religious Places</label>
                            <input class="form-control" id="nearby_religious_place" type="text" name="nearby_religious_place" placeholder="Nearest Religious Place" >
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="nearby_highway_range">Highway Range <span style="color:#ff0000">*</span></label>
                            <input class="form-control" id="nearby_highway_range" type="text" name="nearby_highway_range" placeholder="Highway Range Or Subway" required>
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
                </div>

                <div class="form-group mt-3">
                    <button type="submit" name="submit" class=" mt-2 form-control btn btn-outline-success animate-up-2" value="Submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('includes/footer')