<x-layout>
    <div class="sponsor-page">
        <h2>Sponsors</h2>
        <div class="search-filter-wrapper">
            <x-search>
            </x-search>

            <x-filter>
            </x-filter>
        </div>
        <div class="sponsors-wrapper">
            <section class="sponsor-card">
                @foreach ($sponsors as $sponsor)
                    <a href="/sponsors/{{ $sponsor->company_name }}"><h3>{{ $sponsor->company_name }}</h3></a>
                    <img src="{{ $sponsor->img }}" alt="Photo">
                @endforeach
            </section>
        </div>
    </div>
</x-layout>