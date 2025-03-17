<div class="h-screen sticky top-16 left-0-z-5 relative">
    <div id="default-sidebar " class="h-full w-64 transition-transform -translate-x-full bg-gray-800 sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 ">
            <ul class="space-y-2 font-medium sticky top-20">
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg"
                        aria-controls="dropdown-Jadwal" data-collapse-toggle="dropdown-Jadwal">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-100"
                            aria-hidden="true" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
                        </svg>

                        <span
                            class="flex-1 flex-shrink-0 text-left text-gray-500 transition duration-75 group-hover:text-gray-100 ms-3 rtl:text-right whitespace-nowrap">Jadwal</span>
                        <svg class="flex-shrink-0 w-3 h-3 text-gray-500 transition duration-75 group-hover:text-gray-100"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-Jadwal" class="hidden py-2 space-y-2">
                        <li>
                            <a {{-- <a href="#" --}}
                                class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group">Kuliah</a>
                        </li>
                        <li>
                            <a {{-- <a href="#" --}}
                                class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group">KSK</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg"
                        aria-controls="dropdown-Nilai" data-collapse-toggle="dropdown-Nilai">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-100"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M5 3a2 2 0 0 0-2 2v5h18V5a2 2 0 0 0-2-2H5ZM3 14v-2h18v2a2 2 0 0 1-2 2h-6v3h2a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2h2v-3H5a2 2 0 0 1-2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span
                            class="flex-1 text-left text-gray-500 transition duration-75 ms-3 rtl:text-right group-hover:text-gray-100 whitespace-nowrap">Nilai</span>
                        <svg class="flex-shrink-0 w-3 h-3 text-gray-500 transition duration-75 group-hover:text-gray-100"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-Nilai" class="hidden py-2 space-y-2">
                        <li>
                            <a {{-- <a href="#" --}}
                                class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-500">Semester
                                1</a>
                        </li>
                        <li>
                            <a {{-- <a href="#" --}}
                                class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-500">Semester
                                2</a>
                        </li>
                        <li>
                            <a {{-- <a href="#" --}}
                                class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-500">Semester
                                3</a>
                        </li>
                        <li>
                            <a {{-- <a href="#" --}}
                                class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-500">Semester
                                4</a>
                        </li>
                        <li>
                            <a {{-- <a href="#" --}}
                                class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-500">Semester
                                5</a>
                        </li>
                        <li>
                            <a {{-- <a href="#" --}}
                                class="flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-gray-500">Semester
                                6</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    {{-- Add Flowbite Script --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</div>
