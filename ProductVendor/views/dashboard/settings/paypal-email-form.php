<div class="pv_paypal_container">
	<p><b><?php _e( 'PayPal Address', 'wc_product_vendor' ); ?></b><br/>
		<?php _e( 'Your PayPal address is used to send you your commission.', 'wc_product_vendor' ); ?><br/>

		<input type="email" name="pv_paypal" id="pv_paypal" placeholder="some@email.com"
			   value="<?php echo get_user_meta( $user_id, 'pv_paypal', true ); ?>"/>
	</p>
</div>
