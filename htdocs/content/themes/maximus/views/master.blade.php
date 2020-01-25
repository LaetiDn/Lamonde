<!doctype html>
<html {!! get_language_attributes() !!}>
<head>
    <meta charset="utf-8">
    <meta charset="{{ get_bloginfo('charset') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Dynamic CSS with ACF -->
    @include ('layouts.style')
    {{--@if( function_exists('acf_add_options_page') )--}}
		{{--<script>{{ get_field('add_script_head') }}</script>--}}
	{{--@endif--}}
    @head
</head>
<body @php(body_class())>

	{{--@if( function_exists('acf_add_options_page') )--}}
		{{--<script>{{ get_field('add_script_body') }}</script>--}}
	{{--@endif--}}
        <div id="page" class="site">

			@if(!is_404())
				@include('layouts.header')
			@endif
			<main role="main" id="main" class="site-content">
				@yield ('main')
			</main>
			@if(!is_404())
				@include('layouts.footer')
			@endif

		</div>
		@footer
	</body>
</html>
