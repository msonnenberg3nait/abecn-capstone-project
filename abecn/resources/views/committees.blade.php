<x-layout>
    <main>
        <section class="committees-banner w-full" style="height:17rem;">
            <div class="committees-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full">
            <div class="banner-text inner-container">
                <h2>Committees</h2>
            </div>
        </section>

        <section>
            <div class="publication inner-container md:flex gap-6">
                <div class="publication-text basis-1/2">
                    <h3>Publication Committee</h3>
                    <hr class="text-border w-[10%] mb-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="publication-img basis-1/2">
                    <img src="{{ asset('img/3-coworkers-talking.webp') }}" alt="Three people in suits discussing">
                </div>
            </div>
        </section>
        <section>
            <div class="casual-nights inner-container md:flex flex-row-reverse gap-6">
                <div class="casual-nights-text basis-1/2">
                    <h3>Casual Nights Committee</h3>
                    <hr class="text-border w-[10%] mb-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="casual-nights-img basis-1/2">
                    <img src="{{ asset('img/group-laughing.webp') }}" alt="View of two laptops and two people reviewing documents together">
                </div>
            </div>
        </section>
    </main>
</x-layout>