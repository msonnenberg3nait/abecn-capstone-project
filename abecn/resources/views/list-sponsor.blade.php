<x-app-layout>
    <main class="max-w-7xl mx-auto mt-6 sm:mt-0 px-6 sm:px-8 lg:px-10 pb-16 pt-16 md:pt-6 md:pb-32">
        <div class="px-4 lg:px-5 py-8 registration-form">
            <div class="p-4 sm:p-8 bg-white shadow border rounded-lg">
                <div>
                    <h2 class="text-3xl font-medium">
                        {{ __('Sponsors') }}
                    </h2>
                </div>

                @foreach ($sponsors as $sponsor)
                <div class="p-4 shadow border rounded mt-4 flex flex-wrap justify-between items-start">
                    <div>
                        <h3 class="m-0"><?php echo $sponsor['company_name']; ?></h3>
                        <p class="text-xs"><?php echo $sponsor['primary_address'].' | '.$sponsor['city'].' | '.$sponsor['postal'] ?></p>
                        <div class="text-xs flex flex-wrap">
                            <p class="mr-6"><strong>Contact:</strong> <?php echo $sponsor['company_contact'] ?></p>
                            <p class="mr-6"><strong>Phone:</strong> <?php echo $sponsor['company_contact'] ?></p>
                            <p class="mr-6"><strong>Email:</strong> <?php echo $sponsor['email'] ?></p>
                        </div>
                    </div>
                    <a href="/dashboard/sponsors/edit/<?php echo $sponsor['id']; ?>" class="text-sm rounded appearance-none border border-gray-200 text-white bg-blue-800 py-2 px-6 leading-tight focus:outline-none focus:bg-blue-800 focus:border-gray-500">EDIT</a>
                </div>
                @endforeach

            </div>
        </div>
    </main>
</x-app-layout>
