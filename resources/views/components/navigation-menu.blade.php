<ul class=""> 
    {{-- Route Dashboard --}}
    <li>
        <x-nav-link :active="request()->routeIs('dashboard')" class="mb-6" href="{{route('dashboard')}}">
            <span class="block w-5 text">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" class="fill-current {{request()->routeIs('dashboard') ? 'text-purple-500' : 'text-gray-400'}}" fill-rule="evenodd">
                        <g id="icon-shape">
                            <path d="M1,1 L19,1 L19,3 L1,3 L1,1 Z M1,9 L19,9 L19,11 L1,11 L1,9 Z M1,17 L19,17 L19,19 L1,19 L1,17 Z M1,5 L19,5 L19,7 L1,7 L1,5 Z M1,13 L19,13 L19,15 L1,15 L1,13 Z" id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
            </span>
        </x-nav-link>
    </li>
    {{-- Route Projects --}}
    <li>
        <x-nav-link :active="request()->routeIs('projects.*')" class="mb-6" href="{{route('projects.index')}}">
            <span class="block w-5">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" class="fill-current {{request()->routeIs('projects.*') ? 'text-purple-500' : 'text-gray-400'}}" fill-rule="evenodd">
                        <g id="icon-shape">
                            <path d="M0,3.99406028 C0,2.8927712 0.895857811,2 1.9973917,2 L9,2 L11,4 L18.0026083,4 C19.1057373,4 20,4.89706013 20,6.00585866 L20,15.9941413 C20,17.1019465 19.1017876,18 18.0092049,18 L1.99079514,18 C0.891309342,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z" id="Rectangle-1"></path>
                        </g>
                    </g>
                </svg>
               
            </span>
        </x-nav-link>
    </li>
    {{-- Route Teams --}}
    <li>
        <x-nav-link :active="request()->routeIs('home')" class="mb-6">
            <span class="block w-5">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" class="fill-current {{request()->routeIs('home') ? 'text-purple-500' : 'text-gray-400'}}" fill-rule="evenodd">
                        <g id="icon-shape">
                            <path d="M7,8 C9.209139,8 11,6.209139 11,4 C11,1.790861 9.209139,0 7,0 C4.790861,0 3,1.790861 3,4 C3,6.209139 4.790861,8 7,8 Z M7,9 C4.852,9 2.801,9.396 0.891,10.086 L2,16 L3.25,16 L4,20 L10,20 L10.75,16 L12,16 L13.109,10.086 C11.199,9.396 9.148,9 7,9 Z M15.315,9.171 L13.66,18 L12.41,18 L12.035,20 L16,20 L16.75,16 L18,16 L19.109,10.086 C17.899,9.648 16.627,9.346 15.315,9.171 Z M13,0 C12.532,0 12.089,0.096 11.671,0.243 C12.501,1.272 13,2.578 13,4 C13,5.422 12.501,6.728 11.671,7.757 C12.089,7.904 12.531,8 13,8 C15.209,8 17,6.209 17,4 C17,1.791 15.209,0 13,0 Z" id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
               
            </span>
        </x-nav-link> 
    </li>
    {{-- Route Notifications --}}
    <li>
        <x-nav-link :active="request()->routeIs('home')" class="mb-6">
            <span class="block w-5">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" class="fill-current {{request()->routeIs('home') ? 'text-purple-500' : 'text-gray-400'}}" fill-rule="evenodd">
                        <g id="icon-shape">
                            <path d="M8.02739671,2.33180314 C5.68271203,3.14769073 4,5.37733614 4,8 L4,14 L1,16 L1,17 L19,17 L19,16 L16,14 L16,8 C16,5.37733614 14.317288,3.14769073 11.9726033,2.33180314 C11.9906226,2.22388264 12,2.11303643 12,2 C12,0.8954305 11.1045695,0 10,0 C8.8954305,0 8,0.8954305 8,2 C8,2.11303643 8.0093774,2.22388264 8.02739671,2.33180314 L8.02739671,2.33180314 Z M12,18 C12,19.1045695 11.1045695,20 10,20 C8.8954305,20 8,19.1045695 8,18 L12,18 L12,18 Z" id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
            </span>
        </x-nav-link>
    </li>
    {{-- Route Profile --}}
    <li>
        <x-side-dropdown-menu>
            <x-slot name="trigger">
                <x-nav-link :active="request()->routeIs('profile.*')" class="mb-6" class="cursor-pointer">
                    <span class="block w-5">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" class="fill-current {{request()->routeIs('profile.*') ? 'text-purple-500' : 'text-gray-400'}}" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M4.99999861,5.00218626 C4.99999861,2.23955507 7.24419318,0 9.99999722,0 C12.7614202,0 14.9999958,2.22898489 14.9999958,5.00218626 L14.9999958,6.99781374 C14.9999958,9.76044493 12.7558013,12 9.99999722,12 C7.23857424,12 4.99999861,9.77101511 4.99999861,6.99781374 L4.99999861,5.00218626 Z M1.11022272e-16,16.6756439 C2.94172855,14.9739441 6.3571245,14 9.99999722,14 C13.6428699,14 17.0582659,14.9739441 20,16.6756471 L19.9999944,20 L0,20 L1.11022272e-16,16.6756439 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </x-nav-link>
            </x-slot>
            <x-slot name="content">
                <div class="py-px">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                    @endif

                    <div class="border-t border-gray-100"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                </div>
            </x-slot>
        </x-side-dropdown-menu>
    </li>
    {{-- Route Logout --}}
    <li>
        <x-nav-link :active="request()->routeIs('home')">
            <span class="block w-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"  class="fill-current {{request()->routeIs('home') ? 'text-purple-500' : 'text-gray-400'}}" ><path d="M4.16 4.16l1.42 1.42A6.99 6.99 0 0 0 10 18a7 7 0 0 0 4.42-12.42l1.42-1.42a9 9 0 1 1-11.69 0zM9 0h2v8H9V0z"></path></svg>
            </span>
        </x-nav-link>
    </li>
    
</ul>