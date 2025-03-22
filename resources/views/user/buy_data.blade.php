<x-app-layout>
    <div class="col-lg-9">
        <div class="profile-content">
            <h3 class="admin-heading">Buy Data</h3>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <form action="{{ route('data.store') }}"  method="POST">@csrf

                      <label for="phone">Phone Number:</label>
                        <input type="number" name="phone_number" class="form-control" placeholder="Enter phone number" required
                        required maxlength="11" minlength="11">


                        <label for="network">Select Network:</label>
                        <select name="network" class="form-control">
                            <option value="mtn">MTN</option>
                            <option value="airtel">Airtel</option>
                            <option value="glo">Glo</option>
                            <option value="9mobile">9Mobile</option>
                        </select>

                        <label for="amount">Amount:</label>
                        <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>

                        <label for="amount">Variation Code:</label>
                        <input type="text" name="code" class="form-control" placeholder="Enter variation" required>


                        <label for="payment_method">Payment Method:</label>
                        <select name="payment_method" class="form-control">
                            <option value="wallet">Wallet</option>
                            <option value="card">Credit/Debit Card</option>
                            <option value="bank">Bank Transfer</option>
                        </select>


                       <button class="btn btn-primary" type="submit" >Buy DATA</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
