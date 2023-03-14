<nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-text">
                @if($name == 'budi')
                    <a class="navbar-name" href="{{route('mary')}}">Mary</a>
                @elseif($name == 'mary')
                    <a class="navbar-name" href="{{route('budi')}}">Budi</a>
                @endif
            </span>
        </div>
    </nav>
