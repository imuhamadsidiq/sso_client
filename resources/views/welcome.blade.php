<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="contents">
                <div class="title m-b-md">
                   SSO Client
                </div>
                <div>
                    <?php  
                     $redis = array(
                         'sso_user_id'=>Redis::get('sso_user_id'),
                         'sso_username'=>Redis::get('sso_username'),
                         'sso_email'=>Redis::get('sso_email'),
                         'sso_first_name'=>Redis::get('sso_first_name'),
                         'sso_last_name'=>Redis::get('sso_last_name'),
                         'sso_bu_id'=>Redis::get('sso_bu_id'),
                         'sso_bu_name'=>Redis::get('sso_bu_name'),
                         'sso_site_id'=>Redis::get('sso_site_id'),
                         'sso_site_name'=>Redis::get('sso_site_name'),
                         'sso_divisi_id'=>Redis::get('sso_divisi_id'),
                         'sso_divisi_name'=>Redis::get('sso_divisi_name'),
                         'sso_dept_id'=>Redis::get('sso_dept_id'),
                         'sso_dept_name'=>Redis::get('sso_dept_name'),
                         'sso_app_APP'=>Redis::get("sso_app_APP"),
                         'sso_group_APP'=>Redis::get("sso_group_APP"),
                         'sso_group_name_APP'=>Redis::get("sso_group_name_APP"),  
                     );

                     dd($redis);
                    ?>
                </div>
               
            </div>
        </div>
    </body>
</html>
