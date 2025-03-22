<x-app-layout>
    <div class="col-lg-9">
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
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->user->name}}</td>
                           <td> {{ optional($transaction->transactionType)->name ?? 'Unknown Type' }}</td>
                            <td>{{ $transaction->amount }}</td>
                            <td>{{ ucfirst($transaction->status) }}</td>
                            <td>{{ $transaction->details }}</td>
                            <td>{{ $transaction->created_at->format('d M Y, H:i A') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
