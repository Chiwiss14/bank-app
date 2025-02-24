<x-app-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Add New Bank Card</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bank-cards.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Card Holder Name</label>
                <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Card Number</label>
                <input type="text" name="card_number" maxlength="16" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Expiry Date</label>
                <input type="date" name="expiry_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Card Type</label>
                <select name="card_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
                    <option value="Visa">Visa</option>
                    <option value="MasterCard">MasterCard</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="is_active" class="form-checkbox text-green-500">
                    <span class="ml-2 text-gray-700">Active Card</span>
                </label>
            </div>

            <button type="submit" class="bg-blue-600 text-yellow px-4 py-2 rounded hover:bg-blue-800">Add Card</button>
        </form>
    </div>
</x-app-layout>
