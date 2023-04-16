<x-layout>
    <x-slot name="title"><?php echo $title; ?></x-slot>
    <main class="inner-container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>

        <div class="pt-4 sm:pt-8 pb-8 px-4 lg:px-5 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow border rounded-lg">
                <div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow border rounded-lg">
                <div>
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </main>
</x-layout>
