<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @wp_head
</head>
<body>
    <!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header class="anpu-header">
        <div class="anpu-logo">
            <a href="{{ home_url() }}">
                <img src="{{themosis_theme_assets()}}/images/logo.png" alt="The Anpu"/>
            </a>
        </div>
        <div class="anpu-navigation">
            @php(wp_nav_menu([
                'theme_location' => 'header-nav',
                'container' => false
            ]))
        </div>
        <div class="anpu-search">
            <div class="anpu-search--button"></div>
            <div class="anpu-search--form">
                <div class="anpu-search--form__icon"></div>
                <div class="anpu-search--form__form">
                    {{--
                    {!! Form::open(home_url(), 'get', false, [
                    'class' => 'searchfrom',
                    'role' => 'search'
                    ]) !!}
                    {!! Form::text('s', '', [
                    'id' => 's',
                    'placeholder' => __("Search....", THEME_TEXTDOMAIN),
                    'autocomplete' => 'off'
                    ]) !!}
                    {!! Form::clode() !!}
                    
                    --}}
                </div>
            </div>
        </div>
    </header>
    
    @yield('main')
    
    <footer class="anpu-footer">
        <div class="wrapper">
            <div class="anpu-footer--copyright">
                <p>&copy; {{ sprintf('%s %d', __("Copyright The Anpu", THEME_TEXTDOMAIN), date('Y')) }}</p>
            </div>
            <div class="anpu-footer--navigation">
                @php(wp_nav_menu([
                    'theme_location' => 'footer-nav',
                    'container' => false
                ]))
            </div>
        </div>
    </footer>
    @wp_footer
</body>
</html>