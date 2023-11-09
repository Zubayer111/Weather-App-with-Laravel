<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="weather-container">
        <h1>Weather App</h1>
        <i class="fa-regular fa-cloud"></i>
        <div class="location">
            <h2>Location: {{$country}}, {{$location}}</h2>
        </div>
        <div class="temperature">
            <h2>Temperature: <span id="temperature">{{$currentTemp}}°C</span></h2>
        </div>
        <div class="condition">
            <h2>Weather Condition: <span id="condition">{{$currentCondition}}</span></h2>
        </div>
    </div>
</body>
</html> 



