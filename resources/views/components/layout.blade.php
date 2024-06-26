<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mihir Trivedi</title>
        <meta charset="UTF-8">
        <meta name="description" content="I'm a Junior majoring in Computer Sciences at the University of Wisconsin - Madison.">
        <meta name="keywords" content="Mihir, Trivedi, Portfolio, m-trivedi, Mihir Trivedi, UW-Madison, Pantry2Home">
        <meta name="author" content="Mihir Trivedi">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="build/assets/app-DXBrKJxR.css">
    </head>
    <body class="bg-neutral-900 text-white flex flex-col min-h-screen">
        <header class="fixed h-16 bg-neutral-800 w-full flex justify-center items-center space-x-8 border-b border-neutral-600">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/now" :active="request()->is('now')">Now</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </header>
        <div class="pt-16 px-8 md:px-20 flex-grow">
            {{ $slot }}
        </div>
        <footer class="bg-neutral-800 w-full text-center border-t border-neutral-600 py-6 mt-8">
            Feel free to connect with me on  
            <a class="underline underline-offset-4 hover:text-amber-500" href="https://www.linkedin.com/in/m-trivedi/" target="_blank">LinkedIn</a>, view my projects on
            <a class="underline underline-offset-4 hover:text-amber-500" href="https://github.com/m-trivedi/" target="_blank">GitHub</a>, and follow me on 
            <a class="underline underline-offset-4 hover:text-amber-500" href="https://twitter.com/mihirdtrivedi/" target="_blank">Twitter</a>.<br><br>
            Copyright, 2024, Mihir Trivedi.
        </footer>
    </body>
</html>