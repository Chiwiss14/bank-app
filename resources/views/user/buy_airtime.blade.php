<x-app-layout>
    <form method="POST" action="{{ route('airtime.purchase') }}">
        @csrf

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" class="form-control" placeholder="Enter phone number" required>

        <label for="network">Select Network:</label>
        <select name="network" class="form-control">
            <option value="mtn">MTN</option>
            <option value="airtel">Airtel</option>
            <option value="glo">Glo</option>
            <option value="9mobile">9Mobile</option>
        </select>

        <label for="amount">Amount:</label>
        <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>

        <label for="payment_method">Payment Method:</label>
        <select name="payment_method" class="form-control">
            <option value="wallet">Wallet</option>
            <option value="card">Credit/Debit Card</option>
            <option value="bank">Bank Transfer</option>
        </select>

        <button type="submit" class="btn btn-primary mt-3">Buy Airtime</button>
    </form>

</x-app-layout>
