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

.form-box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 100vh;
}

.form-box h4{
    font-weight: bold;
    color: #fff;
}

.form-box .form-input{
    position: relative;
}

.form-box .form-input input{
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
    border:none;
    border-radius: 5px;
    outline: none;
    background: white;
    padding-left: 45px;
}

.form-box .form-input span{
    position: absolute;
    top: 8px;
    padding-left: 20px;
    color: #777;
}

.form-box .form-input input::placeholder{
    padding-left: 0px;
}

.form-box .form-input input:focus,
.form-box .form-input input:valid{
    border-bottom: 2px solid #48403d;
}

.form-box input[type="checkbox"]:not(:checked) + label:before{
    background: transparent;
    border: 2px solid #fff;
    width: 15px;
    height: 15px;
}

.form-box .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before{
    background-color: #48403d;
    border: 0px;
}

.forget-link, .register-link, .login-link{
    color: #fff;
    font-weight: bold;
}

.forget-link:hover, .register-link:hover, .login-link:hover{
    color: #292525;
}

.form-box button[type="submit"]{
    border: none;
    cursor: pointer;
    width: 150px;
    height: 40px;
    border-right: 5px;
    background-color: #fff;
    color: #000;
    font-weight: bold;
    transition: 0.5s;
}

.form-box button[type="submit"]:hover{
    box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
    -webkit-box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
    -moz-box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
}

.form-box .btn-social{
    color: #fff;
    border: 0px;
    display: inline-block;
    margin: 0px;
    margin-right: 10px;
    font-weight: bold;
    margin-bottom: 10px;
}

.form-box .btn-facebook{
    background: #4866a8;
}

.form-box .btn-google{
    background: #da3f34;
}

.form-box .btn-twitter{
    background: #33ccff;
}

.form-box .btn-facebook:hover{
    background: #3d5785;
    color: #fff;
}

.form-box .btn-google:hover{
    background: #bf3b31;
    color: #fff;
}

.form-box .btn-twitter:hover{
    background: #2eb7e5;
    color: #fff;
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
					
					<div class="heading mb-4">
						<h4>Book a Ride</h4>
					</div>
					<form>
						<div class="form-input">
							<!--<span><i class="fas fa-search-location fa-spin"></i></span>-->
							<input type="text" placeholder="pick up location" required>
						</div>
						<div class="form-input">
							<!--<span><i class="fa fa-lock"></i></span>-->
							<input type="text" placeholder="destination" required>
						</div>
						
						<div class="text-left mb-3">
							<button type="submit" class="btn">Book Ride</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>