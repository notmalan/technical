<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">		
		<link rel="icon" href="images/favicon.ico" />
		<title>Theia Test</title>
        <script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body>
		<div class="container mx-auto px-4">
		<ul class="flex py-4">
			@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
				@if($localeCode == array_key_last(LaravelLocalization::getSupportedLocales()))
					<li>
						<a
						class="font-bold mt-2 text-sm text-gray-700"
						rel="alternate"
						hreflang="{{ $localeCode }}"
						href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
						>			
						{{  LaravelLocalization::getSupportedLocales()[$localeCode]['name'] }}
						</a>
				@else
					<li>
						<a
						class="font-bold mt-2 text-sm text-gray-700"
						rel="alternate"
						hreflang="{{ $localeCode }}"
						href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
						>			
						{{  LaravelLocalization::getSupportedLocales()[$localeCode]['name'] }}
						</a>
						<span class="px-[15px]">|</span>
					</li>
				@endif
			@endforeach
		</ul>
		<main>
		@yield('content')
		</main>
	</div>
	</body>
</html>