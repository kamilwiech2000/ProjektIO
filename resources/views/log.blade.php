@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    {{-- <a class="nav-link dropdown-toggle btn btn-primary" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}} {{Auth::user()->surname}} --}}



            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">
                    {{Auth::user()->name}}, wyloguj się
                </x-responsive-nav-link>
            </form>
            @if(Auth::user()->id == 1)<ul >
        <a href="{{ route('fisheries.index') }}" class="btn btn-secondary" > Łowiska </a>
        <a href="{{ route('fishes.index') }}" class="btn btn-secondary"> Ryby </a>
            @endif

            {{-- <---<a class="dropdown-item" href="{{route('dashboard')}}">Log Out --}}
        {{-- </a> --}}
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary"> Zaloguj </a>
    @endauth
</div>
@endif
