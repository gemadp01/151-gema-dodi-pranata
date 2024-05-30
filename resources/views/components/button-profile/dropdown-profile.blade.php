<!-- button profile -->
<div>
    <x-button-profile.button-profile-button />

    <x-button-profile.button-profile-dropdown />
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
            const layout = {
                profileOpen: false,
                toggleProfile() {
                    this.profileOpen = !this.profileOpen;
                    document.getElementById('profile-dropdown').style.display = this.profileOpen ? 'block' : 'none';
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

            document.addEventListener('click', (event) => {
                if (!document.getElementById('profile-dropdown').contains(event.target)) {
                    layout.closeProfile();
                }
            });
        });
</script>