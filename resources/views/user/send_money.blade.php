<x-app-layout>

    <div class="col-lg-9">
        <div class="profile-content">
            <h3 class="admin-heading">Send Money</h3>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <form id="send-money" method="POST" action="{{ route('transfer.store') }}" class="form bg-offwhite py-5 ">
                        @csrf
                      @foreach ($errors->all() as $error )
                        <p class="text-danger">{{ $error }}</p>

                      @endforeach

                        <div class="text-center">
                            <h3 class="text-5 msg-header">Personal Details</h3>
                            <p class="text-4 text-center">Send your money anytime, anywhere in the world.</p>
                        </div>

                        <div class="form-group">
                            <label for="account">Recipient Details</label>
                            <input type="text"  class="form-control"
                                name="bank_account" required placeholder="Account" />
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number"  class="form-control" required
                               name="amount" placeholder="Enter amount" />
                        </div>

                        <div class="form-group">
                            <label for="password">Input Password</label>
                            <input type="password" name="pin" class="form-control" />
                        </div>

                        <button class="btn btn-danger" type="submit">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
