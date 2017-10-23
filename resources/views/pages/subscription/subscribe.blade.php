@extends('layouts.app')

@section('page-title', 'Quick Fruits || Subscribe')


@section('content')

    <div class="container" id="subscribe-section">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="panel panel-primary">

                    <div class="panel-heading text-center">
                        <h4 class="panel-title ">New Subscription</h4>
                    </div>

                    <div class="panel-body" id="subscriptionFormApp">
                        <form method="POST" action="{{route('pay')}}" class="form-horizontal" id="subscription-form">
                            {{ csrf_field() }}

                            <!-- Hidden Fields -->
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}


                            <!-- Customer Name -->
                            <div class="form-group">
                                <label for="customer_name" class="col-sm-4 control-label">Customer Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="customer_name"
                                           placeholder="We would love to know your name" value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>

                            <!-- Customer Email -->
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">Email</label> {{-- required --}}
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email"
                                           placeholder="We need to send you emails" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>

                            <!-- Fruit Plan -->
                            <div class="form-group">
                                <label for="fruit_plan" class="col-sm-4 control-label">Fruit Plan</label>
                                <div class="col-sm-8">
                                    <select name="plan" id="" class="form-control" required>
                                        <option value="PLN_nlfswp55b6jmgej">&#8358;7,000 Monthly</option>
                                        <option value="PLN_l429yyfwbw1lgby">&#8358;10,000 Monthly</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Number Of Months -->
                            <div class="form-group">
                                <label for="plan_duration" class="col-sm-4 control-label">Plan Duration</label>
                                <div class="col-sm-8">
                                    <input type="number" name="invoice_limit" class="form-control"
                                           placeholder="How many months are you subscribing for?" min="1" required>
                                    <h6 class="text-muted text-xs">How many months do you want this plan to run for?</h6>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="panel-footer ">
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <button class="btn btn-danger">Cancel</button>
                            </div>
                            <div class="col-xs-6 text-right">
                                <button class="btn btn-primary" type="submit" form="subscription-form">Subscribe</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

@endsection