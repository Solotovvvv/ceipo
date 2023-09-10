<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caloocan City Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #map {
            display: flex;
            margin: auto;
            width: 1000px;
            height: 500px;

        }
    </style>
</head>

<body>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var map = L.map('map').setView([14.6577, 120.9842], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 18,
        }).addTo(map);

        var caloocanBoundary = L.geoJSON().addTo(map);
        $.getJSON('boundary.geojson.json', function (data) {
            caloocanBoundary.addData(data);

            caloocanBoundary.setStyle(function (feature) {
                var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
                return {
                    fillColor: randomColor,
                    fillOpacity: 0.7,
                    color: 'black',
                    weight: 1
                };
            });

            caloocanBoundary.eachLayer(function (layer) {
                layer.bindPopup(layer.feature.properties.NAME_3);
            });

            map.fitBounds(caloocanBoundary.getBounds());
        });
    </script>
</body>

</html>