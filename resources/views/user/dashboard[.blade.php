<x-app-layout>
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
                                    <a class="nav-link" href="{{ route('dashboard') }}"><i
                                            class="fas fa-tachometer-alt"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pay') }}"><i class="fas fa-plus"></i>Deposit
                                        Money</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.send') }}"><i
                                            class="far fa-paper-plane"></i>Send Money</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.airtime') }}"><i
                                            class="fas fa-wallet"></i>Buy Airtime</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('vtpass.selectNetwork') }}"><i
                                            class="fas fa-wallet"></i>Buy Data</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('wallet.show') }}"><i
                                            class="fas fa-cog"></i>Balance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.confirm_pin') }}"><i
                                            class="fas fa-cog"></i>Set Pin</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.transaction_history') }}"><i
                                            class="fas fa-cog"></i>Transaction History</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('electricity.show') }}"><i
                                            class="fas fa-cog"></i>Buy Power</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </aside>
                <!-- Left Panel End -->

            </div>
        </div>
    </div>
    <!-- Content end -->
</x-app-layout>
