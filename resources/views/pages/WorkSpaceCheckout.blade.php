  @extends('layouts.app')
    @section('content') 
                                <div class="container pos-vertical-center" style="position:absolute;">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-xs-4" style="margin-left:-200px; margin-top:-270px;"> 
                                                <a href="/" style="color:white; font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                        </div>
                                        
                                        <div class="col-sm-8 col-md-8 col-xs-8">
                                        
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="container" style="margin-top:-280px;" 
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-4 col-md-4">
                                                    <div class="navbar-header"> 
                                                        <br>
                                                    </div> 
                                                    <div> 
                                                        <form class="navbar-form navbar-left" role="search"> 
                                                        
                                                            <div class="form-group"> 
                                                                <input type="text" class="form-control" id="spacesearch" name="spacesearch" placeholder="Filter by surname or workSpace" style="width:250px;"> 
                                                            </div> 
                                                            
                                                        </form>  
                                                    </div>
                                        </div>
                                    </div>
                                </div>    

                                <div class="container" style="position:absolute; margin-top:-200px;">
                                    <div class="row">
                                        <div class="col-sm-11 col-xs-11 col-md-11">     
                                                    <table class="table table-bordered" id="tablebackground"> 
                                                        <thead> 
                                                            <tr> 
                                                                <th>Surname</th> 
                                                                <th>Firstname</th> 
                                                                <th>Othernames</th> 
                                                                <th>Email</th>
                                                                <th>Phone No</th> 
                                                                <th>Sex</th> 
                                                                <th>Work Space</th> 
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










        