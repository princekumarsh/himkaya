@extends('layouts.front-end.app')

@section('title',auth('customer')->user()->f_name.' '.auth('customer')->user()->l_name)


@section('content')
<style type="text/css">
    .magnetic-button{
              background-color: #f6f5f4;
              border-radius: 50px;
              color: #0f0f0f;
              display: inline-block;
              font-weight: 700;
              font-size: 14px;
              position: relative;
              padding: 13px 35px 13px 25px;
              overflow: hidden;
              text-align: center;
              text-transform: capitalize;
              border: none;
              z-index: 1;
              border: 1px solid #ec6b81;
              transition: all 0.4s ease-out;
              -webkit-transition: all 0.4s ease-out;
              -moz-transition: all 0.4s ease-out;
              -ms-transition: all 0.4s ease-out;
              -o-transition: all 0.4s ease-out;
            }
            .magnetic-button:after {
              background-color: #ec6b81;
              border-radius: 50px;
              content: "";
              height: 100%;
              left: 0;
              visibility: hidden;
              left: auto;
              right: 0;
              position: absolute;
              top: 0;
              width: 0;
              z-index: -1;
              transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
              -webkit-transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
              -moz-transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
              -ms-transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
              -o-transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
            }
            .magnetic-button:hover {
              color: #fff;
            }
            .magnetic-button:hover:after {
              left: 0;
              right: auto;
              visibility: visible;
              width: 100%;
            }
            .__img-full {
                width: 100%;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
            }
</style>
    <!-- Page Title-->
    <div class="container rtl">
        <h5 class="py-3 m-0 text-center headerTitle">{{\App\CPU\translate('profile_Info')}}</h5>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4 rtl">
        <div class="row">
            <!-- Sidebar-->
        @include('web-views.partials._profile-aside')
        <!-- Content  -->
            <section class="col-lg-9 col-md-9 __customer-profile">
                <div class="card box-shadow-sm">
                    <div class="card-header">
                        <form class="mt-3 px-sm-2 pb-2" action="{{route('user-update')}}" method="post"
                              enctype="multipart/form-data">
                            <div class="row photoHeader g-3">
                                @csrf
                                <div class="d-flex mb-3 mb-md-0 align-items-center">
                                    <img id="blah"
                                        class="rounded-circle border __inline-48"
                                        onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                        src="{{asset('storage/app/public/profile')}}/{{$customerDetail['image']}}" style="width:60px;height:60px">

                                    <div class="{{Session::get('direction') === "rtl" ? 'pr-2' : 'pl-2'}}">
                                        <h6 class="font-name">{{$customerDetail->f_name. ' '.$customerDetail->l_name}}</h6>
                                        <label for="files"
                                            style="cursor: pointer; color:{{$web_config['primary_color']}};"
                                            class="spandHeadO m-0">
                                            {{\App\CPU\translate('change_your_profile')}}
                                        </label>
                                        <span class="text-danger __text-10px">( * {{\App\CPU\translate('Image ratio should be 1:1')}}  )</span>
                                        <input id="files" name="image" hidden type="file">
                                    </div>
                                </div>


                                <div class="card-body mt-md-3 p-0">
                                    <h5 class="font-nameA">{{\App\CPU\translate('account_information')}} </h5>


                                    <div class="form-row row">
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="firstName">{{\App\CPU\translate('first_name')}} </label>
                                            <input type="text" class="form-control" id="f_name" name="f_name"
                                                   value="{{$customerDetail['f_name']}}" required>
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="lastName"> {{\App\CPU\translate('last_name')}} </label>
                                            <input type="text" class="form-control" id="l_name" name="l_name"
                                                   value="{{$customerDetail['l_name']}}">
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="inputEmail4">{{\App\CPU\translate('Email')}} </label>
                                            <input type="email" class="form-control" type="email" id="account-email"
                                                   value="{{$customerDetail['email']}}" disabled>
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="phone">{{\App\CPU\translate('phone_number')}} </label>
                                            <small class="text-primary">(
                                                * {{\App\CPU\translate('country_code_is_must')}} {{\App\CPU\translate('like_for_BD_880')}}
                                                )</small></label>
                                            <input type="number" class="form-control" type="text" id="phone"
                                                   name="phone"
                                                   value="{{$customerDetail['phone']}}" required>
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="form-group col-md-6 mb-3">
                                            <label for="si-password">{{\App\CPU\translate('new_password')}}</label>
                                            <div class="password-toggle">
                                                <input class="form-control" name="password" type="password"
                                                       id="password"
                                                >
                                                <label class="password-toggle-btn">
                                                    <input class="custom-control-input" type="checkbox"
                                                           style="display: none">
                                                    <i class="czi-eye password-toggle-indicator"
                                                       onChange="checkPasswordMatch()"></i>
                                                    <span
                                                        class="sr-only">{{\App\CPU\translate('Show')}} {{\App\CPU\translate('password')}} </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 mb-3">
                                            <label for="newPass">{{\App\CPU\translate('confirm_password')}} </label>
                                            <div class="password-toggle">
                                                <input class="form-control" name="confirm_password" type="password"
                                                       id="confirm_password">
                                                <div>
                                                    <label class="password-toggle-btn">
                                                        <input class="custom-control-input" type="checkbox"
                                                               style="display: none">
                                                        <i class="czi-eye password-toggle-indicator"
                                                           onChange="checkPasswordMatch()"></i><span
                                                            class="sr-only">{{\App\CPU\translate('Show')}} {{\App\CPU\translate('password')}} </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div id='message'></div>
                                        </div>
                                        <div class="col-12 d-flex flex-wrap justify-content-between __gap-15 __profile-btns">
                                             <a class="magnetic-button"
                                                 href="javascript:"
                                                 onclick="route_alert('{{ route('account-delete',[$customerDetail['id']]) }}','{{\App\CPU\translate('want_to_delete_this_account?')}}')">
                                                 {{\App\CPU\translate('delete_account')}}
                                             </a>
                                             <button type="submit" class="magnetic-button">{{\App\CPU\translate('update')}}   </button>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{asset('public/assets/front-end')}}/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="{{asset('public/assets/back-end/js/croppie.js')}}"></script>
    <script>
        function checkPasswordMatch() {
            var password = $("#password").val();
            var confirmPassword = $("#confirm_password").val();
            $("#message").removeAttr("style");
            $("#message").html("");
            if (confirmPassword == "") {
                $("#message").attr("style", "color:black");
                $("#message").html("{{\App\CPU\translate('Please ReType Password')}}");

            } else if (password == "") {
                $("#message").removeAttr("style");
                $("#message").html("");

            } else if (password != confirmPassword) {
                $("#message").html("{{\App\CPU\translate('Passwords do not match')}}!");
                $("#message").attr("style", "color:red");
            } else if (confirmPassword.length <= 6) {
                $("#message").html("{{\App\CPU\translate('password Must Be 6 Character')}}");
                $("#message").attr("style", "color:red");
            } else {

                $("#message").html("{{\App\CPU\translate('Passwords match')}}.");
                $("#message").attr("style", "color:green");
            }

        }

        $(document).ready(function () {
            $("#confirm_password").keyup(checkPasswordMatch);

        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#files").change(function () {
            readURL(this);
        });

    </script>
    <script>
        function form_alert(id, message) {
            Swal.fire({
                title: '{{\App\CPU\translate('Are you sure')}}?',
                text: message,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    $('#' + id).submit()
                }
            })
        }
    </script>
@endpush
