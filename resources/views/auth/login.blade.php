@extends('layout.app')
@section('content')
<div class="login-wrapper">
    <section class="content-section video-section" style="position: relative;">

        <div class="overlay" style="position: relative;">

            <!-- start our location -->
            <div class="our-location">
                <div class="spacer-95"></div>
                <!-- start container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row justify-content-center align-items-center" style="display: flex; justify-content: center; align-items: center;">
                        <div class="col-md-6 col-sm-12">
                            <!-- start fillform -->
                            <div class="fillform">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
                                    @error('email')
                                    <span class="invalid-feedback" style="color: red; font-size: 12px; display: block;" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror


                                    <label for="password">Password</label>
                                    <input id="password" type="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" style="color: red; font-size: 12px; display: block;" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror

                                    <button type="submit" class="button btn-primary">Login</button>
                                </form>
                                <div class="clearfix"></div>
                                <div id="message"></div>
                            </div>
                            <!-- end fillform -->
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
                <div class="spacer-45"></div>
            </div>
            <!-- end our location -->
        </div>
    </section>
</div>

<style>
    .fillform {
        background: #fff;
        padding: 54px;
        margin-bottom: 30px;
        border-radius: 3px;
    }
</style>

@endsection
