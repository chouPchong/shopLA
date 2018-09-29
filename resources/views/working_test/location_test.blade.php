<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>location_test</title>
</head>
<body>
当前地理位置：<span id="lng"></span>,<span id="lat"></span><br>
经度：<input type="text" name="lng"><br>
纬度：<input type="text" name="lat">
<button onclick="result()">计算</button>
<div id="length"></div>
<div id="iCenter"></div>
<script type="text/javascript"
        src="https://webapi.amap.com/maps?v=1.4.10&key=cdd9f5fffb44afdb682d1e68c68c247f"></script>
<script>
    mapObj = new AMap.Map('iCenter');
    mapObj.plugin('AMap.Geolocation', function () {
        var geolocation = new AMap.Geolocation({
            // 是否使用高精度定位，默认：true
            enableHighAccuracy: true,
            // 设置定位超时时间，默认：无穷大
            timeout: 10000,
            // 定位按钮的停靠位置的偏移量，默认：Pixel(10, 20)
            buttonOffset: new AMap.Pixel(10, 20),
            //  定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
            zoomToAccuracy: true,
            //  定位按钮的排放位置,  RB表示右下
            buttonPosition: 'RB'
        });

        geolocation.getCurrentPosition();
        AMap.event.addListener(geolocation, 'complete', onComplete);
        AMap.event.addListener(geolocation, 'error', onError);

        function onComplete(data) {
            document.getElementById('lng').innerText = data.position.lng;
            document.getElementById('lat').innerText = data.position.lat;
        }

        function onError(data) {
            console.log(data)
        }
    });

    function result() {
        var lng0 = document.getElementById('lng').innerText;
        var lat0 = document.getElementById('lat').innerText;
        var lng = document.getElementsByName('lng')[0].value;
        var lat = document.getElementsByName('lat')[0].value;
        var p1 = [lng0, lat0];
        var p2 = [lng, lat];
        console.log(p1);
        console.log(p2);
        var dis = AMap.GeometryUtil.distance(p1, p2);
        document.getElementById('length').innerText = dis;
    }

</script>
</body>
</html>