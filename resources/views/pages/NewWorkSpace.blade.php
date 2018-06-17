@extends('layouts.app')
    @section('content')
            
                                                      
                 
                                                <div class="container" style="margin-top:50px;">
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-4 col-md-offset-4 col-sm-offset-4 col-xs-12">
                                                            <div class="boxed boxed--lg bg--white text-center feature">
                                                                <a href="/" id="closesign">X Close</a>
                                                                <h4>WORKSPACE REGISTRATION PAGE</h4>
                                                                <center>
                                                                                  @if(count($errors) > 0)
                                                                            @foreach($errors->all() as $error)
                                                                                <!-- <div class="alert alert-danger">{{$error}}</div> -->
                                                                                <center>
                                                                                    <h4> 
                                                                                        <span class="btn__text" style="font-weight: bold; color:red">
                                                                                            {{$error}}                          
                                                                                        </span>
                                                                                    </h4>
                                                                                </center>
                                                                            @endforeach
                                                                    @endif
                                                                
                                                                    @if(session('response'))
                                                                        <div>
                                                                        <h3> <span class="btn__text" style="font-weight: bold; color:green">
                                                                                {{session('response')}}                           
                                                                                </span>
                                                                            </h3>
                                                                            
                                                                        </div>
                                                                    @endif 
                                                                </center>
                                                                <hr>
                                                                <div class="feature__body">
                                                                    <form class="form-horizontal" method="POST" action="{{ url('/register3') }}">
                                                                        {{ csrf_field() }}
                                                                     
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <input type="text" id="formtext" name="Surname" placeholder=" Enter Your Surname" />
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <input type="text" id="formtext" name="Firstname" placeholder="Enter Your Firstname" />
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <input type="text" id="formtext" name="Othernames" placeholder="Enter Your Othernames" />
                                                                            </div>
                                                                           
                                                                             <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <input type="text" id="formtext" name="Email" placeholder="Enter Your Email Address" />
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <input type="text" id="formtext" name="PhoneNumber" placeholder="Enter Your PhoneNo" />
                                                                            </div>

                                                                             <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <div class="input-select" id="formtext" name="Sex">
                                                                                    <select name="Sex" value="Sex">
                                                                                        <option selected="Sex"  name="Sex" value="Sex">Select Sex</option>
                                                                                        <option>Male</option>
                                                                                        <option>Female</option>
                                                                                        
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <div class="input-select" id="formtext" name="WorkSpace">
                                                                                    <select name="WorkSpace" id="redirect" value="WorkSpace">
                                                                                        <option selected="WorkSpace" name="WorkSpace" value="WorkSpace">Select a WorkSpace</option>
                                                                                        <option>Premium Worker #120,000</option>
                                                                                        <option>Traveler's Desk #24,000</option>
                                                                                        <option>Resident Business #28,000</option>
                                                                                        <option value="/welcome">Other options</option>
                                                                                        
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                           
                                                                        
                                                                           
                                                                        
                                                                            <div class="col-sm-4 col-md-4 col-xs-4">
                                                                                <button class="btn btn--primary" id="register_button" type="submit">Check-In</button>

                                                                            </div>
                                                                               
                                                                           
                                                                              <div class="col-sm-4 col-md-4 col-xs-4">
                                                                                <a class="btn btn--primary" style="margin-left:10px;" id="homepage_button" href="/WorkSpaceCheckout">
                                                                                    <span class="btn__text" style="color:white">
                                                                                        Check-Out
                                                                                    </span>
                                                                                </a>
                                                                                
                                                                            </div>

                                                                         

                                                                        </div>
                                                                        <!--end of row-->
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end of row-->
                                                </div>
                                                <!--end of container-->

                                                <script>
    document.getElementById("redirect").onchange = function() {
        if (this.selectedIndex!==0) {
            window.location.href = this.value;
        }        
    };
</script>
                   

    @endsection
      