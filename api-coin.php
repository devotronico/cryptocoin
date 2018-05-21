<?php
if ( isset($_GET['coin']) &&  $_GET['coin'] && $_GET['coin']!=='coin...' )
{ 
    
        $coin = $_GET['coin'];
        $url = 'https://api.coinmarketcap.com/v1/ticker/'.urlencode($coin).'/';
        $urlContent = @file_get_contents($url);
        $coin = json_decode($urlContent, true);

        $h24_volume_usd = number_format($coin['0']['24h_volume_usd'] , 0, ',', '.'); // METTE I PUNTINI TRA UNA STRINGA DI NUMERI
        $market_cap_usd = number_format($coin['0']['market_cap_usd'] , 0, ',', '.'); //  E ELIMINA I NUMERI DECIMALI
        $available_supply =number_format($coin['0']['available_supply'] , 0, ',', '.'); // ES. 123456789 DIVENTA 123.456.789
        $max_supply = number_format($coin['0']['max_supply'] , 0, ',', '.');

        $ts = $coin['0']['last_updated']; // CONVERTIRE IL FORMATO unix timestamps IN UN FORMATO DI DATA NORMALE 
        $date = new DateTime("@$ts"); // ES. 1509909852 DIVENTA 15/10/1983 13:30:56
        $last_updated = $date->format('H:i:s');
        $date = $date->format('d-m-Y');
  
}
else
{
        $url = 'https://api.coinmarketcap.com/v1/ticker/bitcoin/';
        $urlContent = @file_get_contents($url);
        $coin = json_decode($urlContent, true);
        
        $h24_volume_usd = number_format($coin['0']['24h_volume_usd'] , 0, ',', '.');
        $market_cap_usd = number_format($coin['0']['market_cap_usd'] , 0, ',', '.');
        $available_supply =number_format($coin['0']['available_supply'] , 0, ',', '.');
        $max_supply = number_format($coin['0']['max_supply'] , 0, ',', '.');
    
        $ts = $coin['0']['last_updated'];
        $date = new DateTime("@$ts");
        $last_updated = $date->format('H:i:s');
        $date = $date->format('d-m-Y');  
}
?>