<x-layout>
    <main>
        <div class="sponsors-banner mb-9" style="height:17rem;">
            <div class="sponsors-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full;"> 
                <div class="banner-text inner-container">
                    <h1>Sponsors</h1>
                </div>
            </div>
        </div>
        <div class="search-filter-wrapper inner-container flex items-center align-center">
            <x-search>
            </x-search>

            <x-filter>
            </x-filter>
        </div>
        <div class="sponsors-wrapper inner-container mb-9">
            <section class="sponsor-card">
                @foreach ($sponsors as $sponsor)
                <div class="mx-auto">
                    <a href="/sponsors/{{ $sponsor->company_name }}"><h3>{{ $sponsor->company_name }}</h3></a>
                    <img src="{{ $sponsor->img }}" alt="Photo">
                </div>
                @endforeach
            </section>
        </div>
    </main>
</x-layout>