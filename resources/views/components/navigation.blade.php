<div class="fixed top-8 left-8 bottom-8 flex items-center justify-center w-24 border-r-2 border-gray-200" style="height: calc(100vh - 64px)">
    <div class="flex flex-col  justify-between" style="height: calc(100vh - 64px)">
        <div class="p-4">
            <x-application-logo></x-application-logo>
        </div>
        {{-- Navigation Menu Component --}}
        <x-navigation-menu />
        {{-- Route settings --}}
        <x-side-dropdown-menu>
            <x-slot name="trigger">
                <x-nav-link :active="request()->routeIs('teams.*')">
                    <span class="block w-5">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" class="fill-current {{request()->routeIs('teams.*') ? 'text-purple-500' : 'text-gray-400'}}" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M3.93830521,6.49683865 C3.63405147,7.02216933 3.39612833,7.5907092 3.23599205,8.19100199 L5.9747955e-16,9 L9.6487359e-16,11 L3.23599205,11.808998 C3.39612833,12.4092908 3.63405147,12.9778307 3.93830521,13.5031614 L2.22182541,16.363961 L3.63603897,17.7781746 L6.49683865,16.0616948 C7.02216933,16.3659485 7.5907092,16.6038717 8.19100199,16.7640079 L9,20 L11,20 L11.808998,16.7640079 C12.4092908,16.6038717 12.9778307,16.3659485 13.5031614,16.0616948 L16.363961,17.7781746 L17.7781746,16.363961 L16.0616948,13.5031614 C16.3659485,12.9778307 16.6038717,12.4092908 16.7640079,11.808998 L20,11 L20,9 L16.7640079,8.19100199 C16.6038717,7.5907092 16.3659485,7.02216933 16.0616948,6.49683865 L17.7781746,3.63603897 L16.363961,2.22182541 L13.5031614,3.93830521 C12.9778307,3.63405147 12.4092908,3.39612833 11.808998,3.23599205 L11,0 L9,0 L8.19100199,3.23599205 C7.5907092,3.39612833 7.02216933,3.63405147 6.49683865,3.93830521 L3.63603897,2.22182541 L2.22182541,3.63603897 L3.93830521,6.49683865 L3.93830521,6.49683865 Z M10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 L10,13 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </x-nav-link>
            </x-slot>
            <x-slot name="content">
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="py-px">
                        <div>
                            <!-- Team Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="block px-4 py-2 hover:bg-gray-100">
                                {{ __('Team Settings') }}
                            </a>
                        </div>
                        <div>
                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())    
                                <a  href="{{ route('teams.create') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    {{ __('Create New Team') }}
                                </a>
                            @endcan
                        </div>
                        <div class="border-t border-gray-100"></div>
                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>
                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" />
                        @endforeach
                    </div>
                @endif
            </x-slot>
        </x-side-dropdown-menu>
    </div>
    
</div>