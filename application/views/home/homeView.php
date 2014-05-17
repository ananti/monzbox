		<!-- Logo & Banner Promo -->
		<script type="text/javascript">
			$(window).load(function() {
				 $('#slider').nivoSlider({
					effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
					slices: 15, // For slice animations
					boxCols: 8, // For box animations
					boxRows: 4, // For box animations
					animSpeed: 500, // Slide transition speed
					pauseTime: 3000, // How long each slide will show
					startSlide: 0, // Set starting Slide (0 index)
					directionNav: true, // Next & Prev navigation
					controlNav: false, // 1,2,3... navigation
					controlNavThumbs: false, // Use thumbnails for Control Nav
					pauseOnHover: true, // Stop animation while hovering
					manualAdvance: false, // Force manual transitions
					prevText: 'Prev', // Prev directionNav text
					nextText: 'Next', // Next directionNav text
					randomStart: false, // Start on a random slide
					beforeChange: function(){}, // Triggers before a slide transition
					afterChange: function(){}, // Triggers after a slide transition
					slideshowEnd: function(){}, // Triggers after all slides have been shown
					lastSlide: function(){}, // Triggers when last slide is shown
					afterLoad: function(){} // Triggers when slider has loaded
				});
			});
		</script>

		<div id="wrapbanner">			
			<div id="logo">
				<a href="index.php"><img src="/images/logo.png"/></a>
			</div>
			<!-- image should be 750x200 px -->
			<div id="banner">
				<div id="slide">
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider">
							 <a href="#">
								<img src="/images/banner/banner.jpg" alt="" title="" />
							 </a>
							 <a href="#">
								<img src="/images/banner/banner1.jpg" alt="" title="" />
							 </a>
							 <a href="#">
								<img src="/images/banner/banner2.jpg" alt="" title="" />
							 </a>
							 <a href="#">
								<img src="/images/banner/banner3.jpg" alt="" title="" />
							 </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapfood">
			<div class="foodcontent">
				<div class="new white center bolder">
				   Paket Kumachan Bento
				</div>
				<div id="food">
					<img class="imgphoto" src="/images/bento/kumachan/kumachan.jpg"/>
					<div class="desc">
						<div class="flag darkpink bold">&hearts; Menu Baru &hearts;</div>
						<!-- Max 128 chars -->
						<div class="textdesc center">"Nasi bentuk beruang yang lucu, dengan lauk chicken karaage dan salad, dilengkapi saus dan mayonnaise."</div>
						<div class="darkpink center">Karaage, Japan's favorite of all time!</div>
						<div class="price">Rp. 12.000/porsi</div>
					</div>
				</div>
			</div>
			<div class="foodcontent">
				<div class="new white center bolder">
				   Paket Snowman Bento
				</div>
				<div id="food">
					<img class="imgphoto" src="/images/bento/snowman/snowman.jpg"/>
					<div class="desc">
						<div class="flag darkpink bold">&hearts; Menu Baru &hearts;</div>
						<!-- Max 128 chars -->
						<div class="textdesc center">"Nasi bentuk manusia salju, dengan lauk chicken katsu dan salad, dilengkapi saus dan mayonnaise"</div>
						<div class="darkpink center">This snow, will it melt in your mouth?</div>
						<div class="price">Rp. 12.000/porsi</div>
					</div>
				</div>
			</div>
			<div class="foodcontent">
				<div class="new white center bolder">
				   Paket Kuma Hotdog
				</div>
				<div id="food">
					<img class="imgphoto" src="/images/bento/kumahotdog/kumahotdog.jpg"/>
					<div class="desc">
						<div class="flag darkpink bold">&hearts; Menu Baru &hearts;</div>
						<!-- Max 128 chars -->
						<div class="textdesc center">"Hot dog berhiaskan beruang keju, disajikan dengan daging burger home made, mayonnaise dan sayuran segar"</div>
						<div class="darkpink center">Little bear says cheese!</div>
						<div class="price">Rp. 12.000/porsi</div>
					</div>
				</div>
			</div>
			<div class="foodcontent">
				<div class="recommended white center bolder">
				   Paket Custom Bento
				</div>
				<div id="food">
					<img class="imgphoto" src="/images/bento/custom/custom.jpg"/>
					<div class="desc">
						<div class="flag darkyellow bold">&diams; Menu Rekomendasi &diams;</div>
						<!-- Max 128 chars -->
						<div class="textdesc center">"Ingin menu yang lain? Ingin tambahan lauk? Ingin mencicipi ini itu?"</div>
						<div class="darkyellow center">Susun sendiri menu bentomu! </div>
						<div class="price">mulai dari Rp. 12.000/porsi</div>
					</div>
				</div>
			</div>
		</div>
		<div style="float:right;margin-top: 20px;"><a href="/menu/menu" class="button bold">Lihat Menu Mon'z Box Lainnya</a></div>