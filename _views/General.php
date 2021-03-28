<?php
namespace PageConfig{
    
    use DateTime;

    final class General{
    
        private static $cipher = 'GUR';
        private static $iv = 'XXXXXXXXX';
        private static $salt = 'XYZXYZ';

        public static function Alert($message, $type="default"){
            $alertRes = '';
            $alertType= '';
            $alertHeading='';
            switch ($type) {
                case 'success':
                    $alertType = 'alert-success';
                    $alertHeading = 'Success';
                    break;
                case 'info':
                    $alertType = 'alert-info';
                    $alertHeading = 'Information';
                    break;
                case 'warning':
                    $alertType = 'alert-warning';
                    $alertHeading = 'Warning';
                    break;
                case 'error':
                    $alertType = 'alert-danger';
                    $alertHeading = 'Error';
                    break;
                default:
                    $alertType = 'alert-light border';
                    $alertHeading = '';
                    break;
            }
            $alertRes = '<div class="alert '.$alertType.' alert-dismissible fade show" role="alert"> <strong>'.$alertHeading.': </strong>&nbsp;'.trim($message).' <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button></div>';
            return $alertRes;
        }
        public static function ShortCode($len=15){
            $chars = '0123456789abcdefghijklmnopqrstuvwxyz'.date('dmYhmstt').'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charln = strlen($chars);
            $resultStr = '';
            for ($x = 0; $x < $len; $x++) {
                $resultStr .= $chars[rand(0, $charln - 1)];
            }
            return $resultStr;
        }
        public static function Codecs($option,$paramVal){
            $retVal = '';
            if(!empty($option) && !empty($paramVal)){
                $ciphering = General::$cipher; 
                //$iv_length = 
                openssl_cipher_iv_length($ciphering); 
                $options = 0; 
                $iv = General::$iv; 
                $key = General::$salt;
                if($option == 1){ //1-encrypt; 2-decrypt
                    $retVal = openssl_encrypt($paramVal, $ciphering, $key, $options, $iv);  
                }
                else{
                    $retVal = openssl_decrypt ($paramVal, $ciphering, $key, $options, $iv); 
                }
            }
            return $retVal;
        }
        public static function GroupFormat($num) {
            $retVal = $num;
            if($num>1000) {
                $x = round($num);
                $x_number_format = number_format($x);
                $x_array = explode(',', $x_number_format);
                $x_parts = array('K+', 'M+', 'B+', 'T+');
                $x_count_parts = count($x_array) - 1;
                $x_display = $x;
                $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
                $x_display .= $x_parts[$x_count_parts - 1];
                $retVal = $x_display;
            }
            return $retVal;
        }
        public static function Aliter($name){
            $returnName = $name;
            $propName = explode(' ',$name);
            if(sizeof($propName) > 1){
                $firstLetter = substr($propName[0],0,1);
                $secondLetter = substr($propName[1],0,1);
                $returnName = strtoupper($firstLetter.$secondLetter);
                if(strlen($returnName) > 2) $returnName = substr($returnName,0,2);
            }
            else{
                $returnName = substr($name,0,1);
            }
            return $returnName;
        }
        public static function TimerSpan($datetime, $full = false) {
            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);

            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;

            $string = array(
                'y' => 'year',
                'm' => 'month',
                'w' => 'week',
                'd' => 'day',
                'h' => 'hour',
                'i' => 'minute',
                's' => 'second',
            );
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }

            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }
        public static function XploreLabels($tagsArr,$max=0,$limit=3){
            $refLbls = '';
            if(!empty($tagsArr)){
                $rkywds = explode(',', $tagsArr);
                if($max>0){
                    $rkywds = explode(',', $tagsArr,$max);
                }
                $statrKywds = '';
                if($limit < 0){
                    $limit = 3;
                }
                for ($rtag = 0; $rtag < $limit; $rtag++) {
                    $statrKywds .= '<a href="./search?q=' . trim($rkywds[$rtag]) . '" target="_top" rel="search" hreflang="en_US">' . $rkywds[$rtag] . '</a>, ';
                }
                $refLbls = rtrim($statrKywds, ', ');
            }
            return $refLbls;
        }
    }
}
