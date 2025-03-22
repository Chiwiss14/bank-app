<x-app-layout>
    <div class="col-lg-9">
        <div class="profile-content">
            <h3 class="admin-heading">Buy Data</h3>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <form action="{{ route('vtpass.processNetwork') }}" method="POST">@csrf

                        <div class="form-group">
                            <label for="network">Select Network:</label>
                            <select name="network" class="form-control">
                                <option value="mtn-data">MTN</option>
                                <option value="airtel-data">Airtel</option>
                                <option value="glo-data">Glo</option>
                                <option value="9mobile-data">9Mobile</option>
                            </select>
                        </div>

                        {{-- <label class="block mt-2">Enter PIN</label>
                        <input type="password" name="pin" required class="w-full p-2 border rounded"> --}}

                        <button class="btn btn-primary" type="submit">Buy DATA</button>


                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
