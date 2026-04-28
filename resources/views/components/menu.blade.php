@foreach(config('menu') as $menu_item)
    <a href="#" class="{{ $menu_item == 'Афиша' ? 'menu-item selected-menu-item' : 'menu-item'}}">
        {{ $menu_item }}
    </a>
@endforeach
