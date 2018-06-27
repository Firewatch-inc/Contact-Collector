<div class="ui segment">
	<div class="ui breadcrumb">
		<a class="section" href="{{ route('index') }}">{{ $parent }}</a>
		@if (isset($links))
			@foreach ($links as $link )
				<span class="divider">/</span>
				<a class="section" href="{{ $link['href'] }}">{{ $link['link'] }}</a>
			@endforeach
		@endif
	</div>
</div>
