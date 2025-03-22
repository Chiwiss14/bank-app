<x-admin-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">All Transactions</h2>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
            <table class="min-w-full border border-red-300 rounded-lg">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border">ID</th>
                        <th class="py-2 px-4 border">User</th>
                        <th class="py-2 px-4 border">Amount</th>
                        <th class="py-2 px-4 border">Type</th>
                        <th class="py-2 px-4 border">Status</th>
                        <th class="py-2 px-4 border">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr class="hover:bg-gray-100 text-center">
                            <td class="py-2 px-4 border">{{ $transaction->id }}</td>
                            <td class="py-2 px-4 border">{{ $transaction->user->name }}</td>
                            <td class="py-2 px-4 border">#{{($transaction->amount) }}</td>
                            <td class="py-2 px-4 border">{{ ucfirst($transaction->TransactionType->name) }}</td>
                            <td class="py-2 px-4 border">{{ $transaction->status }}"></td>

                            <td class="py-2 px-4 border">{{ $transaction->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
