<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Himkaya</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{asset('public/assets_ui')}}/img/himkaya_logo.jpg" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Ionicon CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/ionicons.min.css" rel="stylesheet" />
    <!--== Simple Line Icon CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/simple-line-icons.css" rel="stylesheet" />
    <!--== Line Icons CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/lineIcons.css" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/animate.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/swiper.min.css" rel="stylesheet" />
    <!--== Range Slider CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/range-slider.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/fancybox.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/slicknav.css" rel="stylesheet" />
    <!--== Owl Carousel Min CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/owlcarousel.min.css" rel="stylesheet" />
    <!--== Owl Theme Min CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/owltheme.min.css" rel="stylesheet" />
    <!--== Spacing CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/spacing.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('public/assets/back-end')}}/css/toastr.css" />

    <!--== Main Style CSS ==-->
    <link href="{{asset('public/assets_ui')}}/css/style.css" rel="stylesheet" />
    

</head>

<body>

    <!--wrapper start-->
    <div class="wrapper home-default-wrapper">

        <!--== Start Preloader Content ==-->
        {{-- <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> --}}
        <!--== End Preloader Content ==-->
        <!-- Start of Header -->
        @include('layouts.front-end.partials._header')


        @yield('content')

        @include('layouts.front-end.partials._footer')


        <!--=======================Javascript============================-->

        <!--=== Modernizr Min Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/modernizr.js"></script>
        <!--=== jQuery Min Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/jquery-main.js"></script>
        <!--=== jQuery Migration Min Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/jquery-migrate.js"></script>
        <!--=== Bootstrap Min Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/bootstrap.min.js"></script>
        <!--=== jQuery Appear Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/jquery.appear.js"></script>
        <!--=== jQuery Swiper Min Js ===-->
        <script src="{{asset('public/assets_ui')}}//js/swiper.min.js"></script>
        <!--=== jQuery Fancy Box Min Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/fancybox.min.js"></script>
        <!--=== jQuery Slick Nav Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/slicknav.js"></script>
        <!--=== jQuery Waypoints Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/waypoints.js"></script>
        <!--=== jQuery Owl Carousel Min Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/owlcarousel.min.js"></script>
        <!--=== jQuery Match Height Min Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/jquery-match-height.min.js"></script>
        <!--=== jQuery Zoom Min Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/jquery-zoom.min.js"></script>
        <!--=== Countdown Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/countdown.js"></script>

        <!--=== Custom Js ===-->
        <script src="{{asset('public/assets_ui')}}/js/custom.js"></script>

        {{--Toastr--}}
        <script src="{{asset('public/assets/front-end')}}/js/sweet_alert.js"></script>
        <script src={{asset("public/assets/back-end/js/toastr.js")}}></script>
        {!! Toastr::message() !!}


        <script>
            function addWishlist(product_id) {
        $.ajaxSetup({
            headers: {
                // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{route('store-wishlist')}}",
            method: 'POST',
            data: {
                product_id: product_id
            },
            success: function (data) {
                if (data.value == 1) {
                    Swal.fire({
                        position: 'top-end',
                        type: 'success',
                        title: data.success,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('.countWishlist').html(data.count);
                    $('.countWishlist-' + product_id).text(data.product_count);
                    $('.tooltip').html('');

                } else if (data.value == 2) {
                    Swal.fire({
                        type: 'info',
                        title: 'WishList',
                        text: data.error
                    });
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'WishList',
                        text: data.error
                    });
                }
            }
        });
    }

    function removeWishlist(product_id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{route('delete-wishlist')}}",
            method: 'POST',
            data: {
                id: product_id
            },
            beforeSend: function () {
                $('#loading').show();
            },
            success: function (data) {
                Swal.fire({
                    type: 'success',
                    title: 'WishList',
                    text: data.success
                });
                $('.countWishlist').html(data.count);
                $('#set-wish-list').html(data.wishlist);
                $('.tooltip').html('');
            },
            complete: function () {
                $('#loading').hide();
            },
        });
    }

    function quickView(product_id) {
        $.get({
            url: '{{route('quick-view')}}',
            dataType: 'json',
            data: {
                product_id: product_id
            },
            beforeSend: function () {
                $('#loading').show();
            },
            success: function (data) {
                console.log("success...")
                $('#quick-view').modal('show');
                $('#quick-view-modal').empty().html(data.view);
            },
            complete: function () {
                $('#loading').hide();
            },
        });
    }

    function addToCart(form_id = 'add-to-cart-form', redirect_to_checkout=false) {
       //console.log(form_id);
      // alert(form_id);
        if (checkAddToCartValidity()) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.post({
                url: '{{ route('cart.add') }}',
                data: $('#' + form_id).serializeArray(),
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (response) {
                    //alert(response.status)
                    if (response.status == 1) {
                        updateNavCart();
                        toastr.success(response.message, {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        $('.call-when-done').click();
                        if(redirect_to_checkout)
                        {
                            location.href = "{{route('checkout-details')}}";
                        }
                        return false;
                    } else if (response.status == 0) {
                        //alert(response.message)
                        Swal.fire({
                            icon: 'error',
                            title: 'Cart',
                            text: response.message
                        });
                        return false;
                    }
                },
                complete: function () {
                    $('#loading').hide();

                }
            });
        } else {
            Swal.fire({
                type: 'info',
                title: 'Cart',
                text: '{{\App\CPU\translate('please_choose_all_the_options')}}'
            });
        }
    }

    function buy_now() {
       // alert('jelll');
        addToCart('add-to-cart-form',true);
        /* location.href = "{{route('checkout-details')}}"; */
    }

    function currency_change(currency_code) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{route('currency.change')}}',
            data: {
                currency_code: currency_code
            },
            success: function (data) {
                toastr.success('{{\App\CPU\translate('Currency changed to')}}' + data.name);
                location.reload();
            }
        });
    }

    function removeFromCart(key) {
        $.post('{{ route('cart.remove') }}', {_token: '{{ csrf_token() }}', key: key}, function (response) {
            $('#cod-for-cart').hide();
            updateNavCart();
            $('#cart-summary').empty().html(response.data);
            toastr.info('{{\App\CPU\translate('Item has been removed from cart')}}', {
                CloseButton: true,
                ProgressBar: true
            });
            let segment_array = window.location.pathname.split('/');
            let segment = segment_array[segment_array.length - 1];
            if(segment === 'checkout-payment' || segment === 'checkout-details'){
                location.reload();
            }
        });
    }

    function updateNavCart() {
        $.post('{{route('cart.nav-cart')}}', {_token: '{{csrf_token()}}'},
        function (response) {
            location.reload();
           //$('#cart_items').html(response.data);
        });
    }

    function cartQuantityInitialize() {
        $('.btn-number').click(function (e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            productType = $(this).attr('product-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            // alert(type);
            if (!isNaN(currentVal)) {
                console.log(productType)
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max') || (productType === 'digital')) {
                        input.val(currentVal + 1).change();
                    }

                    if ((parseInt(input.val()) == input.attr('max')) && (productType === 'physical')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        $('.input-number').focusin(function () {
            $(this).data('oldValue', $(this).val());
        });

        $('.input-number').change(function () {
            productType = $(this).attr('product-type');
            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            var name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Cart',
                    text: '{{\App\CPU\translate('Sorry, the minimum order quantity does not match')}}'
                });
                $(this).val($(this).data('oldValue'));
            }
            if (productType === 'digital' || valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Cart',
                    text: '{{\App\CPU\translate('Sorry, stock limit exceeded')}}.'
                });
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    }

    function updateQuantity(key, element) {
        $.post('<?php echo e(route('cart.updateQuantity')); ?>', {
            _token: '<?php echo e(csrf_token()); ?>',
            key: key,
            quantity: element.value
        }, function (data) {
            updateNavCart();
            $('#cart-summary').empty().html(data);
        });
    }

    function updateCartQuantity(minimum_order_qty, key) {
        /* var quantity = $("#cartQuantity" + key).children("option:selected").val(); */
        var quantity = $("#cartQuantity" + key).val();
       // alert(minimum_order_qty > quantity);
        if(minimum_order_qty > quantity ) {
            toastr.error('{{\App\CPU\translate("minimum_order_quantity_cannot_be_less_than_")}}' + minimum_order_qty);
            $("#cartQuantity" + key).val(minimum_order_qty);
            return false;
        }

        $.post('{{route('cart.updateQuantity')}}', {
            _token: '{{csrf_token()}}',
            key: key,
            quantity: quantity
        }, function (response) {
            if (response.status == 0) {
                toastr.error(response.message, {
                    CloseButton: true,
                    ProgressBar: true
                });
                $("#cartQuantity" + key).val(response['qty']);
            } else {
                updateNavCart();
                $('#cart-summary').empty().html(response);
            }
        });
    }

    $('#add-to-cart-form input').on('change', function () {
        getVariantPrice();
    });

    function getVariantPrice() {
        if ($('#add-to-cart-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: '{{ route('cart.variant_price') }}',
                data: $('#add-to-cart-form').serializeArray(),
                success: function (data) {
                    console.log(data)
                    $('#add-to-cart-form #chosen_price_div').removeClass('d-none');
                    $('#add-to-cart-form #chosen_price_div #chosen_price').html(data.price);
                    $('#set-tax-amount').html(data.tax);
                    $('#set-discount-amount').html(data.discount);
                    $('#available-quantity').html(data.quantity);
                    $('.cart-qty-field').attr('max', data.quantity);
                }
            });
        }
    }

    function checkAddToCartValidity() {
        var names = {};
        $('#add-to-cart-form input:radio').each(function () { // find unique names
            names[$(this).attr('name')] = true;
        });
        var count = 0;
        $.each(names, function () { // then count them
            count++;
        });
        if ($('input:radio:checked').length == count) {
            return true;
        }
        return false;
    }

    @if(Request::is('/') &&  \Illuminate\Support\Facades\Cookie::has('popup_banner')==false)
    $(document).ready(function () {
        $('#popup-modal').appendTo("body").modal('show');
    });
    @php(\Illuminate\Support\Facades\Cookie::queue('popup_banner', 'off', 1))
    @endif

    $(".clickable").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
        </script>

        @if ($errors->any())
        <script>
            @foreach($errors->all() as $error)
        toastr.error('{{$error}}', Error, {
            CloseButton: true,
            ProgressBar: true
        });
        @endforeach
        </script>
        @endif

<script>
    function couponCode() {
       // alert('jjj');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: '{{ route('coupon.apply') }}',
            data: $('#coupon-code-ajax').serializeArray(),
            success: function (data) {
                /* console.log(data);
                return false; */
                if (data.status == 1) {
                    let ms = data.messages;
                    ms.forEach(
                        function (m, index) {
                            toastr.success(m, index, {
                                CloseButton: true,
                                ProgressBar: true
                            });
                        }
                    );
                } else {
                    let ms = data.messages;
                    ms.forEach(
                        function (m, index) {
                            toastr.error(m, index, {
                                CloseButton: true,
                                ProgressBar: true
                            });
                        }
                    );
                }
                setInterval(function () {
                    location.reload();
                }, 2000);
            }
        });
    }

    jQuery(".search-bar-input").keyup(function () {
        $(".search-card").css("display", "block");
        let name = $(".search-bar-input").val();
        if (name.length > 0) {
            $.get({
                url: '{{url('/')}}/searched-products',
                dataType: 'json',
                data: {
                    name: name
                },
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    $('.search-result-box').empty().html(data.result)
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        } else {
            $('.search-result-box').empty();
        }
    });

    jQuery(".search-bar-input-mobile").keyup(function () {
        $(".search-card").css("display", "block");
        let name = $(".search-bar-input-mobile").val();
        if (name.length > 0) {
            $.get({
                url: '{{url('/')}}/searched-products',
                dataType: 'json',
                data: {
                    name: name
                },
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    $('.search-result-box').empty().html(data.result)
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        } else {
            $('.search-result-box').empty();
        }
    });
    jQuery(document).mouseup(function (e) {
        var container = $(".search-card");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });

    const img = document.getElementByTagName("img")
    img.addEventListener("error", function (event) {
        event.target.src = '{{asset('public/assets/front-end/img/image-place-holder.png')}}';
        event.onerror = null
    })

    function route_alert(route, message) {
        Swal.fire({
            title: '{{\App\CPU\translate('Are you sure')}}?',
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'default',
            confirmButtonColor: '{{$web_config['primary_color']}}',
            cancelButtonText: '{{\App\CPU\translate('No')}}',
            confirmButtonText: '{{\App\CPU\translate('Yes')}}',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                location.href = route;
            }
        })
    }
</script>
<script>
    $('.filter-show-btn').on('click', function(){
        $('#shop-sidebar').toggleClass('show')
    })
</script>

@stack('script')
</body>

</html>
