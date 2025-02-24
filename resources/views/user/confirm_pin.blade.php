<x-app-layout>

    <div class="col-lg-9">
        <div class="profile-content">
            <h3 class="admin-heading">Set Transaction Pin</h3>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <form id="send-money" method="POST" action="{{ route('password.store') }}" class="form bg-offwhite py-5 ">
                        @csrf
                        <div class="text-center">
                            <h3 class="text-5 msg-header">Pin</h3>
                        </div>

                        <div class="form-group">
                            <label for="account">Password</label>
                            <input type="password"  class="form-control"
                                name="password" required placeholder="Account" />
                        </div>

                        <div class="form-group">
                            <label for="amount">Pin</label>
                            <input type="password"  class="form-control" required
                               name="pin" placeholder="Enter amount" />
                        </div>

                        <div class="form-group">
                            <label for="password">Confirm Pin</label>
                            <input type="password" name="pin_confirmation" class="form-control" required />
                        </div>

                        <button class="btn btn-danger" type="submit">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
