<?php
    $ch = curl_init();
    $location = 'Ipswich,UK';
    $apikey = '5a3c63232831d157dc52f3be86896b6f';
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/weather?q=' . $location . '&appid=' . $apikey);
    $output = curl_exec($ch);
    curl_close($ch);
    $output = json_decode($output, true);
    // echo "<pre>";
    // var_dump($output);

    // echo "<p>The weather in ".$location." is ".$output['weather'][0]['main']."</p>";
    // exit();
    $smarty->assign('current_weather', $output);
    $smarty->assign('current_location', $location);
      

/*
     array(13) {
        ["coord"]=>
        array(2) {
          ["lon"]=>
          float(1.1555)
          ["lat"]=>
          float(52.0592)
        }
        ["weather"]=>
        array(1) {
          [0]=>
          array(4) {
            ["id"]=>
            int(800)
            ["main"]=>
            string(5) "Clear"
            ["description"]=>
            string(9) "clear sky"
            ["icon"]=>
            string(3) "01d"
          }
        }
        ["base"]=>
        string(8) "stations"
        ["main"]=>
        array(6) {
          ["temp"]=>
          float(283.44)
          ["feels_like"]=>
          float(280.03)
          ["temp_min"]=>
          float(282.59)
          ["temp_max"]=>
          float(284.15)
          ["pressure"]=>
          int(1040)
          ["humidity"]=>
          int(58)
        }
        ["visibility"]=>
        int(10000)
        ["wind"]=>
        array(2) {
          ["speed"]=>
          float(2.57)
          ["deg"]=>
          int(50)
        }
        ["clouds"]=>
        array(1) {
          ["all"]=>
          int(0)
        }
        ["dt"]=>
        int(1614444132)
        ["sys"]=>
        array(5) {
          ["type"]=>
          int(1)
          ["id"]=>
          int(1490)
          ["country"]=>
          string(2) "GB"
          ["sunrise"]=>
          int(1614408340)
          ["sunset"]=>
          int(1614447051)
        }
        ["timezone"]=>
        int(0)
        ["id"]=>
        int(2646057)
        ["name"]=>
        string(7) "Ipswich"
        ["cod"]=>
        int(200)
      }
*/
