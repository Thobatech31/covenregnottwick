 @extends('layouts.app')
    @section('content') 
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-8 col-md-8">
                            <table class="table table-bordered" style="background-color:#0EBFE9"> 
                                <thead> 
                                    <tr> 
                                        <th>Id</th>
                                         <th>Name</th> 
                                         <th>Email</th> 
                                         <th>Phone_No</th> 
                                         <th>Address</th> 
                                         <th>TrainingType</th>
                                    </tr>
                                        @foreach($trainingtables as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->phoneNo }}</td>
                                            <td>{{ $row->address }}</td>
                                            <td>{{ $row->trainingType }}</td>
                                        </tr>
                                        @endforeach
                                </thead> 
                                
                                <tbody> 
                                   
                                
                                </tbody> 
                            </table>
                </div>
            </div>
        </div>

     @endsection