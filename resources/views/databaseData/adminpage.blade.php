@extends('layouts.app')
    @section('content')

                       <div class="container pos-vertical-center">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-4" style="margin-left:-0px; margin-top:-220px;"> 
                                             <a href="/" style="color:white; font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                    </div>
                                    
                                      <div class="col-sm-8 col-md-8 col-xs-8">

                                    </div>
                                </div>
                            </div>
                                                                             <center> <img src="{{asset('externalFolder')}}/img/coven3.png" style="width: 50px; margin-top:-60px; "></center>

                            
                        <div class="container">
                             <div class="row">
                                <div class="col-md-6 col-sm-7 col-xs-7">
                                    <div class="typed-headline">
                                        <!--THE SECTION FOR THE TRANSITION(ANIMATED TEXT)-->
                                        <span class="h2 inline-block" style="margin-left:-250px; font-family:Roboto; font-weight:100; font-style:normal;">Welcome You To</span><br/>
                                        <span class="h2 typed-text typed-text--cursor color--secondary" style=" margin-left:-70px; font-family:Roboto; font-weight:100; font-style:normal;" data-typed-strings="Curator University Admin Portal,"></span>
                                    </div>
                                </div>

                                 <div class="col-md-3 col-sm-3 col-xs-3">
                                   
                                                                  
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-3">
                                </div>
                            </div>
                                 
                        </div>
                      
                      

                           <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                             
                                 <a class="btn btn--primary" id="homepage_button" href="/trainingtabledata">
                                    <span class="btn__text" id="btn__text">
                                        Training Database
                                    </span>
                                </a>
                            
                                <!--end of modal instance-->
                            </div>
                        
                            <div class="col-md-3 col-sm-4 col-xs-4">
                               
                            </div>

                            <div class="col-md-3 col-sm-4 col-xs-4">
                                
                            </div>
                        </div>

                        <!--end of row-->
                        <BR/><BR/>

                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                             
                                  <a class="btn btn--primary" id="homepage_button" href="/newworkspacedata">
                                    <span class="btn__text" id="btn__text">
                                        WorkSpace Database
                                    </span>
                                </a>
                            </div>
                        
                            <div class="col-md-3 col-sm-4 col-xs-4">
                               
                            </div>

                            <div class="col-md-3 col-sm-4 col-xs-4">
                                
                            </div>
                        </div>

                        <!--end of row-->
                        <BR/><BR/>

                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                 <a class="btn btn--primary" id="homepage_button" href="/onvisittabledata">
                                    <span class="btn__text" id="btn__text">
                                        On-Visit Database
                                    </span>
                                </a>
                                
                            </div>
                        
                            <div class="col-md-3 col-sm-4 col-xs-4">
                               
                            </div>

                            <div class="col-md-3 col-sm-4 col-xs-4">
                                
                            </div>
                        </div>

                        

                          <div class="container pos-vertical-center">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-4" style="margin-left:-200px; margin-top:-500px;"> 
                                             <a href="/" style="color:white; font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                    </div>
                                    
                                      <div class="col-sm-8 col-md-8 col-xs-8">
                                    
                                    </div>
                                </div>
                            </div>



    @endsection
      