  @extends('layouts.app')
    @section('content') 
        
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-8 col-md-8">
                            <div class="navbar-header"> 
                            <a class="navbar-brand" href="#">TutorialsPoint</a> 
                            </div> 
                            <div> 
                                
                                <form class="navbar-form navbar-left" role="search"> 
                                    <div class="form-group"> 
                                        <input type="text" class="form-control" name="search" placeholder="Search Name"> 
                                    </div> 
                                    <button  onclick="click()" type="submit" class="btn btn-default">Submit Button</button>
                                </form>  
                            </div>
                        
                            <table class="table table-bordered" id="tablebackground"> 
                                     <center><h3>Total Data: <span id="total_records"></span></h3></center>
                                <thead> 
                                    <tr> 
                                         <th>Name</th> 
                                         <th>Email</th> 
                                         <th>Phone_No</th> 
                                         <th>Address</th> 
                                         <th>TrainingType</th>
                                    </tr>
                                </thead> 
                                
                                <tbody> 
                                   
                                
                                </tbody> 
                            </table>
                </div>
            </div>
        </div>
        
            
           
        @endsection