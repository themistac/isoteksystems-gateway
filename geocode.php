<?php
 
$address = 'GU34 1TB';
$coordinates = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&sensor=true');
$coordinates = json_decode($coordinates);

echo "<pre>" 
echo "Latitude:" . $coordinates->results[0]->geometry->location->lat;
echo "Longitude:" . $coordinates->results[0]->geometry->location->lng;
echo "</pre>"