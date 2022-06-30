<nav x-data="{ open: false }" class="bg-[#F8F4EE] border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center">
            <div class="flex justify-between w-full sm:justify-center">
                <a class="h-20 flex items-center" href="{{route('home')}}">
                    <h1 class='text-3xl md:text-4xl font-header tracking-widest'>Modana Gali Photography</h1>
                </a>
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="hidden sm:flex nav-links h-10 mb-2 font-normal">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="{{Auth::check() ? 'md:mx-1': ''}}">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="{{Auth::check() ? 'md:mx-1': ''}}">
                    {{ __('About') }}
                </x-nav-link>
                <x-nav-link :href="route('portrait')" :active="request()->routeIs('portrait')" class="{{Auth::check() ? 'md:mx-1': ''}}">
                    {{ __('Portraits') }}
                </x-nav-link>
                <x-nav-link :href="route('wedding')" :active="request()->routeIs('wedding')" class="{{Auth::check() ? 'md:mx-1': ''}}">
                    {{ __('Weddings') }}
                </x-nav-link>
                <x-nav-link :href="route('details.index')" :active="request()->routeIs('details.index')" class="{{Auth::check() ? 'md:mx-1': ''}}">
                    {{ __('Details') }}
                </x-nav-link>
                <x-nav-link :href="route('reviews')" :active="request()->routeIs('reviews')" class="{{Auth::check() ? 'md:mx-1': ''}}">
                    {{ __('Reviews') }}
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="{{Auth::check() ? 'md:mx-1': ''}}">
                    {{ __('Contact') }}
                </x-nav-link>
                @if(Auth::check())
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="flex items-center items-center px-2 mx-2 md:mx-1 border-b-2 border-transparent text-md font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @endif
            </div>
        </div>
        <!-- Settings Dropdown -->
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('portrait')" :active="request()->routeIs('portrait')">
                {{ __('Portraits') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('wedding')" :active="request()->routeIs('wedding')">
                {{ __('Weddings') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('details.index')" :active="request()->routeIs('details.index')">
                {{ __('Details') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('reviews')" :active="request()->routeIs('reviews')">
                {{ __('Reviews') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-responsive-nav-link>
            @if(Auth::check())

            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
            @endif
        </div>

        <!-- Responsive Settings Options -->

    </div>
</nav>