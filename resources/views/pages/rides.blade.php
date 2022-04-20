@extends('layouts.home')
@section('content')
    

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">bookings</h3>
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
                <h3 class="box-title">Rides</h3>
                

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
            
                            <tr>
                                <th class="border-top-0">ride_id</th>
                                <th class="border-top-0">driver_id</th>
                                <th class="border-top-0">cars_id</th>
                                <th class="border-top-0">driver_id</th>
                            </tr>
                        </thead>
                        
                        @foreach($rides as $ride)
                        
                            <tr>
                                <td class="txt-oflo">{{$ride->id}}</td>
                                <td class="txt-oflo">{{$ride->car_id}}</td>
                                <td class="txt-oflo">{{$ride->driver_id}}</td>
                                <td class="txt-oflo">{{$ride->car_id}}</td>
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
