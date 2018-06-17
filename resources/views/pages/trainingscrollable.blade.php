


        <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>{{config('app.name', 'CovenHub')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
                <link href="{{asset('externalFolder')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

        <link href="{{asset('externalFolder')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
                <link href="{{asset('externalFolder')}}/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/custom.css" rel="stylesheet" type="text/css" media="all" />
     
        <script src="{{asset('externalFolder')}}/js/jquery.min.js"></script>
          
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
    </head>
    <body class=" ">
        <a id="start"></a>

            <div class="container pos-vertical-center">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-4" style=" margin-top:50px; "> 
                                             <a href="/" style="color:white; font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                    </div>
                                    
                                      <div class="col-sm-8 col-md-8 col-xs-8">
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                            <div class="col-sm-3 col-md-3 col-xs-3">
                                                    

                                                    </div>
                                    <div class="col-sm-3 col-xs-3 col-md-3">
                                                <div class="navbar-header"> 
                                                    <br>
                                                </div> 
                                                <div> 
                                                    <form class="navbar-form navbar-left" role="search" > 
                                                    
                                                        <div class="form-group"> 
                                                            <input type="text" class="form-control" id="search" name="search" placeholder="search name or trainingType" style="width:240px;"> 
                                                        </div> 
                                                        
                                                    </form>  
                                                </div>
                                    </div>
                                            
                                    <div class="col-sm-3 col-xs-3 col-md-3">
                                                <div class="navbar-header"> 
                                                    <br>
                                                </div> 
                                                <div> 
                                                    <form class="navbar-form navbar-left" role="search" > 
                                                        
                                                        <div class="form-group"> 
                                                            <input type="text" class="form-control" id="search" name="search" placeholder="date: yy-mm-dd (2018-05-23)" style="width:240px;"> 
                                                        </div> 
                                                        
                                                    </form>  
                                                </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-1 col-xs-1 col-md-1">
                                    </div>
                                    <div class="col-sm-10 col-xs-10 col-md-10">
                                                    
                                                <table class="table table-bordered" id="tablebackground" > 
                                                    <thead> 
                                                        <tr> 
                                                            <th>Name</th> 
                                                            <th>Email</th> 
                                                            <th>Phone number</th> 
                                                            <th>Address</th> 
                                                            <th>TrainingType</th>
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
            


                            <script>
                                $(document).ready(function(){

                                    //fetch_customer_data();

                                    function fetch_customer_data(query){
                                        //alert(query)
                                    $.ajax({
                                            url:"{{route('checkouttraining')}}",
                                            method:'GET',
                                            data:{query:query},
                                            dataType:'json',
                                            success:function(data){
                                            //alert('got here');
                                                $('tbody').html(data.table_data);
                                                $('#total_records').text(data.total_data);
                                            }
                                        }); 
                                    }

                                    $(document).on('keyup', '#search', function(){
                                    // alert(5);
                                        var query = $(this).val();
                                    // alert(query);
                                        fetch_customer_data(query);
                                    });
                                });
                            </script>

         <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
               

        <script src="{{asset('externalFolder')}}/js/jquery-3.1.1.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/jquery.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/bootstrap.min.js"></script>
          <script src="{{asset('externalFolder')}}/js/jquery.dataTables.min.js"></script>
              <script src="{{asset('externalFolder')}}/js/dataTables.bootstrap.min.js"></script>
              <script src="{{asset('externalFolder')}}/js/dataTables.bootstrap4.min.js"></script>

        <script src="{{asset('externalFolder')}}/js/flickity.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/easypiechart.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/parallax.js"></script>
        <script src="{{asset('externalFolder')}}/js/typed.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/datepicker.js"></script>
        <script src="{{asset('externalFolder')}}/js/isotope.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/ytplayer.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/lightbox.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/granim.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/jquery.steps.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/countdown.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/twitterfetcher.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/spectragram.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/smooth-scroll.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/scripts.js"></script>
    </body>
</html>

