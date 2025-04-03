<x-guest-layout>
    <!-- Register In start -->
    <section class="sign-in-up register">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-content">
                            <div class="section-header">
                                <h5 class="sub-title">The Power of Financial Freedom</h5>
                                <h2 class="title">Let’s Get Started!</h2>
                                <p>Please enter your email address to start your online application.</p>
                            </div>

                            @foreach ($errors->all() as $err)
                            <p class="text-center text-danger">{{ $err }}</p>
                            @endforeach

                            <form method="POST" action="{{ route('admin.register') }}">
                                @csrf
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="first_name">First Name</label>
                                            <input type="text" id="first_name" name="name" placeholder="John"
                                                required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <!-- Email -->
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email"
                                                placeholder="Your email ID here" required>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password"
                                                placeholder="Enter password" required>
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" id="password_confirmation"
                                                name="password_confirmation" placeholder="Confirm password" required>
                                        </div>
                                    </div>

                                    <!-- Terms Agreement -->
                                    <div class="col-12">
                                        <div class="single-input">
                                            <p>
                                                By clicking submit, you agree to
                                                <span>Bankio's Terms of Use, Privacy Policy, E-sign,</span> &
                                                <span>Communication Authorization.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="btn-area">
                                    <button class="cmn-btn" type="submit">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register In end -->
</x-guest-layout>
