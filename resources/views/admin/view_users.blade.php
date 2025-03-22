<x-admin-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">All Users</h2>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
            <table class="min-w-full border border-gray-300 rounded-lg">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border">ID</th>
                        <th class="py-2 px-4 border">Name</th>
                        <th class="py-2 px-4 border">Email</th>
                        <th class="py-2 px-4 border">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border text-center">{{ $user->id }}</td>
                            <td class="py-2 px-4 border text-center">{{ $user->name }}</td>
                            <td class="py-2 px-4 border text-center">{{ $user->email }}</td>
                            <td class="py-2 px-4 border text-center">{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
