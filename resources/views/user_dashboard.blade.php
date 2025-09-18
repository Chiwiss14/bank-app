<x-app-layout>
    <!-- Middle Panel  -->
    <div class="col-lg-9">
        <div class="profile-content">
            <h3 class="admin-heading bg-offwhite">
                <p>Recent Activity</p>
                <span>Roysha Activity</span>
            </h3>

            <!-- Admin Heading Title  -->
            <div class="transaction-title bg-offwhite">
                <div class="items">
                    <div class="row">
                        <div class="col">Account Balance</div>
                    </div>
                </div>
            </div>
            <!-- Admin Heading Title End -->

            <!-- Transaction List -->
            <div class="transaction-area">
                <div class="items">
                    <a href="transactions-details.html">
                        <div class="row">
                            <div class="col pay-date">
                                <h3>Wallet Balance: ₦{{ number_format(auth()->user()->balance, 2) }}</h3>

                            </div>

                        </div>
                    </a>
                </div>

            </div>
            <!-- Transaction List End -->



            <div class="row mt-3 py-4">
                <div class="col text-left">
                    <a href="history.html" class="btn btn-default">View All
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <div class="col text-right">
                    <button class="btn btn-default mr-0 load-more-btn">
                        <span>Show more</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Recent Activity End -->
    </div>
    <!-- Middle Panel End -->
</x-app-layout>
