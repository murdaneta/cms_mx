<ul class="list-inline-variant-1">
	@if($socials)
	@foreach( $socials as $social )
	  <li><a href="{{ $social->link }}" class="fa-{{ $social->name }}"></a></li>
	@endforeach
	@endif
</ul>