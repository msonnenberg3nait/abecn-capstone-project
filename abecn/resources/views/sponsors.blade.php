<x-layout>
    <x-slot name="title"><?php echo $title; ?></x-slot>
    <main>
        <section class="sponsors-banner" style="height:17rem;">
            <div class="sponsors-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full;">
                <div class="banner-text inner-container">
                    <h2>Sponsors</h2>
                </div>
            </div>
        </section>
        <div class="flex mb-12">
            <div class="search-filter-wrapper inner-container flex items-center align-center mb-9 mx-auto">
                <div class="max-w-lg mx-auto mb-6">
                    <form action="#" method="GET" class="sm:flex sm:gap-4">
                        <x-text-input type="text" name="search" id="search" placeholder="Search Sponsors" class="mb-3 sm:mb-0 block w-full bg-white text-sm" value="{{ request('search') }}" />
                        <x-primary-button>
                            {{ __('Search') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
        <div class="sponsors-wrapper inner-container mb-9">
            <section class="sponsor-card md:flex flex-wrap gap-4">
                @foreach ($sponsors as $sponsor)
                <div class="mx-auto">
                    <a href="/sponsors/{{ $sponsor->company_name }}">
                        <h3 class="text-center">{{ $sponsor->company_name }}</h3>
                        <img src="{{ $sponsor->img }}" alt="Photo">
                    </a>
                </div>
                @endforeach
            </section>
        </div>
        <div class="pagination mt-8 max-w-7xl mx-auto xl:px-8">
            {{ $sponsors->links() }}
        </div>
    </main>
</x-layout>
