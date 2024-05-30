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

    {{-- button profile --}}
    <x-button-profile.dropdown-profile />
</header>