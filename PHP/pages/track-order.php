<div id="content" class="site-content" tabindex="-1" >
	<div class="col-full">

		<div class="pizzaro-breadcrumb">
			<nav class="woocommerce-breadcrumb" ><a href="index.php">Home</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Track Order</nav>
		</div><!-- .woocommerce-breadcrumb -->
		
		<div id="primary" class="content-area">
			<main id="main" class="site-main" >
				<div id="post-403" class="post-403 page type-page status-publish hentry">
					
					<header class="entry-header">
						<h1 class="entry-title">Track Order</h1>
					</header><!-- .entry-header -->
					
					<div class="entry-content">
						<div class="woocommerce">
							<form action="#"  class="track_order">
								
								<p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
								
								<p class="form-row form-row-first">
									<label for="orderid">Order ID</label> 
									<input class="input-text" type="text" name="orderid" id="orderid" placeholder="Found in your order confirmation email." />
								</p>
								
								<p class="form-row form-row-last">
									<label for="order_email">Billing Email</label>
									<input class="input-text" type="text" name="order_email" id="order_email" placeholder="Email you used during checkout." />
								</p>
								
								<div class="clear"></div>
								
								<p class="form-row">
									<input type="submit" class="button" name="track" value="Track" />
								</p>

								<input type="hidden" id="_wpnonce" name="_wpnonce" value="c64ec2465f" />
								<input type="hidden" name="_wp_http_referer" value="/pizzaro/track-order/" />
								
							</form>
						</div>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .col-full -->
</div><!-- #content -->