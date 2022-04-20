@extends('layouts.home')
@section('content')
    

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Drivers</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Drivers</h3>
                

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
            
                            <tr>
                                <th class="border-top-0">driver_id</th>
                                <th class="border-top-0">user_id</th>
                                <th class="border-top-0">cars_id</th>
                                <th class="border-top-0">location</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($drivers as $driver)
                        
                            <tr>
                                <td class="txt-oflo">{{$driver->id}}</td>
                                <td class="txt-oflo">{{$driver->user_id}}</td>
                                <td class="txt-oflo">{{$driver->car_id}}</td>
                                <td class="txt-oflo">{{$driver->location}}</td>
                            </tr>
                        
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  
</div>
@endsection
















