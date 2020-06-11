<head>
	<title>Client Details Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
	<div class="container">
        <div class="jumbotron">
            <h2 class='text-center'>Welcome to the We Switched Family!</h2>
            <h4 class='text-center'><em>Please sign up to claim your space and personalization</em></h4>
        </div>
        <form action="{{url('/home')}}" method="POST">
        {{csrf_field()}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Eg. Harshil Doshi" required="required" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="number">Contact Number</label>
                    <input type="text" class="form-control" id="number" aria-describedby="phoneHelpBlock" placeholder="Eg. 9865428421" required="required" maxlength="10" name="number">
                    <small id="phoneHelpBlock" class="form-text text-muted">Your contact number must be a valid one!</small>
                </div>	
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Eg. harshil654@gmail.com" name="email">
            </div>
            <div class="text-center">
                <a href="home.blade.php"><button class="btn btn-primary" style="margin-bottom:30px;" type="submit">Sign Up</button></a>
            </div>
        </form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>