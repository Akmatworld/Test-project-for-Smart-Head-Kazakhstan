@foreach(config('mock-data') as $item)
    <div class="item">
        @if($item['is_premiere'])
            <button class="item__premiere-btn">премьера</button>
        @endif

        <div class="item__img-block">
            <img src="{{ $item['image_url'] }}" alt="Item image">
        </div>
        <div class="item__title">
            <a href="#">
                {{ $item['title'] }}
            </a>
        </div>
        <div class="chips">
            @foreach($item['chips'] as $chip)
                <div class="chip">{{ $chip }}</div>
            @endforeach
        </div>
        <div class="item__rooms">
            @foreach($item['rooms'] as $rooms)
                <div class="room">
                    <div class="room__time-block">
                        <div class="room__time">{{ $rooms['time'] }}</div>
                        <div class="room__cost">
                            <span>2D</span>
                            {{ $rooms['cost'] }}&nbsp;₸
                        </div>
                    </div>
                    <div class="room__title">{{ $rooms['room'] }}</div>
                </div>
            @endforeach
        </div>

        @if($item['is_showtimes_for_tomorrow'])
            <button class="item__tomorrow">Сеансы на Завтра</button>
        @endif

    </div>
@endforeach
