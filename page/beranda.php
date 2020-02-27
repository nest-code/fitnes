
    <section class="hero-wrap js-fullheight" style="background-image: url('assets/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center pt-5 mt-md-5">
            <h1 class="mb-3 bread"><?php echo $result['slogan']; ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href=""></a></span> <span><?php echo $result['nama']; ?></span></p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading"><small><i class="left-bar"></i>Pricing Tables<i class="right-bar"></i></small></span>
            <h2 class="mb-1">Membership Plans</h2>
          </div>
		</div>
		
		
        <div class="row">
          <?php
            include_once 'admin/backend/member_select_index.php';
          ?>
        </div>

	      <div class="row mt-5">
    			<div class="col-md-4">
    				<div class="services d-flex ftco-animate">
							<div class="icon-2 d-flex justify-content-center align-items-center">
								<span class="flaticon-ruler"></span>
							</div>
							<div class="text px-md-2 pl-4">
								<h3>1K+ Equipment</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							</div>
						</div>
    			</div>
					<div class="col-md-4">
						<div class="services d-flex ftco-animate">
							<div class="icon-2 d-flex justify-content-center align-items-center">
								<span class="flaticon-gym"></span>
							</div>
							<div class="text px-md-2 pl-4">
								<h3>Open 24/7</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							</div>
						</div>
					</div>


					<div class="col-md-4">
						<div class="services d-flex ftco-animate">
							<div class="icon-2 d-flex justify-content-center align-items-center">
								<span class="flaticon-tools-and-utensils"></span>
							</div>
							<div class="text px-md-2 pl-4">
								<h3>Food Supply</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							</div>
						</div>
					</div>
    		</div>
      </div>
    </section>
