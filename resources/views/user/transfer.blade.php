<x-app-layout>
    <div class="max-w-lg mx-auto p-6 bg-white shadow rounded">
        <h2 class="text-lg font-bold mb-4">Transfer Money</h2>

        @if (session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="bg-red-500 text-white p-2 rounded mb-4">{{ session('error') }}</div>
        @endif

        <form action="{{ route('wallet.transfer') }}" method="POST">
            @csrf
            <label class="block">Recipient Email</label>
            <input type="email" name="recipient_email" required class="w-full p-2 border rounded">

            <label class="block mt-2">Amount</label>
            <input type="number" name="amount" required class="w-full p-2 border rounded">

            <label class="block mt-2">Enter PIN</label>
            <input type="password" name="pin" required class="w-full p-2 border rounded">

            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Transfer</button>
        </form>
    </div>
</x-app-layout>
w
