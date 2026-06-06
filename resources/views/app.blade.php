<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Anesidora</title>
		@fonts
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
    <body class="flex flex-col h-dvh w-dvw bg-[#1a1a2e] text-white">
	    <div id="app" class="h-full w-full"></div>
	</body>
</html>
