@extends('main')
@section('title','Giỏ Hàng cùa bạn')
@section('content')
    @if(Cart::count()==0)
        Chưa có giỏ hàng
    @else
        @php
            $stt=1;
        @endphp
    <div class="privacy about">
        <h3>Chec<span>kout</span></h3>

        <div class="checkout-right">
            <h4>Your shopping cart contains: <span>{{Cart::count()}} Products</span></h4>
            <table class="timetable_sub">
                <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Product</th>
                    <th>Quality</th>
                    <th>Product Name</th>

                    <th>Price</th>
                    <th>Remove</th>
                </tr>
                </thead>
                    <tbody>
                    @foreach(Cart::content() as $cart)
                        <tr class="rem1">
                            <td class="invert">{{$stt}}</td>
                            <td class="invert-image"><a href="single.html"><img src="{{ asset('images/san_pham/' . $cart->options->img) }}" alt=" " class="img-responsive hinh-gio-hang"></a></td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value"><span>{{$cart->qty}}</span></div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">{{$cart->name}}</td>
                            <td class="invert">{{number_format($cart->price*$cart->qty)}} đ</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close1"> </div>
                                </div>
                            </td>
                        </tr>
                        @php
                            $stt++;
                        @endphp
                    @endforeach
                    </tbody>
            </table>
        </div>
        <div class="checkout-left">
            <div class="col-md-4 checkout-left-basket">
                <h4>Continue to basket</h4>
                <ul>
                    <li>Total <i>-</i> <span>{{Cart::total()}}</span></li>
                </ul>
            </div>
            <div class="col-md-8 address_form_agile">
                <h4>Add a new Details</h4>
                <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                    <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                        <div class="information-wrapper">
                            <div class="first-row form-group">
                                <div class="controls">
                                    <label class="control-label">Full name: </label>
                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                </div>
                                <div class="w3_agileits_card_number_grids">
                                    <div class="w3_agileits_card_number_grid_left">
                                        <div class="controls">
                                            <label class="control-label">Mobile number:</label>
                                            <input class="form-control" type="text" placeholder="Mobile number">
                                        </div>
                                    </div>
                                    <div class="w3_agileits_card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">Landmark: </label>
                                            <input class="form-control" type="text" placeholder="Landmark">
                                        </div>
                                    </div>
                                    <div class="clear"> </div>
                                </div>
                                <div class="controls">
                                    <label class="control-label">Town/City: </label>
                                    <input class="form-control" type="text" placeholder="Town/City">
                                </div>
                                <div class="controls">
                                    <label class="control-label">Address type: </label>
                                    <select class="form-control option-w3ls">
                                        <option>Office</option>
                                        <option>Home</option>
                                        <option>Commercial</option>

                                    </select>
                                </div>
                            </div>
                            <button class="submit check_out">Delivery to this Address</button>
                        </div>
                    </section>
                </form>
                <div class="checkout-right-basket">
                    <a href="payment.html">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                </div>
            </div>

            <div class="clearfix"> </div>

        </div>

    </div>
    @endif
    @endsection