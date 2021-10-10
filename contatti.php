<?php 
include('header.php');
?>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>CONTATTACI</h1></a>
					<div class="pull-right">
						<a href="01_home.html"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="06_services.html">Contattaci</a>
					</div>
				</div>
			</div>

			<!-- <iframe class="we-onmap wow fadeInUp" data-wow-delay="0.3s" src="https://www.google.com/maps/d/embed?mid=z2qirMhgTWQA.kXIVQWqn-ONc"></iframe> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1428.9377359943855!2d9.652984792776591!3d45.64302687942468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47814e2f56a8c57d%3A0xfa8eaabab7343003!2sViale%20Industria%2C%206a%2C%2024040%20Stezzano%20BG!5e0!3m2!1sit!2sit!4v1633892251516!5m2!1sit!2sit" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			<div class="container-fluid block-content" style="margin-bottom:80px">
				<div class="row main-grid">
					<div class="col-sm-4">
						<h4>LE NOSTRE SEDI</h4>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>SEDE LEGALE ED AMMINISTRATIVA</strong><br>
								Via Betty Ambiveri 25 - 24126 Bergamo (BG)</div>
							</div>
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>SEDE OPERATIVA</strong><br>
								Viale Industria 6/A – 24040 Stezzano (BG)</div>
							</div>
							<br><br>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>1.800.987.6543</div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>info@vettrasporti.it</div>
							</div>
							<div>
								<span><i class="fa fa-clock-o"></i></span>
								<div>Mon - Sat  8.00 - 19.00</div>
							</div>
						</div>

					</div>
					<div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
						<h4>INVIACI UNA EMAIL</h4>
						<p>Compila il form per richiedere qualsiasi informazione</p>
						<div id="success"></div>
						<form novalidate id="contactForm" class="reply-form form-inline">
							<div class="row form-elem">	
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-name" id="user-name" placeholder="NOME" required="required">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="text" name="user-email" id="user-email" placeholder="EMAIL" required="required">
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-lastname" id="user-lastname" placeholder="COGNOME">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="user-phone" id="user-phone" placeholder="TELEFONO">
									</div>
								</div>
							</div>
							<div class="default-inp form-elem">
								<input type="text" name="user-subject" id="user-subject" placeholder="OGGETTO">
							</div>
							<div class="form-elem default-inp">
								<textarea id="user-message" placeholder="MESSAGGIO"></textarea>
							</div>
							<div class="form-elem">
								<button type="submit" class="btn btn-success btn-default">INVIA RICHIESTA</button>
							</div>
						</form>
					</div>
				</div>
			</div>

<?php 
include('footer.php');
?>