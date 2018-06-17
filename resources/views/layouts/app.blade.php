<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>{{config('app.name', 'CovenHub')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
        <link href="{{asset('externalFolder')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <script src="{{asset('externalFolder')}}/js/jquery-3.1.1.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">

        <style type="text/css">
            .logo{
                height: 90px;
            }

            h4{
                font-family: 'Goudy Bookletter 1911', serif;
                 font-weight:100; 
                font-size:18px; 
                font-style:normal;
            }

            #homepage_button{
                background:#0EBFE9;
                border-radius:8px;
                font-family: Roboto;
                cursor:pointer;
                transition: all 0.5s;
                box-shadow:3px 3px;
                color:white;
                
              font-size:18px;
            }

            #homepage_button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                
                }

                #homepage_button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
                }

                #homepage_button:hover span {
                padding-right: 25px;
                
                }
             #homepage_button:hover{
                padding-right: 25px;
                background:linear-gradient(45deg,#0EBFE9 50%,black 50%);

                }

                #homepage_button:hover span:after {
                opacity: 1;
                right: 0;
                
                }
            #btn__text{
                font-weight:100; 
                font-size:20px; 
                font-style:normal;
                font-family: 'Goudy Bookletter 1911', serif;
            }



            #register_button{
                width:100px; 
                font-size:16px;
            }

            #register_button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                
                }

                #register_button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
                }

                #register_button:hover span {
                padding-right: 25px;
                
                }
             #register_button:hover{
                padding-right: 25px;
                background:linear-gradient(45deg,#0EBFE9 50%,red 50%);

                }

                #register_button:hover span:after {
                opacity: 1;
                right: 0;
                
                }

                #closesign{
                    color:blue; 
                    font-weight:bold;
                    padding-left:210px;
                }

                #tablecolor{
                    color:white; 
                    
                    font-family: 'Roboto';
                }

                #tablebackground{
                    background-color:#0EBFE9;
                }

                #trainingtableDataText{
                    font-family: 'Goudy Bookletter 1911', serif;
                    font-size:18px;
                }

                #formtext{
                    font-family: 'Goudy Bookletter 1911', serif;
                    font-size:16px;
                    font-weight:bold;
                  
                }
            
        </style>
    </head>
    <body class=" ">
        <a id="start"></a>
        
            <div class="main-container">
                    
                        <section class="imagebg videobg height-60 text-center" data-overlay="2" style="height:740px; margin-top:-70px;">
                            
                            <video autoplay loop muted>
                                
                                <source src="{{asset('externalFolder')}}/video/Drake.mp4" type="video/mp4">
                           
                            </video>
                                
                                
                            <div class="background-image-holder">
                                <img alt="background" src="{{asset('externalFolder')}}/img/hero-1.jpg" />
                            </div>

                           
                            <div class="container pos-vertical-center">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-xs-12">
                                
                                        
                                          @yield('content')
                                    </div>
                                </div>
                            </div>
                        </section>
            </div>
                    

         <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="{{asset('externalFolder')}}/js/jquery-3.1.1.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/jquery.min.js"></script>
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



<script>
    $(document).ready(function(){

        //fetch_customer_data();

        function fetch_customer(query){
            //alert(query)
           $.ajax({
                url:"{{route('checkoutvisit')}}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data){
                   //alert('got here');
                    $('tbody').html(data.table_data);
                    $('#total_recordvisit').text(data.total_data);
                }
            }); 
        }

        $(document).on('keyup', '#searchvisit', function(){
           // alert(5);
            var query = $(this).val();
           // alert(query);
            fetch_customer(query);
        });
    });
</script>


<script>
    $(document).ready(function(){

        //fetch_customer_data();

        function fetch_space_checkout(query){
            //alert(query)
           $.ajax({
                url:"{{route('WorkSpacecheckout')}}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data){
                   //alert('got here');
                    $('tbody').html(data.table_data);
                    $('#Total_records_found').text(data.total_data);
                }
            }); 
        }

        $(document).on('keyup', '#spacesearch', function(){
           // alert(5);
            var query = $(this).val();
           // alert(query);
            fetch_space_checkout(query);
        });
    });
</script>


