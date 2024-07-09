@props(['active' => false])


<a {{ $attributes}} class="block py-3 px-4 text-white rounded md:bg-transparent md:p-0 {{ $active ? 'bg-green-600' : 'hover:bg-green-500' }}">{{ $slot}}</a>
