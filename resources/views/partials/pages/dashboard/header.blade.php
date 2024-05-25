<!-- header page -->
<header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2">
    <!-- logo -->
    <div class="flex items-center space-x-2">
        <button type="button" class="text-3xl" id="menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                    clip-rule="evenodd" />
            </svg>

        </button>
        {{-- <div>Logo</div> --}}
    </div>

    <!-- button profile -->
    <div>
        <button type="button" id="profile-toggle" class="h-9 w-9 overflow-hidden rounded-full">
            <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" />
        </button>

        <!-- dropdown profile -->
        <div class="absolute right-2 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md"
            id="profile-dropdown" style="display: none;">
            <div class="flex items-center space-x-2 p-2">
                <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" class="h-9 w-9 rounded-full" />
                <div class="font-medium">
                    {{-- {{ auth()->user->name }} --}}
                </div>
            </div>

            {{-- <div class="flex flex-col space-y-3 p-2">
                <a href="#" class="transition hover:text-blue-600">My Profile</a>
                <a href="#" class="transition hover:text-blue-600">Edit Profile</a>
                <a href="#" class="transition hover:text-blue-600">Settings</a>
            </div> --}}

            <div class="p-2">
                <button class="flex items-center space-x-2 transition hover:text-blue-600">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    <div>Log Out</div>
                </button>
            </div>
        </div>
    </div>
</header>