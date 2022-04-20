@extends('layouts.home')
@section('content')
    

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Cars</h3>
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
                <h3 class="box-title">Cars</h3>
                

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">color</th>
                                <th class="border-top-0">manufacturer</th>
                                <th class="border-top-0">model</th>
                                <th class="border-top-0">year</th>
                                <th class="border-top-0">Plate number</th>
                            </tr>
                        </thead>
           <tbody>

                    @foreach($cars as $car)

                            <tr>
                                <td class="txt-oflo">{{$car->id}}</td>
                                <td class="txt-oflo">{{$car->driver_id}}</td>
                                <td class="txt-oflo">{{$car->color}}</td>
                                <td class="txt-oflo">{{$car->manufacturer}}</td>
                                <td class="txt-oflo">{{$car->year}}</td>
                                <td class="txt-oflo">{{$car->plate_number}}</td>
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