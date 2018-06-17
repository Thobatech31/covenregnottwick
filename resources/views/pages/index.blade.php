@extends('layouts.app')
    @section('content')
            
                                
                        <div class="container">
                             <div class="row">
                                 
                                <div class="col-md-4 col-sm-7 col-xs-7">
                                    
                                    <div class="typed-headline">
                                        <!--THE SECTION FOR THE TRANSITION(ANIMATED TEXT)-->
                                        <span class="h2 inline-block" style="margin-left:-120px; margin-top:50px; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal;">Welcome You To</span><br/>
                                        <span class="h2 typed-text typed-text--cursor color--secondary" style=" margin-left:-70px; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal;" data-typed-strings="Curator University,"></span>
                                    </div>
                                </div>

                                 <div class="col-md-5 col-sm-5 col-xs-5">
                                   
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
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-3">
                                </div>
                            </div>
                                 
                        </div>
                        
                      

                           <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6">
                             
                                 <div class="modal-instance block">
                                     <a class="btn modal-trigger" href="#" id="homepage_button">
                                        <span class="btn__text" id="btn__text">
                                        Training
                                        </span>
                                    </a>
                                    <div class="modal-container">
                                        <div class="modal-content">
                                            <section class="unpad ">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-4 col-md-offset-4 col-sm-offset-4 col-xs-12">
                                                            <div class="boxed boxed--lg bg--white text-center feature">
                                                                <div class="modal-close modal-close-cross" id="closesign">Close</div>
                                                                <h4>TRAINING REGISTRATION PAGE</h4>
                                                                <hr/>
                                                                <div class="feature__body">
                                                                    <form class="form-horizontal" method="POST" action="{{ url('/register') }}">
                                                                        {{ csrf_field() }}
                                                                     
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <input type="text" id="formtext" name="name" placeholder="Name" />
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <input type="text" id="formtext" name="email" placeholder="Email" />
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <input type="text" id="formtext" name="phoneNo" placeholder="Phone No" />
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <input type="text" id="formtext" name="address" placeholder="Address" />
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-xs-12">
                                                                                <div class="input-select" id="formtext" name="trainingType">
                                                                                    <select name="trainingType" id="redirect" value="trainingType">
                                                                                        <option selected="trainingType" name="trainingType" value="trainingType">Training Type</option>
                                                                                        <option>Data Science</option>
                                                                                         <option>BlockChain</option>
                                                                                          <option>UI/UX</option>
                                                                                         <option value="/welcome">Other options</option></a>
                                                                                          
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                            <div class="col-sm-4 col-md-4 col-xs-4">
                                                                                <button class="btn btn--primary" id="register_button"  type="submit">Check-In</button>

                                                                            </div>

                                                                           

                                                                            <div class="col-sm-4 col-md-4 col-xs-4">
                                                                                <a class="btn btn--primary" id="homepage_button" href="/trainingcheckout">
                                                                                    <span class="btn__text" >
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
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <!--end of modal instance-->
                            </div>
                        
                            <div class="col-md-4 col-sm-4 col-xs-4">
                               
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4">
                                
                            </div>
                        </div>

                        <!--end of row-->
                        <BR/><BR/>

                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6">
                             
                                 <div class="modal-instance block">
                                    <a class="btn modal-trigger" href="#" id="homepage_button">
                                        <span class="btn__text" id="btn__text">
                                            Co-Working Space
                                        </span>
                                    </a>
                                    <div class="modal-container">
                                        <div class="modal-content">
                                            <section class="unpad ">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-offset-3 col-sm-offset-3 col-xs-6">
                                                            <div class="boxed boxed--lg bg--white text-center feature">
                                                                <div class="modal-close modal-close-cross" id="closesign">Close</div>
                                                                <h4>CO-WORKING SPACE</h4>
                                                                <hr>
                                                                <div class="feature__body">
                                                                    <form>
                                                                        <div class="row">
                                                                            
                                                                            <div class="col-sm-6 col-md-6 col-xs-1">
                                                                                
                                                                                <a class="btn btn--primary" id="homepage_button" href="/NewWorkSpace">
                                                                                    <span class="btn__text">
                                                                                        New WorkSpace
                                                                                    </span>
                                                                                </a>
                                                                                
                                                                            </div>

                                                                             

                                                                            <div class="col-sm-6 col-md-6 col-xs-6">
                                                                                
                                                                                  <a class="btn btn--primary" id="homepage_button" href="/trainingcheckout">
                                                                                    <span class="btn__text">
                                                                                        Existing Worker
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
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <!--end of modal instance-->
                            </div>
                        
                            <div class="col-md-4 col-sm-4 col-xs-4">
                               
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4">
                                
                            </div>
                        </div>

                        <!--end of row-->
                        <BR/><BR/>

                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                 <div class="modal-instance block">
                                    <a class="btn modal-trigger" href="#" id="homepage_button">
                                        <span class="btn__text" id="btn__text">
                                        On-Visit
                                        </span>
                                    </a>
                                    <div class="modal-container">
                                        <div class="modal-content">
                                            <section class="unpad ">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-4 col-md-offset-4 col-sm-offset-4 col-xs-12">
                                                            <div class="boxed boxed--lg bg--white text-center feature">
                                                                <div class="modal-close modal-close-cross" id="closesign">Close</div>
                                                                <h4>ON-VISIT REGISTRATION PAGE</h4>

                                                                    <hr>
                                                                <div class="feature__body">
                                                                     <form class="form-horizontal" method="POST" action="{{ url('/register2') }}">
                                                                        {{ csrf_field() }}
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <input type="text" id="formtext" name="visitName" placeholder="Enter The Name To Visit" />
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <input type="text" id="formtext" name="name" placeholder="Enter Your Name" />
                                                                            </div>
                                                                            
                                                                           
                                                                            <div class="col-sm-4 col-md-4 col-xs-4">
                                                                                <button class="btn btn--primary" id="register_button"  type="submit">Check-in</button>

                                                                            </div>
                                                                            <div class="col-sm-4 col-md-4 col-xs-4">
                                                                                <a class="btn btn--primary" id="homepage_button" href="/onVisitCheckout">
                                                                                    <span class="btn__text">
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
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <!--end of modal instance-->
                                
                            </div>
                        
                            <div class="col-md-4 col-sm-4 col-xs-4">
                               
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4">
                                
                            </div>
                        </div>

                        
<script>
    document.getElementById("redirect").onchange = function() {
        if (this.selectedIndex!==0) {
            window.location.href = this.value;
        }        
    };
</script>
                                            <center> <img src="{{asset('externalFolder')}}/img/coven3.png" style="width: 50px; margin-top:-930px;"></center>

    @endsection
      