@extends('partials.layouts.app')

@section('container')

<!-- page -->
<main class="min-h-screen w-full bg-gray-100 text-gray-700" id="layout">

    @include('partials.pages.dashboard.header')

    <div class="flex">
        <!-- aside -->
        @include('partials.pages.dashboard.aside')

        <!-- main content page -->
        <div class="w-full p-4">
            @if ( Request::is('dashboard') )
            @include('partials.pages.dashboard.dashboard_page')
            @elseif ( Request::is('dashboard/product') )
            @include('partials.pages.dashboard.product_page')
            @elseif( Request::is('dashboard/transaction') )
            @endif
        </div>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", () => {
            const layout = {
                profileOpen: false,
                asideOpen: true,
                toggleProfile() {
                    this.profileOpen = !this.profileOpen;
                    document.getElementById('profile-dropdown').style.display = this.profileOpen ? 'block' : 'none';
                },
                toggleAside() {
                    this.asideOpen = !this.asideOpen;
                    document.getElementById('aside').style.display = this.asideOpen ? 'block' : 'none';
                },
                closeProfile() {
                    this.profileOpen = false;
                    document.getElementById('profile-dropdown').style.display = 'none';
                }
            };

            document.getElementById('profile-toggle').addEventListener('click', (e) => {
                layout.toggleProfile();
                e.stopPropagation();
            });

            document.getElementById('menu-toggle').addEventListener('click', () => {
                layout.toggleAside();
            });

            document.addEventListener('click', (event) => {
                if (!document.getElementById('profile-dropdown').contains(event.target)) {
                    layout.closeProfile();
                }
            });
        });
</script>

@endsection