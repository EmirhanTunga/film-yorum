<?php

namespace App\Libraries;

use App\Models\Logs;
use App\Models\SmsUser;
use Route, Curl;

class Helpers
{
    public static function turkishMonths($date)
    {
        $turkishMonths = [
            'January'   => 'Ocak',
            'February'  => 'Şubat',
            'March'     => 'Mart',
            'April'     => 'Nisan',
            'May'       => 'Mayıs',
            'June'      => 'Haziran',
            'July'      => 'Temmuz',
            'August'    => 'Ağustos',
            'September' => 'Eylül',
            'October'   => 'Ekim',
            'November'  => 'Kasım',
            'December'  => 'Aralık',
        ];

        return str_replace(array_keys($turkishMonths), array_values($turkishMonths), $date);
    }

    public static function activeMenu($groupArr)
    {
        if (Route::currentRouteName() == 'panel.' . $groupArr[0]) {
            return 'active open';
        }

        $temp = array();
        foreach ($groupArr as $value) {
            array_push($temp, 'panel.' . $value . '_list');
            array_push($temp, 'panel.' . $value . '_form');
        }

        return in_array(Route::currentRouteName(), $temp) ? 'active open' : '';
    }


    public static function sendsmsSOAP($telefon, $message, $ip, $user_agent, $multiple = null, $otp = 0)
    {
        try {

            if ($multiple)
                $allPhone = implode(",", $telefon);
            else
                $allPhone =  '<Receiver>' . $telefon . '</Receiver>';

            $quer = array("phone" => $telefon, "message" => $message, "otp" => $otp);
            $message = trim($message);

            $username = env('SOAPSMS_USERNAME', null);
            $password = env('SOAPSMS_PASSWORD', null);
            $usercode = env('SOAPSMS_USERCODE', null);
            $accountID = env('SOAPSMS_ACCOUNTID', null);
            if ($otp == 1) {
                $accountID = env('SOAPSMS_ACCOUNTID_OTP', null);
            }
            $originator = env('SOAPSMS_ORIGINATOR', null);
            $url = "https://webservice.asistiletisim.com.tr/SmsProxy.asmx?WSDL";
            $request_headers = array(
                "Content-Type: text/xml; charset=utf-8",
                "SOAPAction: https://webservice.asistiletisim.com.tr/SmsProxy/sendSms",
                "Accept: text/xml"
            );

            $xml = '
            <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns="https://webservice.asistiletisim.com.tr/SmsProxy">
            <soapenv:Header/>
                <soapenv:Body>
                    <sendSms>
                        <requestXml>
                        <![CDATA[
                            <SendSms>
                                <Username>' . $username . '</Username>
                                <Password>' . $password . '</Password>
                                <UserCode>' . $usercode . '</UserCode>
                                <AccountId>' . $accountID . '</AccountId>
                                <Originator>' . $originator . '</Originator>
                                <SendDate></SendDate>
                                <ValidityPeriod>60</ValidityPeriod>
                                <MessageText>' . $message . '</MessageText>
                                <IsCheckBlackList>0</IsCheckBlackList>
                                <ReceiverList>
                                    ' . $allPhone . '
                                </ReceiverList>
                            </SendSms>
                        ]]>
                        </requestXml>
                    </sendSms>
                </soapenv:Body>
            </soapenv:Envelope>
            ';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

            if (curl_errno($ch)) {
                return 999;
            } else {
                $response = curl_exec($ch);
                curl_close($ch);

                $xml = str_ireplace(['SOAP-ENV:', 'SOAP:'], '', $response);
                $xml = simplexml_load_string($xml);
                $xml = json_decode(json_encode($xml), TRUE);
                $response_code = $xml["Body"]["sendSmsResponse"]["sendSmsResult"]["ErrorCode"];
                if ($multiple) {
                    SmsUser::latest()->first()->update([
                        'response' => !is_null($xml["Body"]["sendSmsResponse"]["sendSmsResult"]["MessageIdList"] ?? null) ? json_encode($xml["Body"]["sendSmsResponse"]["sendSmsResult"]["MessageIdList"]) : NULL,
                        'list_id' => $xml["Body"]["sendSmsResponse"]["sendSmsResult"]["PacketId"] ?? 0,
                        'status' => $xml["Body"]["sendSmsResponse"]["sendSmsResult"]["ErrorCode"] == 0 ? 1 : $xml["Body"]["sendSmsResponse"]["sendSmsResult"]["ErrorCode"],
                    ]);
                } else {
                    Helpers::logInsert("SMS", $telefon, $quer, $response_code == 0 ? 1 : $response_code, $ip, $user_agent);
                }

                return $response_code;
            }
        } catch (\Throwable $th) {
            $quer["err"] =  $th->getMessage();
            Helpers::logInsert("SMS", $telefon, $quer, 999, $ip, $user_agent);
            return 999;
        }
        return 999;
    }

    public static function JsonWarning($message)
    {
        return response()->json(['status' => false, 'message' =>  $message], 400);
    }

    public static function sendSMS($phone, $message)
    {
        $response = Curl::to('https://api.netgsm.com.tr/sms/send/get/')
            ->withData(array(
                'usercode' => env('SMS_USERNAME', env('SMS_USERNAME')),
                'password' => env('SMS_PASSWORD', env('SMS_HEADER')),
                'msgheader' => env('SMS_HEADER', env('SMS_PASSWORD')),
                'gsmno' => $phone,
                'message' => $message,
            ))
            ->get();

        return explode(' ', $response)[0] == '00';
    }

    public static function validationArray($messages = NULL)
    {
        $message = array();
        foreach ($messages->get('*') as $item) {
            array_push($message, $item[0]);
        }

        return $message;
    }


    public static function tr_strtoupper($text)
    {
        $text = mb_strtoupper(Helpers::tr_up($text), 'UTF-8');
        return $text;
    }

    public static function tr_up($str)
    {
        $str = str_replace('i', 'İ', $str);
        $str = str_replace('ı', 'I', $str);
        return $str;
    }

    public static function shortURL($url)
    {
        $url = file_get_contents("http://tinyurl.com/api-create.php?url=$url");

        return str_replace('https://', '', $url);
    }

    public static function PhoneNumber($phone)
    {
        return  preg_replace("/[^0-9]/", "", $phone);
    }

    public static function replace_tr($text)
    {
        $text = trim($text);
        $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ');
        $replace = array('c', 'c', 'g', 'g', 'i', 'i', 'o', 'o', 's', 's', 'u', 'u', '-');
        $new_text = str_replace($search, $replace, $text);
        return strtolower($new_text);
    }

    public static function logInsert($source, $what, $before, $status, $ip, $user_agent)
    {
        Logs::create([
            'source' => $source,
            'what' => $what,
            'before' =>  json_encode($before),
            'status' => $status,
            'ip' => $ip,
            'user_agent' => $user_agent
        ]);
    }
}
