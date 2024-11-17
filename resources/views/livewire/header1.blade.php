<!-- ========== HEADER ========== -->
{{-- <header class="sticky top-8 inset-x-0 flex flex-wrap z-50 w-full text-sm"> --}}
<header class="pt-8 inset-x-0 flex flex-wrap z-50 w-full text-sm">
    <nav
        class="relative max-w-6xl w-full bg-white border border-gray-200 rounded-[2rem] mx-2 py-3 px-4 sm:mx-auto dark:bg-neutral-900 dark:border-neutral-700">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="#" class="flex items-center" title="Data Pembangunan">
                    <img src="https://tabang.bekasikota.go.id/logo/hutkota.png" alt="Bappeda" class="h-28 w-auto sm:h-28">
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center gap-2 md:hidden">
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-orange-400 text-white hover:bg-orange-500 disabled:opacity-50 disabled:pointer-events-none">
                    Log in
                </button>

                <button type="button"
                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-xl border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:gap-x-4">
                <button type="button"
                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-orange-400 text-white hover:bg-orange-500 disabled:opacity-50 disabled:pointer-events-none">
                    Log in
                </button>
                <button type="button"
                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                    Kontak
                </button>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="navbar-collapse" class="hidden md:hidden mt-4 pb-2 overflow-hidden transition-all duration-300">
            <div class="flex flex-col gap-4 mt-4">
                <button type="button"
                    class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                    Kontak
                </button>
                <!-- Add additional mobile menu items here if needed -->
            </div>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->

<!-- Required JavaScript for the mobile menu toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('[data-hs-collapse]');
        const navbar = document.querySelector('#navbar-collapse');

        toggleButton.addEventListener('click', function() {
            navbar.classList.toggle('hidden');
            toggleButton.classList.toggle('hs-collapse-open');
        });
    });
</script>
