<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}" type="text/css">
    <title>Document</title>
</head>
<body>
<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-around border rounded p-3 my-3">
                <router-link :to="{name:'home'}">Home</router-link>
                <router-link :to="{name:'contact'}">Contact Us</router-link>
                <router-link :to="{name:'about'}">ABout Us</router-link>
            </div>
            <div class="col-12">
                <router-view></router-view>
            </div>
        </div>
    </div>

</div>
</body>
<script src="{{ asset('./js/app.js') }}"></script>
</html>