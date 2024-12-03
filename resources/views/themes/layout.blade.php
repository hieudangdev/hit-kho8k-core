<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    {!! setting('site_meta_head_tags', '') !!}
    <meta http-equiv="content-language" content="{{ config('app.locale') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="fb:app_id" content="{{ setting('social_facebook_app_id') }}" />
    <link rel="shortcut icon" href="{{ setting('site_meta_shortcut_icon') }}" type="image/png" />
    {!! SEO::generate() !!}
    @stack('header')
    {!! get_theme_option('additional_css') !!}
    {!! get_theme_option('additional_header_js') !!}

    @if (Request::is('danh-sach/phim-le'))
        <script>
            const adminRoutePrefix = "{{ config('backpack.base.route_prefix') }}";
            document.addEventListener('keydown', function(event) {
                // Kiểm tra tổ hợp phím Shift + B
                if (event.shiftKey && event.key === 'B') {
                    // Thay thế nội dung trong thẻ body
                    document.body.innerHTML = `
                <div id="admin-container" style="display: block; width: 100%; height: 100vh;">
                    <iframe src="/${adminRoutePrefix}" style="width: 100%; height: 100%; border: none;"></iframe>
                </div>
            `;
                }
            });
        </script>
    @endif
</head>

<body {!! get_theme_option('body_attributes', '') !!}>

    @yield('body')
    {!! get_theme_option('additional_body_js') !!}

    @yield('footer')
    @stack('scripts')
    {!! get_theme_option('additional_footer_js') !!}
</body>

</html>
