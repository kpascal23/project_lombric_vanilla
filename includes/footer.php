	<footer>
	<script type="text/javascript" src="../js/general.js"></script>
	<script type="text/javascript" src="../js/shop.js"></script>
	<?php
		if($statuePanier=='transit' && $idAdmin='transit')
		{	
			include 'inscriptionControl.php';
		}
		if(!$connected && !$panierConnected)
		{
			include 'visiteurControl.php';
		}	 
	?>	
		<ul>
			<li>
				<h5>Nous rendre visite</h5>
				<div class="footerText">
					<div class="footerImage">
						<img src="../icon/email.jpg">
					</div>
					<div class="footerText">
						<p><strong>FuriousCrew company</strong></br>
						23 avenue de la gare,</br>
						73012 PARIS</br></p>
					</div>	
				</div>	
			</li>

			<li>
				<h5>Nous contacter</h5>	
					<p><i class="fa fa-phone" aria-hidden="true" class="footerIcon"></i>	01.66.66.66.66</p>
					<p><i class="fa fa-envelope-open-o" aria-hidden="true" class="footerIcon"></i><a href="mailto:#">pas.ke@live.com</a></p>
			</li>
	
			<li>
					<h5>Nous suivre</h5>
				<ul>
					<li class="footerIcon">
						<i class="fa fa-facebook-square" aria-hidden="true"></i>
					</li>

					<li class="footerIcon">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</li>

					<li class="footerIcon">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</li>
				</ul>
			</li>

			<li>
				<a href="">Mention Légales</a>
			</li>		
		</ul>	
	</footer>	
</body>

</html>	