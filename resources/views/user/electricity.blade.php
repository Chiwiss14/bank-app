<x-app-layout>
    <div class="col-lg-9">
        <div class="profile-content">
            <h3 class="admin-heading">Buy Electricity</h3>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <form action="{{ route('vtpass.electricity') }}" method="POST">
                        @csrf
                        <label class="block">Meter Number</label>
                        <input type="text" name="meter_number" required class="w-full p-2 border rounded">

                        <label class="block mt-2">Meter Type</label>
                        <select name="meter_type" class="w-full p-2 border rounded">
                            <option value="prepaid">Prepaid</option>
                            <option value="postpaid">Postpaid</option>
                        </select>

                        <label class="block mt-2">Electricity Provider</label>
                        <select name="service_id" class="w-full p-2 border rounded">
                            <option value="portharcourt-electric">ph Electric</option>
                            <option value="ikeja-electric">Ikeja Electric</option>
                            <option value="eko-electric">Eko Electric</option>
                            <option value="abuja-electric">Abuja Electric</option>
                            <option value="kaduna-electric">Kaduna Electric</option>
                        </select>

                        <label class="block mt-2">Amount</label>
                        <input type="number" name="amount" required">

                        <label class="block mt-2">Phone Number</label>
                        <input type="text" name="phone" required class="w-full p-2 border rounded">

                        <button type="submit" class="mt-4 bg-yellow-500 text-red px-4 py-2 rounded">Pay Bill</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
