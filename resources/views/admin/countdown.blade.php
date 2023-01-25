<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<style>
    body {
        text-align: center;
        padding: 70px 50px;
        font-family: sans-serif;
        font-weight: lighter;
    }

    #timer {
        font-size: 3em;
        font-weight: 100;
        color: blue;
    }

    #timer div {
        display: inline-block;
        min-width: 90px;
        border: 1px solid
    }

    #timer div span {
        color: #b1cdf1;
        display: block;
        font-size: 0.35em;
        font-weight: 400;
        border: 1px solid
    }
</style>

<body>
    <div id="timer" style="padding-top: 100px;"></div>

</body>

<script>
    function updateTimer() {
        future = Date.parse("jan 18, 2023 11:30:00");
        now = new Date();
        diff = future - now;

        days = Math.floor(diff / (1000 * 60 * 60 * 24));
        hours = Math.floor(diff / (1000 * 60 * 60));
        mins = Math.floor(diff / (1000 * 60));
        secs = Math.floor(diff / 1000);

        d = days;
        h = hours - days * 24;
        m = mins - hours * 60;
        s = secs - mins * 60;

        document.getElementById("timer").innerHTML =
            "<div>" +
            d +
            "</div>" +
            "<div>" +
            h +
            "</div>" +
            "<div>" +
            m +
            "</div>" +
            "<div>" +
            s +
            "</div>";
    }
    setInterval("updateTimer()", 1000);
</script>

</html>
