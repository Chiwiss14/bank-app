<x-app-layout>
    <div class="col-lg-9">
        <div class="profile-content">
            <h3 class="admin-heading">Buy Airtime</h3>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <form action="{{ route('airtime.store') }}" method="POST">@csrf

                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach

                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="number" name="phone_number" class="form-control"
                                placeholder="Enter phone number" required required>
                        </div>

                        <div class="form-group">
                            <label for="network">Select Network:</label>
                            <select name="network" class="form-control">
                                <option value="mtn">MTN</option>
                                <option value="airtel">Airtel</option>
                                <option value="glo">Glo</option>
                                <option value="9mobile">9Mobile</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="number" name="amount" class="form-control" placeholder="Enter amount"
                                required>

                        </div>

                        <div class="form-group">
                            <label for="pin">Transaction Pin</label>
                            <input type="password" name="pin" class="form-control" id="pin" required maxlength="4" />
                        </div>


                        <button class="btn btn-danger" type="submit">Buy Airtime</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
