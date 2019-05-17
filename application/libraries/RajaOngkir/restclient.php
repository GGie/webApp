<?php

/**
 * RajaOngkir REST Client
 * 
 * @author Damar Riyadi <damar@tahutek.net>
 */
class RESTClient {

    private $endpoint;
    private $account_type;
    private $api_key;
    private $api_url;

    public function __construct($api_key, $endpoint, $account_type) {
        $this->api_key = $api_key;
        $this->endpoint = $endpoint;
        $this->account_type = $account_type;
        $this->api_url = "https://rajaongkir.com/api/";
        $this->pro_api_url = "https://pro.rajaongkir.com/api/";

        $this->cacheExpired = 1440;
    }

    /**
     * HTTP POST method
     * 
     * @param array Parameter yang dikirimkan
     * @return string Response dari cURL
     */
    function post($params) {

        if ( $this->account_type != "pro")
            $urlparam = $this->api_url . "" . $this->account_type . "/" . $this->endpoint;
        else
            $urlparam = $this->pro_api_url . "/" . $this->endpoint;


        $cacheFile = APPPATH . '/cache/' . md5($urlparam . (json_encode($params) )) . '.json';

        if (file_exists($cacheFile)) {
            $fh = fopen($cacheFile, 'r');
            $cacheTime = trim(fgets($fh));
        if ($cacheTime > strtotime('-' . $this->cacheExpired . ' minutes')) {
                $createCache = false;
                $return = str_replace($cacheTime,'',fread($fh,filesize($cacheFile)));
                fclose($fh);
            } else {
                $createCache = true;
            }
        } else {
            $createCache = true;
        }

        if($createCache == true){
            //get API
            $curl = curl_init();
            $header[] = "Content-Type: application/x-www-form-urlencoded";
            $header[] = "key: $this->api_key";
            $query = http_build_query($params);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);

            if ( $this->account_type != "pro")
            curl_setopt($curl, CURLOPT_URL, $this->api_url . "" . $this->account_type . "/" . $this->endpoint);
            else
            curl_setopt($curl, CURLOPT_URL, $this->pro_api_url . "/" . $this->endpoint);

            curl_setopt($curl, CURLOPT_POST, TRUE);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $query);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            $request = curl_exec($curl);
            $return = ($request === FALSE) ? curl_error($curl) : $request;
            $err = curl_error($curl);
            curl_close($curl);
            //get API EOF

            if ($err) {
              return $err;
              exit;
            } else {
              $fh = fopen($cacheFile, 'w');
              fwrite($fh, time() . "\n");
              fwrite($fh, $return);
              fclose($fh);
            }
        }

        return $return;
    }

    /**
     * HTTP GET method
     * 
     * @param array Parameter yang dikirimkan
     * @return string Response dari cURL
     */
    function get($params) {
        $curl = curl_init();
        $header[] = "key: $this->api_key";
        $query = http_build_query($params);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);

        if ( $this->account_type != "pro")
        curl_setopt($curl, CURLOPT_URL, $this->api_url . "" . $this->account_type . "/" . $this->endpoint . "?" . $query);
        else
        curl_setopt($curl, CURLOPT_URL, $this->pro_api_url . $this->endpoint . "?" . $query);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        $request = curl_exec($curl);
        $return = ($request === FALSE) ? curl_error($curl) : $request;
        curl_close($curl);
        return $return;
    }

}
