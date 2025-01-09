<!-- resources/views/landing.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/robots.png');
            animation: spaceAnimation 20s linear infinite;
        }

        @keyframes spaceAnimation {
            from { background-position: 0 0; }
            to { background-position: 100% 100%; }
        }

        .content {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .button {
            display: inline-block;
            margin: 10px;
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .button:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="content">
        <a href="{{ route('login') }}" class="button">Proceed</a>
        <a href="{{ route('register') }}" class="button">New Here?</a>
    </div>
</body>
</html>
