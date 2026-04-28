@foreach(config('filter-days') as $day)
    <div class="{{ $day == 'Сегодня' ? 'day day-selected' : 'day'}}">
        {{ $day }}
    </div>
@endforeach
