<x-app-layout>
    <div class="col-lg-9">
        <div class="max-w-lg mx-auto p-6 bg-white shadow rounded">
            <h2 class="text-lg font-bold mb-4">Select Data Bundle</h2>
            <form action="{{ route('vtpass.buyData') }}" method="POST">
                @csrf
                <input type="hidden" name="network" value="{{ $network }}">
                <div class="form group mb-4">
                    <label class="block">Choose a Data Bundle:</label>
                    <select name="bundle" required class="w-full p-2 border rounded">
                        @foreach ($bundles as $bundle)
                            <option value="{{ $bundle['variation_code'] }}/{{ $bundle['variation_amount'] }}">
                                {{ $bundle['name'] }} - ₦{{ $bundle['variation_amount'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                    <label class="block mt-2">Phone Number</label>
                    <input type="number" name="phone" required class="w-full p-2 border rounded" placeholder="Enter your phone number">


                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Enter PIN</label>
                    <input type="password" name="pin" required placeholder="Enter your transaction PIN"
                        class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>

                <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Buy Data</button>
            </form>
        </div>
    </div>
</x-app-layout>
