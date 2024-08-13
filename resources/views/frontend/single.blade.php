<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Snippet - BBBootstrap</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src="{{ asset('backend/assets/js/coutomFroPro.js') }}"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

        body {
            background-color: #eee;
            font-family: "Poppins", sans-serif
        }

        .card {
            background-color: #fff;
            padding: 14px;
            border: none
        }

        #lightSlider li {}

        .demo {
            width: 100%
        }

        ul {
            list-style: none outside none;
            padding-left: 0;
            margin-bottom: 0
        }

        li {
            display: block;
            float: left;
            margin-right: 6px;
            cursor: pointer
        }

        img {
            display: block;
            height: auto;
            width: 100%
        }

        .stars i {
            color: #f6d151
        }

        .stars span {
            font-size: 13px
        }

        hr {
            color: #d4d4d4
        }

        .badge {
            padding: 5px !important;
            padding-bottom: 6px !important
        }

        .badge i {
            font-size: 10px
        }

        .profile-image {
            width: 35px
        }

        .comment-ratings i {
            font-size: 13px
        }

        .username {
            font-size: 12px
        }

        .comment-profile {
            line-height: 17px
        }

        .date span {
            font-size: 12px
        }

        .p-ratings i {
            color: #f6d151;
            font-size: 12px
        }

        .btn-long {
            padding-left: 35px;
            padding-right: 35px
        }

        .buttons {
            margin-top: 15px
        }

        .buttons .btn {
            height: 46px
        }

        .buttons .cart {
            border-color: #ff7676;
            color: #ff7676
        }

        .buttons .cart:hover {
            background-color: #e86464 !important;
            color: #fff
        }

        .buttons .buy {
            color: #fff;
            background-color: #ff7676;
            border-color: #ff7676
        }

        .buttons .buy:focus,
        .buy:active {
            color: #fff;
            background-color: #ff7676;
            border-color: #ff7676;
            box-shadow: none
        }

        .buttons .buy:hover {
            color: #fff;
            background-color: #e86464;
            border-color: #e86464
        }

        .buttons .wishlist {
            background-color: #fff;
            border-color: #ff7676
        }

        .buttons .wishlist:hover {
            background-color: #e86464;
            border-color: #e86464;
            color: #fff
        }

        .buttons .wishlist:hover i {
            color: #fff
        }

        .buttons .wishlist i {
            color: #ff7676
        }

        .comment-ratings i {
            color: #f6d151
        }

        .followers {
            font-size: 9px;
            color: #d6d4d4
        }

        .store-image {
            width: 42px
        }

        .dot {
            height: 10px;
            width: 10px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px
        }

        .bullet-text {
            font-size: 12px
        }

        .my-color {
            margin-top: 10px;
            margin-bottom: 10px
        }

        label.radio {
            cursor: pointer
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio span {
            border: 2px solid #8f37aa;
            display: inline-block;
            color: #8f37aa;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            text-transform: uppercase;
            transition: 0.5s all
        }

        label.radio .red {
            background-color: red;
            border-color: red
        }

        label.radio .blue {
            background-color: blue;
            border-color: blue
        }

        label.radio .green {
            background-color: green;
            border-color: green
        }

        label.radio .orange {
            background-color: orange;
            border-color: orange
        }

        label.radio input:checked+span {
            color: #fff;
            position: relative
        }

        label.radio input:checked+span::before {
            opacity: 1;
            content: '\2713';
            position: absolute;
            font-size: 13px;
            font-weight: bold;
            left: 4px
        }

        .card-body {
            padding: 0.3rem 0.3rem 0.2rem
        }
    </style>
</head>

<body oncontextmenu='' class='snippet-body'>
    <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    @php
        $check_values = [];
        $check_attribute_values = [];
        $check_attribute_price = [];
        $highPrice = 0;
        $lowPrice = 0;
        $varationCode_id = [];
    @endphp

    @foreach ($variation as $item)
        @php
            $attribute_ids_string = $item->attribute_id;
            $attribute_value_string = $item->attribute_values_id;
            $attribute_value_price = $item->price;
            $variation_id = $item->product_code;

            $attribute_ids_array = json_decode($attribute_ids_string);
            $attribute_values_array = json_decode($attribute_value_string);
            // Convert string elements to integers using array_map
            $attribute_ids_integers = array_map('intval', $attribute_ids_array);
        @endphp

        @foreach ($attribute_ids_integers as $value)
            @php
                if (!in_array($value, $check_values)) {
                    $check_values[] = $value;
                }
            @endphp
        @endforeach

        @foreach ($attribute_values_array as $value)
            @php
                if (!in_array($value, $check_attribute_values)) {
                    $check_attribute_values[] = $value;
                }
            @endphp
        @endforeach
        @php
            $getPrice = $item->price;
            array_push($check_attribute_price, $getPrice);
            sort($check_attribute_price);
            $highPrice = end($check_attribute_price);
            $lowPrice = reset($check_attribute_price);

            //product code

            array_push($varationCode_id, $variation_id);

        @endphp

        @foreach ($varationCode_id as $value)
            @php
                if (!in_array($value, $varationCode_id)) {
                    $varationCode_id[] = $value;
                }
            @endphp
        @endforeach
    @endforeach


    <div class="container-fluid mt-2 mb-3">
        <div class="row no-gutters">
            <div class="col-md-5 pr-2">
                <div class="card">
                    <div class="demo">
                        <ul id="lightSlider">
                            @foreach ($images as $item)
                                <li data-thumb="{{ asset($item->product_multi_img) }}"> <img
                                        src="{{ asset($item->product_multi_img) }}" /> </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="card mt-2">
                    <h6>Description</h6>
                    <div class="d-flex flex-row">
                        <p>{!! $product->description !!}</p>
                    </div>
                    <hr>

                    @foreach ($description as $item)
                        <img src="{{ asset($item->product_images) }}" />
                        <p>{!! $item->descriptions !!}</p>
                    @endforeach

                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="about"> <span class="font-weight-bold"> {{ $product->ProductName }} </span>
                        <h4 class="font-weight-bold" id="price">Price: ${{ $lowPrice }} - ${{ $highPrice }}
                        </h4>
                        {{-- <p>Price: <span id="price">$0</span></p> --}}

                    </div>
                    <div class="buttons"> <button class="btn btn-outline-warning btn-long cart">Add to Cart</button>
                        <button class="btn btn-warning btn-long buy">Buy it Now</button> <button
                            class="btn btn-light wishlist"> <i class="fa fa-heart"></i> </button>
                    </div>
                    <hr>
                    <div class="product-description">
                        <div class="mt-2"> <span class="font-weight-bold">Description</span>
                            <p>{!! $product->ProductShortDescription !!}</p>
                        </div>

                    </div>
                </div>
                <div class="card mt-2"> <span>variation</span>

                    @foreach ($attribute as $attributeItem)
                        @if (in_array($attributeItem->id, $check_values))
                            <div class="">
                                <label for="">{{ $attributeItem->attribute_name }} </label>
                                <select name="" class="select_variation_option"
                                    data-attribute-id="{{ $attributeItem->id }}">
                                    <option value="null">select</option>
                                    @foreach ($attributeItem->attributeValue as $attributeItemValue)
                                        @if (in_array($attributeItemValue->attribute_values_name, $check_attribute_values))
                                            <option value="{{ $attributeItemValue->attribute_values_name }}">
                                                {{ $attributeItemValue->attribute_values_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        @endif
                    @endforeach

                </div>
                @if ($varationCode_id)
                    <input type="hidden" value="{{ $varationCode_id[0] }}" id="product_id">
                @endif
                <div class="card mt-2"> <span>Similar items:</span>
                    @foreach ($ProductItem as $item)
                        <div class="similar-products mt-2 d-flex flex-row">
                            <div class="card border p-1" style="width: 19rem;margin-right: 3px;">
                                {{-- <img
                                src="https://i.imgur.com/KZpuufK.jpg" class="card-img-top" alt="..."> --}}

                                <h6 class="card-title">item: {{ $item->Product_title }}</h6>
                                <h6 class="card-title">price: ${{ $item->price }}</h6>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}

    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'>
    </script>






</body>

</html>
