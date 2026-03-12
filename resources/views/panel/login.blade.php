<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ env('APP_NAME') }}</title>
        <meta name="description" content="Login" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui" />
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- base css -->
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('assets/css/vendors.bundle.css') }}" />
        <link id="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('assets/css/app.bundle.css') }}" />
        <link id="mytheme" rel="stylesheet" media="screen, print" href="{{ asset('assets/css/themes/cust-theme-7.css') }}" />
        <link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('assets/css/skins/skin-master.css') }}" />
        <link rel="icon" href="{{ asset('assets/img/favicon/gaziantepbel.png') }}"/>
        <!-- Place favicon.ico in the root directory -->
        <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5" />
        <link rel="stylesheet" media="screen, print" href="{{ asset('assets/css/fa-brands.css') }}" />
        <link rel="stylesheet" media="screen, print" href="{{ asset('assets/css/notifications/sweetalert2/sweetalert2.bundle.css') }}">
    </head>
    <body>
        <div class="page-wrapper auth">
            <div class="page-inner bg-brand-gradient">
                <div class="page-content-wrapper bg-transparent m-0" style="padding: 0;">
                    <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                        <div class="align-items-center text-center container p-0">
                            <div class="page-logo width-mobile-auto m-0 align-items-center text-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0" style="width: auto;">
                                <span class="page-logo-text mr-0 ml-0 text-center">{{ env('APP_NAME') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1" style="background: url({{ asset('assets/img/svg/pattern-1.svg') }}) no-repeat center bottom fixed; background-size: cover;">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto mr-auto">
                                    <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                        Kullanıcı Girişi
                                    </h1>
                                    <div class="card p-4 rounded-plus bg-faded">


                                        <form id="js-login" novalidate="" method="post" action="{{ route('panel.access') }}">
                                            @csrf

                                            <div class="form-group">
                                                <label class="form-label" for="username">E-Mail</label>
                                                <input
                                                    type="email"
                                                    id="email"
                                                    name="email"
                                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                    placeholder="E-Mail"
                                                    value="{{ old('email') }}"
                                                    required
                                                />
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="password">Parola</label>
                                                <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Şifreniz" required />
                                                @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div>
                                                {{-- {!! htmlFormSnippet() !!} --}}
                                            </div>

                                            <div class="form-group text-left" style="display: none;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberme" name="rememberme" />
                                                    <label class="custom-control-label" for="rememberme" style="cursor: pointer;"> Beni Hatırla</label>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                <div class="col-lg-12 pr-lg-1 my-2">
                                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Giriş Yap</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                                2022 © <a href="https://gaziantepbilisim.com.tr/" class="text-white" style="text-decoration: none!important;" target="_blank">{{ env('APP_COPR') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('assets/js/vendors.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/app.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/notifications/sweetalert2/sweetalert2.bundle.js') }}"></script>

        {{-- {!! htmlScriptTagJsApi() !!} --}}
        
        <script>
            @if(Session::has('success'))
                Swal.fire('','{{ session('success') }}','success');
            @elseif(Session::has('error'))
                Swal.fire('','{{ session('error') }}','error');
            @elseif(Session::has('warning'))
                Swal.fire('','{{ session('warning') }}','warning');
            @elseif(Session::has('info'))
                Swal.fire('','{{ session('info') }}','info');
            @endif
        </script>

    </body>
</html>
