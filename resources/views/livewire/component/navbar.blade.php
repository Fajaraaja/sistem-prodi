<nav class="sticky top-0 z-30 w-full bg-gray-500 shadow-md">
    <div class="flex items-center justify-between p-4">
        <div class="flex items-center space-x-2">
            <button id="sidebarToggle" aria-controls="default-sidebar" type="button"
                class="inline-flex items-center p-2 text-sm text-white rounded-lg sm:hidden hover:bg-transparent focus:outline-none">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>
            <img src="https://jkb.pnc.ac.id/wp-content/uploads/elementor/thumbs/WhatsApp_Image_2024-12-09_at_16.13.18_7bdfb6f1-removebg-preview-qy8xou2ljv2bccebwb3f6iu5l7o573uoudnhfc4rxu.png"
                class="w-auto h-8 max-w-full" alt="logo Jkb" />
            <span
                class="self-center hidden mr-2 text-sm font-semibold text-white sm:block md:text-lg lg:text-xl whitespace-nowrap">
                SISTEM PRODI
            </span>
        </div>

        <div class="relative flex items-center space-x-4">
            <div>
                <p class="text-white text-sm font-semibold">Hi, {{ Auth::user()->name ?? 'user' }}!</p>
            </div>
            <button type="button"
                class="flex text-sm bg-customPurple rounded-full focus:ring-5 focus:ring-gray-300 border-2 border-wwhite"
                id="user-menu-button" aria-expanded="false">
                <span class="sr-only">Open user menu</span>
                <svg class="w-8 h-8 text-white rounded-full" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <div class="absolute right-0 z-50 hidden mt-2 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow top-full"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm font-bold text-gray-600">{{ Auth::user()->name ?? 'user' }}</span>
                    <span
                        class="block text-sm text-gray-500 truncate">{{ Auth::user()->email ?? 'user@gmail.com' }}</span>
                </div>
                {{-- <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="
                        @php
$user = Auth::user();
                            if ($user->role == 'staff') {
                                echo route('staff.profil');
                            } elseif ($user->role == 'mahasiswa') {
                                echo route('mahasiswa.profile');
                            } elseif ($user->role == 'dosen') {
                                echo route('dosen.dashboard');
                            } @endphp
                        "
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    </li>
                    <li>
                        <button class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left"
                            onclick="keluar('{{ $user->id }}', '{{ $user->role }}')">
                            Log Out
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </li>

                    
                </ul> --}}
            </div>
        </div>
    </div>
    {{-- <script>
        function keluar(id, role) {
            Swal.fire({
                title: `Apakah anda yakin ingin keluar sebagai ${role}?`,
                // text: "Data yang telah dihapus tidak dapat dikembalikan!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#975e94',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Keluar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('default-sidebar');

            if (sidebarToggle && sidebar) {
                sidebarToggle.addEventListener('click', function(event) {
                    sidebar.classList.toggle('-translate-x-full');
                    event.stopPropagation();
                });

                document.addEventListener('click', function(event) {
                    if (!sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
                        sidebar.classList.add('-translate-x-full');
                    }
                });
            }

            const userMenuButton = document.getElementById('user-menu-button');
            const userDropdown = document.getElementById('user-dropdown');

            if (userMenuButton && userDropdown) {
                userMenuButton.addEventListener('click', function() {
                    userDropdown.classList.toggle('hidden');
                });

                document.addEventListener('click', function(event) {
                    if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                        userDropdown.classList.add('hidden');
                    }
                });
            }
        });
    </script> --}}
</nav>
