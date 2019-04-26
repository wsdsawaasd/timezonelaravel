<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <h1>Application to see the current time of cities in the world</h1>
    <label for="select-city"></label>
    <select id="select-city">
        <option>select city</option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Ha ba na, Cuba</option>
        <option value="Asia-Ho-ng-Kong">Ho-ng Kong</option>
        <option value="Asia-HCM">HCM, Vi ệt Nam</option>
    </select>
</div>
<script>
    document.getElementById("select-city").onchange = function () {
        ChooseCity()
    };

    function ChooseCity() {
        let time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
</body>
</html>