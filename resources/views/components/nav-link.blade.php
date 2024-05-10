@props(['active' => false])

<a class="{{ $active ? 'text-amber-500' : 'text-white'}} h-16 flex justify-center items-center hover:text-amber-500"
   aria-current="{{ $active ? 'page' : 'false'}}"
   {{ $attributes }}
>{{ $slot }}</a>