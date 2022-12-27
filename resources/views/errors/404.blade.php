<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>Error 404 - Not Found</title>
    <meta name="viewport" content="width=device-width">
    <style>


        body
        {
            font-family:'Droid Sans', sans-serif;
            font-size:10pt;
            color:#555;
            line-height: 25px;
        }

        .wrapper
        {
            width:760px;
            margin:0 auto 5em auto;
        }

        .main
        {
            overflow:hidden;
        }

        .error-spacer
        {
            height:4em;
        }

        a, a:visited
        {
            color:#2972A3;
        }

        a:hover
        {
            color:#72ADD4;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="error-spacer"></div>
    <div role="main" class="main">
        <?php $messages = array('نشقه نداریم که', 'فکر کنم گم شدیم', 'اشتباه پیچیدیم'); ?>

        <h1><?php echo $messages[mt_rand(0, 2)]; ?></h1>

        <h2 style="direction: ltr">Server Error: 404 (Not Found)</h2>

        <hr>

        <p style="font-size: 16px">
            <a href="{{{ URL::to('/') }}}">بریم خونه </a>
        </p>
    </div>
</div>
</body>
</html>
