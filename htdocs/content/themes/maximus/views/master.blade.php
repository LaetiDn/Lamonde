<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	@if( function_exists('acf_add_options_page') )
		<script>{{ get_field('add_script_head') }}</script>
	@endif

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>


	<!-- Dynamic CSS with ACF -->
	@include ('layouts.style')

    <?php wp_head(); ?>
	</head>
	<body class="@if(is_front_page() && get_field('activate_page_loader')) {{ 'overflow-hidden' }}@endif">

	@if(is_front_page() && get_field('activate_page_loader'))
		@include('layouts.loader')
	@endif


	@if( function_exists('acf_add_options_page') )
		<script>{{ get_field('add_script_body') }}</script>
	@endif
		<div id="global-outer">
			<div id="global-inner">

                @if(!is_404())
					@include('layouts.header')
				@endif
				<main>
					@yield ('main')
				</main>
				@include('layouts.footer')
			</div>
		</div>


		<?php wp_footer(); ?>
	</body>
</html>
