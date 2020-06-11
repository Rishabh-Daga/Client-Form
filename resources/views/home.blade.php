<!DOCTYPE html>
<html>
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
	<form action="{{url('/final/'.$id)}}" method="POST">
	{{ csrf_field() }}
        <h5 class='text-center'><em>Thanks for coming onboard.</em></h5>
  		<p class='text-center'><em>Please check your requirements from the options so we know exactly what you are looking for. This is only to make your experience a pleasant one.</em></p>

  		<ul>
  		<li>
  			<div class="form-group">
	  			<strong>We know you are here to create something, which of these suits your requirement?</strong>
	  			<div class="form-check">
			  		<input class="form-check-input" type="radio" name="web/app" id="website" onclick="typeCheck()" value="website" checked>
			  		<label class="form-check-label" for="website">Website</label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="web/app" id="app" onclick="typeCheck()" value="app">
			  		<label class="form-check-label" for="app">App</label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="web/app" id="both" onclick="typeCheck()" value="both">
			  		<label class="form-check-label" for="both">Both Website and App</label>
				</div>
			</div>
		</li>
		<li>
			<div class="form-group">
				<strong>May we know the name of your business, please?</strong>
				<br>	
				<small><em>(It’s cool if you don’t have one, we’ll help you with that!)</em></small>
				<input type="text" class="form-control" name="business_name" placeholder='Eg. We Switched Studio'>
			</div>
		</li>
		<li>
			<div class="form-group">
				<strong>That’s a great name! What is the product/service you will be dealing with?</strong>
				<input type="text" class="form-control" name="product/service" placeholder='Idhar ka placeholder bataao kya dalu!'>
			</div>
		</li>




		<!-- If user clicks on Website button -->
		<div id="ifWebsite" style="display:block">
		<li>
			<div class="form-group">
				<strong>What type of a website is this going to be?</strong>
	  			<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Business">
			  		<label class="form-check-label">Business Website<small> (Enables potential customers to either find you through a Google search or learn more about you regardless of your other marketing methods)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="E-commerce">
			  		<label class="form-check-label">E-commerce<small> (Eg - Stalkbuylove, Bewakoof.com)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Marketplace">
			  		<label class="form-check-label">Marketplace <small>(Eg - Swiggy, Amazon)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Portfolio">
			  		<label class="form-check-label">Portfolio Website <small>(Provides a convenient way for potential clients to view your work while also allowing you to expand on your skills and services)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Social Media">
			  		<label class="form-check-label">Social Media <small>(Eg - Instagram)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Educational">
			  		<label class="form-check-label" >Educational <small>(Eg - Coursera, Udemy)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Blog">
			  		<label class="form-check-label">Blog <small>(Eg - medium.com)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="OTT/Entertainment">
			  		<label class="form-check-label">OTT/Entertainment <small>(Eg - Netflix) and chill :P</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Other" id="other" onclick="showText()">
			  		<label class="form-check-label">Other</label>
			  		<small>(If Other, please specify)</small>
				</div>
				<div id="ifOther" style="display:none;">
					<input type="text" class="form-control" name="anything_else" placeholder="So, what is your domain?">
				</div>
			</div>	
		</li>
		<li>
			<div class="form-group">
				<strong>What differentiates you from your competitor, any additional features?</strong>
				<br>	
				<small><em>Eg. In E-commerce websites, any feature apart from Search and Filter functionality, Products display view, Product detail view, Payment Gateway, Shipping details and Wishlist</em></small>
				<input type="text" class="form-control" name="additional_features" placeholder='Keep it short and sweet!'>
			</div>
		</li>
		<li>
			<div class="form-group">
				<strong>Any reference websites that you want us to look at?</strong>
				<textarea name="reference_websites" class='form-control' placeholder="Eg. https://www.netflix.com/in/, https://www.flipkart.com/"></textarea>
			</div>	
		</li>
		</div>


		<!-- If user clicks on App Button-->
		<div id="ifApp" style="display:none;">
		<li>
			<div class="form-group">
				<strong>What type of an app is this going to be?</strong>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="E-commerce">
			  		<label class="form-check-label">E-commerce <small>(Eg - Stalkbuylove,Bewakoof)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Marketplace">
			  		<label class="form-check-label">Marketplace <small>(Eg - Swiggy,Amazon)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Social Media">
			  		<label class="form-check-label">Social Media <small>(Eg - Instagram)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Educational">
			  		<label class="form-check-label">Educational <small>(Eg - Coursera, Udemy)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Blog">
			  		<label class="form-check-label">Blog <small>(Eg - TTT)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="OTT/Entertainment">
			  		<label class="form-check-label">OTT/Entertainment <small>(Eg - Netflix) and chill :P</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="OTT/Entertainment">
			  		<label class="form-check-label">News/Information Outlets <small>(Eg - Google News, Inshorts)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Other" id="other" onclick="showText()">
			  		<label class="form-check-label">Other</label>
			  		<small>(If Other, please specify)</small>
				</div>
				<div id="ifOther" style="display:none;">
					<input type="text" class="form-control" name="anything_else" placeholder="So, what is your domain?">
				</div>
			</div>	
		</li>
		<li>
			<div class="form-group">
				<strong>What differentiates you from your competitor, any additional features?</strong>
				<br>	
				<small><em>Eg. In Marketplace apps, any feature apart from Search and Filter functionality, Products display view, Product detail view, Payment Gateway, Shipping details and Wishlist</em></small>
				<input type="text" class="form-control" name="additional_features" placeholder='Keep it short and sweet!'>
			</div>
		</li>
		<li>
			<div class="form-group">
				<strong>Any reference apps that you want us to look at?</strong>
				<textarea name="reference_websites" class='form-control' placeholder="Netflix, Flipkart"></textarea>
			</div>	
		</li>
		</div>




		<!-- If user clicks on Website/App Button-->
		<div id="ifBoth" style="display:none;">
		<li>
			<div class="form-group">
				<strong>What type of a website/app is this going to be?</strong>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="E-commerce">
			  		<label class="form-check-label" for="app">E-commerce <small>(Eg - Stalkbuylove,Bewakoof)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Marketplace">
			  		<label class="form-check-label" for="both">Marketplace <small>(Eg - Swiggy,Amazon)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Social Media">
			  		<label class="form-check-label" for="both">Social Media <small>(Eg - Instagram)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Educational">
			  		<label class="form-check-label" for="both">Educational <small>(Eg - Coursera, Udemy)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Blog">
			  		<label class="form-check-label" for="both">Blog <small>(Eg - TTT)</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="OTT/Entertainment">
			  		<label class="form-check-label" for="both">OTT/Entertainment <small>(Eg - Netflix) and chill :P</small></label>
				</div>
				<div class="form-check">
			  		<input class="form-check-input" type="radio" name="type" value="Other" id="other" onclick="showText()">
			  		<label class="form-check-label">Other</label>
			  		<small>(If Other, please specify)</small>
				</div>
				<div id="ifOther" style="display:none;">
					<input type="text" class="form-control" name="anything_else" placeholder="So, what is your domain?">
				</div>
			</div>	
		</li>
		<li>
			<div class="form-group">
				<strong>What differentiates you from your competitor, any additional features?</strong>
				<br>	
				<small><em>Eg. In Marketplace apps/websites, any feature apart from Search and Filter functionality, Products display view, Product detail view, Payment Gateway, Shipping details and Wishlist</em></small>
				<input type="text" class="form-control" name="additional_features" placeholder='Keep it short and sweet!'>
			</div>
		</li>
		<li>
			<div class="form-group">
				<strong>Any reference apps/websites that you want us to look at?</strong>
				<br>	
				<small><em>For websites, provide URLs and for Apps, just name is enough!</em></small>
				<textarea name="reference_websites" class='form-control'></textarea> 
			</div>	
		</li>
		</div>


		</ul>
		<div class="text-center">
  			<button class="btn btn-primary" style="margin-bottom:30px;" type="submit">Confirm</button>
  		</div>
	</form>
	</div>


	<script type="text/javascript">
		function typeCheck() {
    		if (document.getElementById('website').checked) {
        		document.getElementById('ifWebsite').style.display = 'block';
        		document.getElementById('ifApp').style.display = 'none';
        		document.getElementById('ifBoth').style.display= 'none';
    		}else if(document.getElementById('app').checked){
    			document.getElementById('ifWebsite').style.display = 'none';
        		document.getElementById('ifApp').style.display = 'block';
        		document.getElementById('ifBoth').style.display = 'none';
    		}else{
    			document.getElementById('ifWebsite').style.display = 'none';
        		document.getElementById('ifApp').style.display = 'none';
        		document.getElementById('ifBoth').style.display = 'block';
    		}
		}

		function showText(){
			if (document.getElementById('other').checked){
				document.getElementById('ifOther').style.display = 'block';
			}else
				document.getElementById('ifOther').style.display = 'none';
		}

	</script>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>