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
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('About') }}
                </x-nav-link>
                <x-nav-link :href="route('portrait')" :active="request()->routeIs('portrait')">
                    {{ __('Portraits') }}
                </x-nav-link>
                <x-nav-link :href="route('wedding')" :active="request()->routeIs('wedding')">
                    {{ __('Weddings') }}
                </x-nav-link>
                <x-nav-link :href="route('details.index')" :active="request()->routeIs('details.index')">
                    {{ __('Details') }}
                </x-nav-link>
                <x-nav-link :href="route('reviews')" :active="request()->routeIs('reviews')">
                    {{ __('Reviews') }}
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-nav-link>
            </div>
        </div>
        <!-- Settings Dropdown -->
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
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
        </div>

        <!-- Responsive Settings Options -->

    </div>
</nav>