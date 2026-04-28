<div class="social-media">
    @foreach(config('social-media') as $item)
        <a href="{{ $item['url'] }}" class="social-media__icon-block">
            <img src="{{ $item['icon-url']  }}" alt="{{ $item['alt'] }}">
        </a>
    @endforeach
</div>
