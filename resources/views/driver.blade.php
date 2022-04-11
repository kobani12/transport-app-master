<!DOCTYPE html>
<html>
<head>
	<title>transport-app</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<style>
    .image-container{
    background: url('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.6795178309103!2d6.9921335143137675!3d4.8249822419119575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce64d42d9101%3A0xbe44c3eee02c23e6!2sG.r.a%20Phase%202!5e0!3m2!1sen!2sng!4v1648306051619!5m2!1sen!2sng" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>') center no-repeat;
    background-size: cover;
    height: 100vh;
}

.form-container{
    background-color: green;
    display: flex;
    justify-content: center;
}
.fetched-data{
    margin-top: 100px;
}

</style>

<body>
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 d-none d-md-block image-container">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.6795178309103!2d6.9921335143137675!3d4.8249822419119575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce64d42d9101%3A0xbe44c3eee02c23e6!2sG.r.a%20Phase%202!5e0!3m2!1sen!2sng!4v1648306051619!5m2!1sen!2sng" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><p>
            </div>
			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class=" fetched-data">
					<div class="heading mb-4">
						<h4>driver</h4>
					</div>
                    <div class="table-responsive">
                <table class="table table-hover" style="background: transparent !important;">
                <thead class="thead">
                    <tr>
                    <th scope="col">driver_id</th>
                    <th scope="col">user_id</th>
                    <th scope="col">cars_id</th>
                    <th scope="col">location</th>
                    </tr>
                </thead>

               <tbody>
                @foreach($drivers as $driver)
                <tr>
                    <td style="color:white">{{$driver->id}}</td>
                    <td style="color:white">{{$driver->user_id}}</td>
                    <td style="color:white">{{$driver->car_id}}</td>
                    <td style="color:white">{{$driver->location}}</td>
                </tr>
            @endforeach
				</div>
</div>
			</div>
		</div>
	</div>
</body>
</html> 