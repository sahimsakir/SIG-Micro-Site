<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('assets/style.css')}}"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" media="all">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
	<title>Home | SIG Sample Pack</title>
</head>
<body>
<div class="menu-bg">
		<div class="main-container">
			<div class="alert-box">
				@if(Session::get('success'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>{{ Session::get('success') }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						
						</button>
				@endif
				</div>

			</div>
			<div class="menu-circle">
				<div class="main-circle">
					<div class="circle">
						<div class="lifecycle">
						<img src="assets/images/line.png" alt="" /> </div>
	              		<img src="assets/images/sample.png" alt="" />
	              		<a id="one" href="#" onclick="showContent1()">
	              			<img src="assets/images/forest-based-materials.png" alt=""  />
	                		<p>FOREST-BASED <br /> MATERIALS</p>
	              		</a>

	              		<a id="two" href="#" onclick="showContent2()">
		                    <img src="assets/images/fsctm-board.png" alt="" />
		                    <p>FSC<sup>TM</sup> <br /> LABEL</p>
		                </a>
		                <a id="three" href="#" onclick="showContent3()">
		                    <img src="assets/images/aluminum-free-packaging.png" alt="" />
		                    <p>Aluminum Free Packaging</p>
		                </a>
		                <a id="four" href="#" onclick="showContent4()">
		                    <img src="assets/images/co2-reduction.png" alt="" />
		                    <p>CO<sub>2</sub> <br /> REDUCTION</p>
		                </a>
		                <a id="five" href="#" onclick="showContent5()">
		                    <img src="assets/images/fully-recyclable.png" alt="" />
		                    <p>FULLY <br /> RECYCLABLE</p>
		                </a>
		                <div class="button">
		                	<button href="#" data-bs-toggle="modal" data-bs-target="#regModal">Get a Sample!</button>
						</div>
						
				</div>
			</div>
			<div class="details">
				<div class="one">
		  			<h1 class="header animated slideInUp" style="animation-delay: 0.5;">Forest-Based Materials</h1>
		  			<h4 class="section-header animated slideInUp" style="animation-delay: 0.6;">Why is it sustainable to shift to forest-based materials?</h4>
		  			<p class="paragraph animated slideInUp" style="animation-delay: 0.7;">Conventional plastics are made from non-renewable sources. To not exploit these sources SIG has launched its <b>SIG</b>NATURE portfolio. <b>SIG</b>NATURE 100 is designed for the highest renewable share of 100% linked to mass-balance. All plastics used, including the closure, to manufacture the pack are linked to renewable forest-based materials.  The main material of the <b>SIG</b>NATURE 100 is carton-board.  The paperboard used comes from socially and environmentally responsible forestry, which complies with the Forest Stewardship Council<sup>TM</sup> (FSC<sup>TM</sup>) standards. <br/> The FSC<sup>TM</sup> label informs consumers about a responsible sourcing of wood material during the manufacturing process of a product.</p>
		  		</div>
		  		<div class="two">
		  			<h1 class="header animated slideInUp" style="animation-delay: 0.5;">FSC<sup>TM</sup> LABEL</h1>
		  			<h4 class="section-header animated slideInUp" style="animation-delay: 0.6;">What does it mean when you see a FSC<sup>TM</sup> label on a product?</h4>
		  			<p class="paragraph animated slideInUp" style="animation-delay: 0.7;">The FSC<sup>TM</sup> label guides customers to choose FSC<sup>TM</sup>  labelled products which are certified to the highest standard of sustainable forestry. The label provides information about the origin of the materials used to make the product and ensures a responsible sourcing of wood material.</p>
		  			<h4 class="section-header animated slideInUp" style="animation-delay: 0.8;">The <b>SIG</b>NATURE 100 is FSC<sup>TM</sup> certified:</h4>
		  			<p class="paragraph animated slideInUp" style="animation-delay: 0.9;">100% of the paperboard used to manufacture the <b>SIG</b>NATURE 100 packs comes from paper mills that have an FSC<sup>TM</sup> certified chain of custody.<br/>(license code: FSC<sup>TM</sup> C020428)</p>
		  			<a class="animated fadeInUp" style="animation-delay: 0.8s;" href="https://www.sig.biz/en/packaging/beverage-packaging/signature-pack-consumer" target="_blank"><b>SIG</b>NATURE PACK</a>
		  		</div>
		  		<div class="three">
		  			<h1 class="header animated slideInUp" style="animation-delay: 0.5;">ALUMINUM-FREE PACKAGING</h1>
		  			<h4 class="section-header animated slideInUp" style="animation-delay: 0.6;">What is sustainable about an alu-free beverage carton?</h4>
		  			<p class="paragraph animated slideInUp" style="animation-delay: 0.7;">Offering an alu-free packaging while ensuring highest standards to food quality  is challenging, as the aluminium layer provides protection from light, oxygen and maintains the product’s aroma.  The <b>SIG</b>NATURE 100 is designed specifically for white UHT milk. It is the world’s first alu-free beverage carton linked to 100% forest-based plastics.  <br/> The elimination of the aluminium layer reduces the carton’s carbon footprint. Check out the CO<sub>2</sub> reduction button to learn more. <br/>Learn more about the <b>SIG</b>NATURE 100 Pack on our website:</p>
		  			<img class="animated fadeInUp" style="animation-delay: 0.8;" src="assets/images/ALUMINUM-FREE.png">
		  			<a class="animated fadeInUp" style="animation-delay: 0.8s;" href="https://www.sig.biz/de/verpackungen/getraenkeverpackungen/signature-pack-details" target="_blank"><b>SIG</b>NATURE PACK</a>
		  		</div>
		  		<div class="four">
		  			<h1 class="header animated slideInUp" style="animation-delay: 0.5;">CO<sub>2</sub> REDUCTION</h1>
		  			<h4 class="section-header animated slideInUp" style="animation-delay: 0.6;">What’s the <b>SIG</b>NATURE 100 carbon footprint?</h4>
		  			<p class="paragraph animated slideInUp" style="animation-delay: 0.7;">The elimination of the aluminium layer plus renewable plastics result in a reduction of the carton’s carbon footprint by 58%*. The <b>SIG</b>NATURE 100 structure supports SIG in its mission  to produce fully renewable, low carbon packaging.<br/><br/><br/><br/>*Reference to EU average and compared to combiblocSlimline Standard 1L + combiSwift closure</p>
		  			<a href="#"></a>
		  		</div>
		  		<div class="five">
		  			<h1 class="header animated slideInUp" style="animation-delay: 0.5;">FULLY RECYCLABLE</h1>
		  			<h4 class="section-header animated slideInUp" style="animation-delay: 0.6;">Recycling helps to protect the environment</h4>
		  			<p class="paragraph animated slideInUp" style="animation-delay: 0.7;">We want more people to make recycling part of their routine to help keep high-quality materials in circulation, prevent valuable natural resources going to waste and avoid environmental impacts from landfill. Every part of a beverage carton can be recycled.<br/> The paper fibres that make up around 75% of each beverage carton remain long, strong and high-quality even after they are recovered from used cartons. The small amounts of polymer and aluminium from cartons can be recycled together to make hard-wearing products like roof tiles and garden furniture.</p>
		  			<a href="#"></a>
		  		</div>
	  		</div>
	  		<div class="nav-button">
	  			<a href="#" onclick="showLeft()"><img class="left-arrow" src="assets/images/left-arrow-light.png" alt=""></a>
	  			<a class="main-home" href="#" onclick="showHome()"><img src="assets/images/home.png" alt=""></a>
	  			<a href="#" onclick="showRight()"><img class="right-arrow" src="assets/images/right-arrow.png" alt=""></a>
	  		</div>
		</div>
	</div>
	<div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal-title">Mailing Address</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" area-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<form method="post">
						@csrf
						<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Name:</label>
						<input type="text" name="name" class="form-control" id="recipient-name">
						<span style="color:red;">@error('name'){{$message}} @enderror</span>
						</div>
						<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Company Name:</label>
						<input type="text" name="company_name" class="form-control" id="recipient-name">
						<span style="color:red;">@error('company_name'){{$message}} @enderror</span>
						</div>
						<div class="mb-3">
						<label for="message-text" class="col-form-label">Address:</label>
						<textarea class="form-control" name="address" id="message-text"></textarea>
						<span style="color:red;">@error('address'){{$message}} @enderror</span>
						</div>
						<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Postal Code:</label>
						<input type="text" class="form-control" name="postal_code" id="recipient-name">
						<span style="color:red;">@error('postal_code'){{$message}} @enderror</span>
						</div>
						<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Country:</label>
						<select class="form-select" name="country" aria-label="Default select example">
							<option selected>Chose Your Country</option>
							@foreach ($country as $i)
							<option value="{{$i->country_name}}">{{$i->country_name}}</option>
							@endforeach
							</select>
						</div>
						
				</div>

				
		
			</div>
			<div class="modal-footer">
				<div class="left-align">
					**Get yours while stock lasts.
				</div>
				<div class="right-align">
					<button class="btn btn-primary btn-sm">Submit</button>
					</form>
					<a type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal">Cancel</a>
				</div>
				
			</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

	<script type="text/javascript" src="{{asset('assets/script.js')}}"></script>	

	

	

	
</body>
</html>