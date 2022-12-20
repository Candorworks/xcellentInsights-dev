<?php

use App\Models\Leadtype;
use Illuminate\Support\Facades\DB;

    function GetLeadTypes(){
            return Leadtype::pluck('id','name')->toArray();
        }

    function getLinceceType($id){
        return DB::table('licences_types')->where('id',$id)->first()->name;
    }
    function getPriceColumn($id){
        if($id==1){
            $name='single_price';
        }elseif($id==2){
            $name='multi_price';
        }else{
            $name='enterprise_price';
        }
        return $name;
    }


    function sendMail($email, $subject, $params=[], $template)
    {
        $params['subject'] = $subject != '' ? $subject : 'Thanks For Your Query.';
        $params['template'] = $template != '' ? $template : 'thankyou';
        return \Mail::to($email)->send(new \App\Mail\EmailSend($params));
    }

    function AWS3($path)
    {
        return asset("/web/$path");
        // return env('AWS_S3_PATH').$path;
    }

    function getToken($token){
        $token_url = "https://www.universal-tutorial.com/api/getaccesstoken";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $token_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Content-Type: application/json',
                "api-token: ".$token->api_token,
                "user-email: ".$token->email,
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // dd(json_decode($response));
            $res = json_decode($response,true);
            DB::table('token')->update(["auth_token" => $res['auth_token']]);
            
        }
        return $res['auth_token'];
    }

    function getCountries(){
        $token = DB::table('token')->first();
        $url = "https://www.universal-tutorial.com/api/countries/";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Content-Type: application/json',
                "Authorization: Bearer ".$token->auth_token,
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            
            $res = json_decode($response,true);
            if(array_key_exists('error', $res)){
                getToken($token);
                getCountries();
            }
            // dd($res);
            return $res;
            
        }
    }

    function getStates($country){
        $token = DB::table('token')->first();
        $url = "https://www.universal-tutorial.com/api/states/".$country;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Content-Type: application/json',
                "Authorization: Bearer ".$token->auth_token,
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            
            $res = json_decode($response,true);
            if(array_key_exists('error', $res)){
                getToken($token);
                getStates($country);
            }
            // dd($res);
            return $res;
            
        }
    }
?>
