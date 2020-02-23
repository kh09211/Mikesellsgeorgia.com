<?php
/**
 * index.php
 * main index page for mikesellsgeorgia.com portfolio site
 */
?>
<?php require 'lib/header.php'; ?>
<main>
	<div class="the-big-button">
		<button type="button" class="btn btn-secondary btn-lg the-big-butt" onclick="window.location.href = '#contact'; ">Get Your Home Today!</button>
	</div>
	<div class="divider-box-last" style="margin-top: 65px; background-color: #94B3AE; height: 15px;"></div>
	<div id="portfolio">
		<br>
		<div class="container-xl" style="text-align: center;">
			<h1 style="color: #94B3AE;" class="display-4"><i>Homes</i></h1>
			<br>
			<p>For over 15 years I have served the people of Middle Georgia as an honest Real Estate Agent, Rental Manager, consultant. Here are a few examples of homes that I have helped the people of Warner Robins buy and sell, some in as little time as just 25 days!</p>
			<br>
			<br>
			<div class="row">
				<div class="col-md-6 mt-4">
					<a href="https://cgmls.paragonrels.com/publink/default.aspx?GUID=fc17f867-1203-4150-943f-3b5d0f1b889b&Report=Yes">
					<img src="media/soldhouse1.JPG" alt="picture of house" class="w-100 rounded"
					/></a>
				</div>
				<div class="col-md-6 mt-4">
					<a href="https://cgmls.paragonrels.com/publink/default.aspx?GUID=fc17f867-1203-4150-943f-3b5d0f1b889b&Report=Yes">
					<img src="media/soldhouse2.JPG" alt="picture of house" class="w-100 rounded" /></a>
				</div>
				<div class="col-md-6 mt-4">
					<a href="https://cgmls.paragonrels.com/publink/default.aspx?GUID=fc17f867-1203-4150-943f-3b5d0f1b889b&Report=Yes">
					<img src="media/soldhouse3.JPG" alt="picture of house" class="w-100 rounded" /></a>
				</div>
				<div class="col-md-6 mt-4">
					<a href="https://cgmls.paragonrels.com/publink/default.aspx?GUID=fc17f867-1203-4150-943f-3b5d0f1b889b&Report=Yes">
					<img src="media/soldhouse4.JPG" alt="picture of house" class="w-100 rounded" /></a>
				</div>
			</div>
		</div>
	</div>
  	<div id="testimonials">
  		<div class="bluebox text-center">
	  		<h1 class="display-4 text-light mt-4" style="font-weight: 700;"><i>Testimonials</i></h1>
	  		<br/>
	  		<br/>
		   	<div class="testimonial-box rounded">
		   		<p>"Mike was amazing through the entire process. He went above and beyond any expectation I ever had. I am no longver in the area, however I would absolutely use Mike in the future if needed." -Kris</p>
				<a href="https://www.realsatisfied.com/Mike-Hopkins">Link</a>
		   	</div>
		   	<div class="testimonial-box testimonial-box2 rounded" style="float: right;">
		   		<p>"This was our second year to stay at Splash. We stayed in condo 206w and Mike Hopkins was wonderful to work with. The beach was beautiful. Everything went very smoothly and we will hopefully be back next year!!" -Texasmom</p>
				<a href="https://www.tripadvisor.com/ShowUserReviews-g34543-d626781-r274258571-Splash_Resort_Condominiums_Panama_City_Beach-Panama_City_Beach_Florida.html">Link</a>
		   	</div>
  		</div>
  	</div>
  	<div id="about">
		<div class="container-md text-center">
			<br>
			<h1 class="display-4"><i>About me</i></h1>
			<br>
			<div class="text-center">
				<img src="media/mhopkins1.jpg" alt="kyle_photo" style="width: 25%;" class="rounded border border-dark">
			</div>
			<div class="text-left">
				<br>
				<br>
	  			<p>&nbsp Hello, my name is Mike! I have lived in middle GA since 1990. I relocated my family here in 1990 to accept an employment position with the Depart of Navy at Robins AFB GA. Throughout my civilian career I have worked for the military services including the US Army, Marine Corps and US Navy. I completed a 35 year career with the military in 2008. My last position was Logistics Program Manager, Global Positioning System (GPS) </p>
	  			<p>&nbsp I obtained my real estate license in 1999 My accomplishments as Realtor include: Million Dollar Sales Production Award, first year 1999 Life Membership Award Million Dollar Club 2001 RE/MAX Presidents Club Award 2005 National Association of Realtors designation Short-Sale and Foreclosure Resource (SFR) 2010 Member National Association of Realtors Member Central Georgia Board or Realtors Member Central Georgia Multiple Listing Service I am a full time Realtor representing buyers and sellers. I enjoy working with first time buyers as well as seniors and investors. I will be glad to put my real estate knowledge to work for you today. - <i>Mike Hopkins</i></p>
	  		</div>
  		</div>
  	</div>
  	<div class="divider-box-last"></div>
  	<div id="contact">
  		<div class="container text-center">
  			<h1 class="display-4 text-light"><i>Contact Mike!</i></h1>
			<br>
			<?php include 'lib/contact.php'; ?>
		</div>
	</div>
</main>
<?php require 'lib/footer.php'; ?>
