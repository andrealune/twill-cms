<!DOCTYPE html>
<html dir="ltr" lang="{{ config('twill.locale', 'en') }}">
    <head>
        @include('twill::partials.head')
    </head>
    <body class="env env--{{ app()->environment() }}">
        <div class="a17 a17--login">
            <section class="login">
                <form accept-charset="UTF-8" action="{{ $route }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h1 class="f--heading login__heading login__heading--title">{{ config('app.name') }} <span class="envlabel envlabel--heading">{{ app()->environment() === 'production' ? 'prod' : app()->environment() }}</span></h1>
                    <h2 class="f--heading login__heading">{{ $screenTitle }}</h2>


                    @yield('form')
                </form>
            </section>

            @include('twill::partials.toaster')

            <div class="login__copyright f--small">
                <span class="footer__copyright"><a href="https://www.quattrolinee.it/" target="_blank" class="f--light-hover" tabindex="0">Made by quattrolinee</a></span>
            </div>
        </div>
    </body>
</html>
