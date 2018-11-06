<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đặt hàng thành công</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i');
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese');
        body{font-family: 'Roboto Condensed';font-size: 18px;}

        h2, a, div {
            font-family: 'Roboto Condensed';
        }

        h2 {
            color: #f42a5a;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        img {
            width: 100%;
        }

        a {
            color: #2196F3;
            text-decoration: none;
        }
    </style>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2046271212077785');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=2046271212077785&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
    <div class="container">
        <h2>ĐẶT HÀNG THÀNH CÔNG!</h2>
        <a href="{{ url('ladi/'.$from) }}" class="back">
            <img src="/ladi/images/thank-you.jpg" alt="Thank you">
        </a>
        <div>
            <a href="{{ url('ladi/'.$from) }}" class="back">Quay lại</a>
        </div>
    </div>
</body>
</html>