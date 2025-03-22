<x-app-layout>
    <form action="{{ route('payment') }}" method="POST">
        @csrf
        <input type="number" name="amount" required placeholder="Enter amount">
        <input type="text" name="email" required placeholder="Enter email">

        <button type="submit">Deposit with Flutterwave</button>
    </form>

</x-app-layout>
