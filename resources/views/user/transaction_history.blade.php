<x-app-layout>

    <div class="container">
        <h2>My Transactions</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Details</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->type_id }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ ucfirst($transaction->status) }}</td>
                        <td>{{ $transaction->details }}</td>
                        <td>{{ $transaction->created_at->format('d M Y, H:i A') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
