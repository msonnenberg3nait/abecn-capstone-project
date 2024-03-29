<x-app-layout>
    <main class="max-w-none mt-4 md:mt-0 px-6 sm:px-8 lg:px-10 pb-6 md:py-10">

        <div class="max-w-lg mx-auto mb-6">
            <form action="#" method="GET" class="sm:flex sm:gap-4">
                <x-text-input type="text" name="search" id="search" placeholder="Search Users" class="mb-3 sm:mb-0 block w-full bg-white text-sm" value="{{ request('search') }}" />
                <x-primary-button>
                    {{ __('Search') }}
                </x-primary-button>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Display Name</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Email</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Name</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">DOB</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Organization</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Specialty</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Phone</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">City</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Registered</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Group</th>
                        <th scope="col" class="px-4 py-2 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Delete User</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <?php
                            if (!function_exists('formatThisDate')) {
                                function formatThisDate($date) {
                                    return date("F j, Y", strtotime($date));
                                }
                            }

                            $dob = $user['dob'];
                            $created_at = $user['created_at'];
                            $dob = formatThisDate($dob);
                            $created_at = formatThisDate($created_at);
                        ?>
                    <tr>
                        <td class="px-4 py-2 md:py-3 whitespace-nowrap text-xs"><?php echo $user['display_name']; ?></td>
                        <td class="px-4 py-2 md:py-3 whitespace-nowrap text-xs"><?php echo $user['email']; ?></td>
                        <td class="px-4 py-2 md:py-3 whitespace-nowrap text-xs"><?php echo $user['first_name'].' '.$user['last_name']; ?></td>
                        <td class="px-4 py-2 md:py-3 whitespace-nowrap text-xs"><?php echo $dob; ?></td>
                        <td class="px-4 py-2 md:py-3 whitespace-nowrap text-xs"><?php echo $user['organization']; ?></td>
                        <td class="px-4 py-2 md:py-3 whitespace-nowrap text-xs"><?php echo $user['specialty']; ?></td>
                        <td class="px-4 py-2 md:py-3 whitespace-nowrap text-xs"><?php echo $user['phone']; ?></td>
                        <td class="px-4 py-2 md:py-3 whitespace-nowrap text-xs"><?php echo $user['pcity']; ?></td>
                        <td class="px-4 py-2 md:py-3 whitespace-nowrap text-xs"><?php echo $created_at; ?></td>
                        <td x-data="{ isOpen: false }" class="px-4 py-2 md:py-3 whitespace-nowrap text-xs">
                            <form method="post" action="{{ route('group.update', ['user' => $user['id']]) }}" onchange="this.submit()" class="inline-block relative">
                                @csrf
                                @method('patch')
                                <select name="group_id" class="<?php if ($user['group_id'] === 1) { echo "bg-red-300"; } else { echo "bg-blue-300"; } ?> text-sm rounded appearance-none border border-gray-200 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="2">User</option>
                                    <option value="1" <?php if ($user['group_id'] === 1) { echo "selected"; } ?>>Admin</option>
                                </select>
                            </form>
                        </td>
                        <td x-data="{ submitForm: false }" class="px-4 py-2 md:py-3 whitespace-nowrap text-xs relative">
                            <form @submit.prevent="submitForm = true" method="post" action="{{ route('user.destroy', ['user' => $user['id']]) }}" class="inline-block relative" x-ref="form">
                                @csrf
                                @method('delete')
                                <button x-on:click="if (!window.confirm('Are you sure you want to delete user <?php echo $user['display_name'] ?>? This action cannot be undone. Please verify before pressing OK.')) { $event.preventDefault() } else { submitForm = true; $refs.form.submit(); }" type="submit" id="destroy-submit" name="destroy-submit" class="text-sm rounded appearance-none border border-gray-200 text-white bg-red-800 py-2 px-4 leading-tight focus:outline-none focus:bg-red-800 focus:border-gray-500">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="pagination mt-8 max-w-7xl mx-auto xl:px-8">
            {{ $users->links() }}
        </div>

    </main>
</x-app-layout>
