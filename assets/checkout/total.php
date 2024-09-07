<?php session_start(); ?> 
<?php
    include "../../koneksi.php";
    $api_key = "b6c90b02b28b3fff0edfba6c332f06c3";
    
    function hitung_ongkir($kota_asal, $kota_tujuan, $kurir, $berat, $key){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "origin=".$kota_asal."&destination=".$kota_tujuan."&weight=".$berat."&courier=".$kurir,
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: ".$key
        ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            $data['result'] = $err;
        } else {
            $result = json_decode($response, true);
            if ($result['rajaongkir']['status']['code'] == 200){
                $data['status'] = true;
                $data['result'] = $result['rajaongkir']['results'][0];
            } else {
                $data['result'] = $result['rajaongkir']['status']['description'];
            }
        }
        return $data;
    }
?>
<?php      
        if (isset($_GET['city_destination'])){

            $kota_tujuan = $_GET['city_destination'];

            $kota_asal='256'; 
            $kurir = 'pos';
            $berat = $_GET['berat'];

            $ongkir = hitung_ongkir($kota_asal,$kota_tujuan,$kurir,$berat,$api_key);
            $hasil= $ongkir['result']['costs'][0]['cost'][0]['value'];
            $subtotal = $_GET['subtotal'];
            $total =  $hasil+$subtotal;

            echo $total;
            
        } else {
        echo $check['result'];
    }
?>
