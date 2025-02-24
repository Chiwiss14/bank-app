<x-app-layout>

    <div class="col-lg-9">
        <div class="profile-content">
            <h3 class="admin-heading">Deposit Money</h3>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <form id="deposit-send-money" method="post" class="form bg-offwhite">
                        <div class="form-group">
                            <label for="deposit-money">Amount</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text currency-icon">$</span></div>
                                <input type="text" class="form-control" data-deposit="deposit-money" id="deposit-money" value="1,000.00" placeholder="" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <select
                                            id="youSendCurrency"
                                            data-style="custom-select"
                                            data-container="body"
                                            data-live-search="true"
                                            class="selectpicker"
                                            required=""
                                        >
                                            <optgroup label="Popular Currency">
                                                <option
                                                    data-icon="currency-flag currency-flag-usd mr-1"
                                                    data-subtext="United States dollar"
                                                    selected="selected"
                                                    value=""
                                                >
                                                    NGR
                                                </option>
                                                <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                                                <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                                            </optgroup>
                                            <option value="" data-divider="true">divider</option>
                                            <optgroup label="Other Currency">
                                                <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="">
                                                    AED
                                                </option>
                                                <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="">ARS</option>
                                                <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                                                <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="">BDT</option>
                                                <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="">BGN</option>
                                                <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="">BRL</option>
                                                <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="">CAD</option>
                                                <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc" value="">CHF</option>
                                                <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso" value="">CLP</option>
                                                <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan" value="">CNY</option>
                                                <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna" value="">CZK</option>
                                                <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone" value="">DKK</option>
                                                <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound" value="">EGP</option>
                                                <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                                                <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="">GBP</option>
                                                <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari" value="">GEL</option>
                                                <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi" value="">GHS</option>
                                                <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar" value="">HKD</option>
                                                <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna" value="">HRK</option>
                                                <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint" value="">HUF</option>
                                                <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah" value="">IDR</option>
                                                <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel" value="">ILS</option>
                                                <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="">INR</option>
                                                <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen" value="">JPY</option>
                                                <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling" value="">KES</option>
                                                <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won" value="">KRW</option>
                                                <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee" value="">LKR</option>
                                                <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham" value="">MAD</option>
                                                <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso" value="">MXN</option>
                                                <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit" value="">MYR</option>
                                                <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="">NGN</option>
                                                <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone" value="">NOK</option>
                                                <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee" value="">NPR</option>
                                                <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar" value="">NZD</option>
                                                <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol" value="">PEN</option>
                                                <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso" value="">PHP</option>
                                                <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee" value="">PKR</option>
                                                <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty" value="">PLN</option>
                                                <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu" value="">RON</option>
                                                <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble" value="">RUB</option>
                                                <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona" value="">SEK</option>
                                                <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar" value="">SGD</option>
                                                <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht" value="">THB</option>
                                                <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira" value="">TRY</option>
                                                <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia" value="">UAH</option>
                                                <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling" value="">UGX</option>
                                                <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong" value="">VND</option>
                                                <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand" value="">ZAR</option>
                                            </optgroup>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea
                                class="form-control p-3"
                                rows="4"
                                id="description"
                                required=""
                                placeholder="Payment Description"
                                spellcheck="false"
                            ></textarea>
                        </div>
                        <div class="payment">
                            <h3 class="title">Payment Methods</h3>
                            <a href="#" class="pbtn btn-link" data-id="add-new-card"><i class="fas fa-plus"></i> New Card</a>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-payment selected">
                                        <img src="images/payment-1.png" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-payment">
                                        <img src="images/payment-2.png" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-payment">
                                        <img src="images/payment-3.png" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-payment">
                                        <img src="images/payment-4.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add New Card info  -->
                        <div id="add-new-card" class="accord bg-offwhite mt-3 p-3 shadow">
                            <div class="content-edit-area">
                                <div class="edit-header">
                                    <h5 class="title">Add a Card</h5>
                                    <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="edit-content">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="your-card-provider">Your Card Provider</label>
                                                <select id="your-card-provider" class="custom-select" required="">
                                                    <option value="01">Your Card Provider</option>
                                                    <option value="02">Visa</option>
                                                    <option value="03">MasterCard</option>
                                                    <option value="04">American Express</option>
                                                    <option value="05">Discover</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="you-card-type">Card Type</label>
                                                <select id="you-card-type" class="custom-select" required="">
                                                    <option value="">Card Type</option>
                                                    <option value="debit">Debit</option>
                                                    <option value="Credit">Credit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cardNumber">Card Number</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            data-bv-field="cardnumber"
                                            id="cardNumber"
                                            required
                                            value=""
                                            placeholder="Card Number"
                                        />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="expiryDate">Expiry Date</label>
                                                <input
                                                    id="expiryDate"
                                                    type="text"
                                                    class="form-control"
                                                    data-bv-field="expiryDate"
                                                    required
                                                    value=""
                                                    placeholder="MM/YY"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="cvvNumber"
                                                    >CVV
                                                    <span
                                                        class="text-info ml-1"
                                                        data-toggle="tooltip"
                                                        data-original-title="For Visa/Mastercard, the three-digit CVV number is printed on the signature panel on the back of the card immediately after the card's account number. For American Express, the four-digit CVV number is printed on the front of the card above the card account number."
                                                        ><i class="fas fa-question-circle"></i></span
                                                ></label>
                                                <input
                                                    id="cvvNumber"
                                                    type="password"
                                                    class="form-control"
                                                    data-bv-field="cvvnumber"
                                                    required
                                                    value=""
                                                    placeholder="CVV (3 digits)"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="edit-card-holder-name">Card Holder Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    data-card-form="edit-card-holder-name"
                                                    id="edit-card-holder-name"
                                                    required
                                                    placeholder="Card Holder Name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Security question</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Security question" />
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-default btn-center btn-block">
                                        <span class="bh"></span>
                                        <span>Add Card</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Add New Card info End -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-left"><b>Transactions fees </b></p>
                            </div>
                            <div class="col-md-6">
                                <div class="text-right">
                                    <span class="bg-success free-charge">Free</span>
                                    <del>1.00 USD</del>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-left"><b>You'll deposit</b></p>
                            </div>
                            <div class="col-md-6">
                                <span class="float-right">1,000.00 USD</span>
                            </div>
                        </div>
                        <ul class="pager mt-4">
                            <li>&nbsp;</li>
                            <li>
                                <a href="deposit-money-confirm.html" class="btn btn-default mr-0">
                                    <span class="bh"></span>
                                    <span>Next</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
