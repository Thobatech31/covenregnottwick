  @extends('layouts.app')
    @section('content') 
        

                            <div class="container pos-vertical-center" style="position:absolute;">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-4" style="margin-left:-200px; margin-top:-50px;"> 
                                             <a href="/" style="color:white;  font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                    </div>
                                    
                                      <div class="col-sm-8 col-md-8 col-xs-8">
                                    
                                    </div>
                                </div>
                            </div>


                            <div class="container" style="margin-top:-280px;">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-4 col-md-4">
                                                <div class="navbar-header"> 
                                                    <br>
                                                </div> 
                                                <div> 
                                                    <form class="navbar-form navbar-left" role="search"> 
                                                        <div class="form-group"> 
                                                            <input type="text" class="form-control" id="searchvisit" name="searchvisit" placeholder="Filter by name or visit-name" style="width:250px;"> 
                                                        </div> 
                                                        
                                                    </form>  
                                                </div>
                                    </div>
                                </div>
                            </div>
                  
                            <div class="container" style="position:absolute;">
                                <div class="row">
                                    <div class="col-sm-10 col-xs-10 col-md-10">
                                                <table class="table table-bordered" id="tablebackground"> 
                                                    <thead> 
                                                        <tr> 
                                                            <th>Visit-Name</th> 
                                                            <th>Name</th> 
                                                            <th>Created_at</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead> 
                                                    
                                                    <tbody> 
                                                    
                                                    
                                                    </tbody> 
                                                </table>
                                    

                                </div> 
                                </div>
                            </div>      
        @endsection