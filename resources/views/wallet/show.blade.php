<x-app-layout>

    <div class="container">
        <h2>Your Wallet</h2>
        <p>Balance: ₦{{ number_format($balance, 2) }}</p>

        <form action="{{ route('wallet.deposit') }}" method="POST">
            @csrf
            <input type="number" name="amount" placeholder="Enter amount" required>
            <button type="submit">Deposit</button>
        </form>

        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
    </div>

</x-app-layout>
