<?php $this->load->view('header')?>



<script type="text/javascript">
	$(function(){
		$('#tabs').tabs({ selected: <?php echo isset($tab_index) ? $tab_index : 0; ?> });
	});
</script>

<div class="container_10" id="center_wrapper">

	<div class="grid_10" id="content_wrapper">

		<div class="section_wrapper">
			
			<div class="content toggle">

				<form method="post" action="#">

				<div id="tabs">

					<ul>
						<li><a href="#tab_client"><?php echo 'client'; ?></a></li>
						<li><a href="#tab_settings"><?php echo 'settings'; ?></a></li>
						
						
					</ul>

					<div id="tab_client">

						<div class="left_box">
							

							<dl>
								<dt>client_name </dt>
								<dd><input type="text" name="client_name" id="client_name" </dd>
							</dl>

							<dl>
								<dt>street_address</dt>
								<dd><input type="text" name="client_address" id="client_address" </dd>
							</dl>

							<dl>
								<dt>street_address_2</dt>
								<dd><input type="text" name="client_address_2" id="client_address_2" </dd>
							</dl>

							<dl>
								<dt>city</dt>
								<dd><input type="text" name="client_city" id="client_city" </dd>
							</dl>

							<dl>
								<dt>state</dt>
								<dd><input type="text" name="client_state" id="client_state"</dd>
							</dl>

							<dl>
								<dt>zip</dt>
								<dd><input type="text" name="client_zip" id="client_zip" </dd>
							</dl>

							<dl>
								<dt>country</dt>
								<dd><input type="text" name="client_country" id="client_country" </dd>
							</dl>

							<dl>
								<dt>phone_number</dt>
								<dd><input type="text" name="client_phone_number" id="client_phone_number" </dd>
							</dl>

						</div>

						</div>
					
				</div>

			</form>
				
			</div>

		</div>

	

	</div>

</div>

<?php $this->load->view('footer'); ?>