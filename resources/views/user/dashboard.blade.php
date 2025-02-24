<x-app-layout>
    <!-- Admin Hero section-->
    <div class="hero-section">
        <div class="container">
            <div class="row profile-complete-area">
                <div class="col">
                    <div class="progress" data-percentage="50">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                            <div class="profile-thumb mt-3 mb-4">
                                <img class="rounded-circle" src="/admin_assets/images/profile.jpg" alt="" />
                                <div class="profile-thumb-edit verify-icon" data-toggle="tooltip"
                                    title="Profile Verified">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="profile-name">Jhone Doue</p>
                </div>


                <div class="col">
                    <a href="{{ route('bank-cards.index') }}">
                        <div class="profile-item">
                            <i class="fas fa-credit-card bg-icon"></i>
                            <i class="far fa-circle Verified-icon"></i>
                            <p class="title">Add Card</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Admin End of Hero section-->



    <!-- Admin Content Section  -->
    <div id="content" class="py-4">
        <div class="container">
            <div class="row">
                <!-- Left sidebar -->
                <aside class="col-lg-3 sidebar">
                    <div class="widget admin-widget p-0">
                        <div class="Profile-menu">
                            <ul class="nav secondary-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="dashboard.html"><i
                                            class="fas fa-tachometer-alt"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.html"><i
                                            class="fab fa-autoprefixer"></i>Account Balance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile-bank.html"><i class="fas fa-university"></i>Buy Airtime
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile-cards.html"><i class="fas fa-building"></i>Pay Bills
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="deposit-money.html"><i class="fas fa-plus"></i>Deposit
                                        Money</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="send-money.html"><i class="far fa-paper-plane"></i>Send
                                        Money</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="request-money.html"><i
                                            class="fas fa-piggy-bank"></i>Request Money</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="withdraw-money.html"><i
                                            class="fas fa-wallet"></i>Withdarw Money</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="transactions.html"><i
                                            class="fas fa-list-ul"></i>Transaction History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile-notifications.html"><i
                                            class="fas fa-cog"></i>Setting</a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="widget admin-widget">
                        <i class="fas fa-comments admin-overlay-icon"></i>
                        <h2>Need Help?</h2>
                        <p>
                            Have questions or concerns regrading your account?<br />
                            Our experts are here to help!.
                        </p>
                        <a href="#" class="btn btn-default btn-center"><span>Start Chat</span></a>
                    </div>
                </aside>
                <!-- Left Panel End -->

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
                                    <div class="col"><span class="">Date</span></div>
                                    <div class="col">Description</div>
                                    <div class="col text-center">Status</div>
                                    <div class="col text-center">Fee</div>
                                    <div class="col">Amount</div>
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
                                            <span class="date">17</span>
                                            <span class="pay-month">Jan</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">Withdraw Via DBBL Bank</span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status text-warning"><i class="fas fa-ellipsis-h"
                                                    data-toggle="tooltip"
                                                    data-original-title="In Progress"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $342</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="transactions-details.html">
                                    <div class="row">
                                        <div class="col pay-date">
                                            <span class="date">15</span>
                                            <span class="pay-month">APR</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">Payment Received From Envato </span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status text-success"><i data-toggle="tooltip"
                                                    data-original-title="Completed"
                                                    class="fas fa-check-circle"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">+ $912</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="transactions-details.html">
                                    <div class="row">
                                        <div class="col pay-date">
                                            <span class="date">25</span>
                                            <span class="pay-month">MAR</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">Payment Received From Upwork </span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status text-danger"><i data-toggle="tooltip"
                                                    data-original-title="Cancelled"
                                                    class="fas fa-times-circle"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">+ $1231</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="transactions-details.html">
                                    <div class="row">
                                        <div class="col pay-date">
                                            <span class="date">15</span>
                                            <span class="pay-month">APR</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">Payment Received From Upwork </span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status text-warning"><i data-toggle="tooltip"
                                                    data-original-title="Completed"
                                                    class="fas fa-exclamation-circle"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">+ $562</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="transactions-details.html">
                                    <div class="row">
                                        <div class="col pay-date">
                                            <span class="date">15</span>
                                            <span class="pay-month">APR</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">Fiverr Pty Ltd</span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status"><i class="fas fa-ellipsis-h"
                                                    data-toggle="tooltip"
                                                    data-original-title="In Progress"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">+ $234</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="transactions-details.html">
                                    <div class="row">
                                        <div class="col pay-date">
                                            <span class="date">15</span>
                                            <span class="pay-month">APR</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">Withdraw to DBBL Bank </span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status"><i class="fas fa-ellipsis-h"
                                                    data-toggle="tooltip"
                                                    data-original-title="In Progress"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $2562</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="transactions-details.html">
                                    <div class="row">
                                        <div class="col pay-date">
                                            <span class="date">15</span>
                                            <span class="pay-month">APR</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">Payment Received From Envato</span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status text-success"><i data-toggle="tooltip"
                                                    data-original-title="Completed"
                                                    class="fas fa-check-circle"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">+ $562</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="transactions-details.html">
                                    <div class="row">
                                        <div class="col pay-date">
                                            <span class="date">15</span>
                                            <span class="pay-month">APR</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">Gas Bill Pay</span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status text-success"><i data-toggle="tooltip"
                                                    data-original-title="Completed"
                                                    class="fas fa-check-circle"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $562</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="transactions-details.html">
                                    <div class="row">
                                        <div class="col pay-date">
                                            <span class="date">15</span>
                                            <span class="pay-month">APR</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">Water Bill Payment</span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status"><i class="fas fa-ellipsis-h"
                                                    data-toggle="tooltip"
                                                    data-original-title="In Progress"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $562</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="transactions-details.html">
                                    <div class="row">
                                        <div class="col pay-date">
                                            <span class="date">15</span>
                                            <span class="pay-month">APR</span>
                                        </div>
                                        <div class="col">
                                            <span class="name">landline Bill Pay</span>
                                        </div>
                                        <div class="col text-center">
                                            <span class="payments-status text-danger"><i data-toggle="tooltip"
                                                    data-original-title="Cancelled"
                                                    class="fas fa-times-circle"></i></span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $0.2</span>
                                        </div>
                                        <div class="col">
                                            <span class="payment-amaount">- $562</span>
                                            <span class="currency">(USD)</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="trancstion-more">
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span>
                                            </div>
                                            <div class="col">
                                                <span class="name">Payment Received From Envato</span>
                                            </div>
                                            <div class="col text-center">
                                                <span class="payments-status text-success"><i data-toggle="tooltip"
                                                        data-original-title="Completed"
                                                        class="fas fa-check-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">+ $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span>
                                            </div>
                                            <div class="col">
                                                <span class="name">Gas Bill Pay</span>
                                            </div>
                                            <div class="col text-center">
                                                <span class="payments-status text-success"><i data-toggle="tooltip"
                                                        data-original-title="Completed"
                                                        class="fas fa-check-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span>
                                            </div>
                                            <div class="col">
                                                <span class="name">Water Bill Payment</span>
                                            </div>
                                            <div class="col text-center">
                                                <span class="payments-status"><i class="fas fa-ellipsis-h"
                                                        data-toggle="tooltip"
                                                        data-original-title="In Progress"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Transaction List End -->

                        <!-- Transaction Details Modal  -->
                        <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered details-area" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal_header">
                                            <span class="status bg-success">Paid</span>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="content-area">
                                                        <i class="fas fa-building"></i>
                                                        Desco Govt Water Ltd.
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="content-area text-right">
                                                        <div class="price">$559</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-content-area">
                                            <h5 class="transcation-heading">Transaction Details</h5>
                                            <div class="transaction-area">
                                                <div class="items">
                                                    <div class="row">
                                                        <div class="col">
                                                            <span class="name">Gas Bill Paid By:</span>
                                                        </div>
                                                        <div class="col">
                                                            <span class="decs">Jhon Due</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="items">
                                                    <div class="row">
                                                        <div class="col">
                                                            <span class="name">Transaction ID:</span>
                                                        </div>
                                                        <div class="col">
                                                            <span class="decs">8974HSDB32056KSDS</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="items">
                                                    <div class="row">
                                                        <div class="col">
                                                            <span class="name">Transaction ID:</span>
                                                        </div>
                                                        <div class="col">
                                                            <span class="decs">8974HSDB32056KSDS</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="items">
                                                    <div class="row">
                                                        <div class="col">
                                                            <span class="name">Description:</span>
                                                        </div>
                                                        <div class="col">
                                                            <span class="decs">This bill pay via Credit Card</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Transaction Modal End -->

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
            </div>
        </div>
    </div>
    <!-- Content end -->
</x-app-layout>
