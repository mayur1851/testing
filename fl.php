<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$ts=NULL;
$ctr=0;
$x32=0;
$i11=0;
$z=0;
$x99=0;
$ooo=NULL;
     function RandomNumber($length){
                      $str="";
                      for($i=0;$i<$length;$i++){
                      $str.=mt_rand(0,9);
                      }
                      return $str;
                      }
    function rando($length) {
                          $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
                          $charactersLength = strlen($characters);
                          $randomString = '';
                          for ($i = 0; $i < $length; $i++) {
                              $randomString .= $characters[rand(0, $charactersLength - 1)];
                          }
                          return $randomString;
                      }

function dec($data){
          
    
  $iv='lakQvjv3kB14B9lX';

$key='Zj6gaCFzMmeTXuLuu3YFaRWIET7muIAs';
                     $decode = openssl_decrypt (base64_decode($data), 'aes-256-cbc',$key, 1,$iv); 
            $decode = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $decode);
               return $decode;
           }
  
  
           function enc($data){
            
      
            $iv='lakQvjv3kB14B9lX';

            $key='Zj6gaCFzMmeTXuLuu3YFaRWIET7muIAs';
                             $encode = base64_encode(openssl_encrypt ($data, 'aes-256-cbc',$key, 1,$iv)); 
                     
                       return $encode;
                   }
$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;

$name=NULL;
	

$op=readline("\e[1;91m[\e[1;97m+\e[1;91m]\e[0m"."Input 1 for follow 2 for like: ");
$id=readline("\e[1;91m[\e[1;97m+\e[1;91m]\e[0m"."Input user-id for follow or media-id for likes: ");
$amt=readline("\e[1;91m[\e[1;97m+\e[1;91m]\e[0m"."Input amount in want multiple of 2(if follow) or 5(if likes): ");


$op = preg_replace('/\s+/', '', $op);

$id = preg_replace('/\s+/', '', $id);

$amt = preg_replace('/\s+/', '', $amt);

$url1='https://api.fowoii.com/api/v1/user/login';

 $headers1=array('Host: api.fowoii.com', 
 'accept: application/json, text/plain, */*', 
 'user-agent: Mozilla/5.0 (Linux; Android 11; AC2001 Build/RP1A.201005.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/95.0.4638.74 Mobile Safari/537.36', 
 'content-type: application/json;charset=UTF-8', 
 'origin: https://www.fowoii.com', 
 'x-requested-with: com.space.mass.likes', 
 'sec-fetch-site: same-site', 
 'sec-fetch-mode: cors', 
 'sec-fetch-dest: empty', 
 'referer: https://www.fowoii.com/', 
 'accept-encoding: gzip, deflate', 
 'accept-language: en-US,en;q=0.9',
'X-Forwarded-For: '.$ipz.'');




function http_post($url, $data){
    global $headers1;



$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_URL,$url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers1);
 $data = curl_exec($ch); 
$err = curl_error($ch); curl_close($ch);

$json = json_decode($data,true);
  $json=$json['data'];
return $d=dec($json);



    } 

    


function setup(){




$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");





global $x32,$ts,$name,$i11,$ts,$a2,$x99;
$ts=floor(microtime(true)*1000);
$x32=rando(32);
$x99=rando(99);
$fname = $f[mt_rand(0,50)];
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$i11=RandomNumber(10);
$i11='3'.$i11;
$name=''.$fname.''.$lname.''.$no.'';
 global $url1,$d,$uid;
 $j11=RandomNumber(10);
$j11='2'.$j11;

 $d=enc('{"userId":"'.$uid.'","productId":"com.space.mass.likes","instUserId":"'.$i11.'","version":"1.2.1","deviceInfo":{"timezone":"50.00","timestamp":"'.$ts.'","lang":"en","deviceModel":"'.$a2.'01","systemVersion":"11","regionCode":"US"},"loginId":"'.$x32.'","otherLoginIds":["'.$x32.'","'.$i11.'","'.$j11.'"]}');


$d='{"data":"'.$d.'"}';

  $uidx=http_post($url1,$d);
$uidx= json_decode($uidx,1);
 $uid= $uidx['userInfo']['userId']; 
return $uid;
 
 
}
 $uid=setup();


$green = "\e[1;32m";
    $blue = "\e[1;34m";
    $red = "\e[1;31m";
    $white = "\33[37;1m";
    $yellow = "\e[1;33m";
    $cyan = "\e[1;36m";
    $purple = "\e[1;35m";
    $gray = "\e[1;30m";  
    $res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[1;31m";
$red2="\033[1;31m";
$green2="\033[1;32m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

system("clear");



echo "$red2

██╗░░██╗██╗████████╗██╗░░░░░███████╗██████╗░
██║░░██║██║╚══██╔══╝██║░░░░░██╔════╝██╔══██╗
███████║██║░░░██║░░░██║░░░░░█████╗░░██████╔╝
██╔══██║██║░░░██║░░░██║░░░░░██╔══╝░░██╔══██╗
██║░░██║██║░░░██║░░░███████╗███████╗██║░░██║
╚═╝░░╚═╝╚═╝░░░╚═╝░░░╚══════╝╚══════╝╚═╝░░╚═╝\n";


echo "$putih2 STATUS SCRIPT :$red2 V3 PREMIUM         $putih2 SERVER |$yellow2 ONLINE
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo $putih2." DATE ".$green2.date("d.m.Y ").$putih2."  TIME ".$green2.date("H:i:s");
echo "\n━━━━━━━━━━━━━━━━━━━━\033[1;31m404\033[1;32m━━━━━━━━━━━━━━━━━━━━━━━━━━";
echo $baner2 = "
$putih2 CREATOR        :$green2 HITLER SOR
$putih2 INSTAGRAM      :$green2 @EXT_.MAYUR_
$putih2 POWERED BY     :$green2 HITLER PUBLIC SERVER
$putih2 TOOL INFO      :$green2  LIKE+FOLLOW MINER⭐
";
echo $blue2."━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";

 while(true) {
    if($amt<=0){
        echo "\r                                  \r";
        echo   $d="\r\033[1;33mOPERATION COMPLETED!!"."\033[1;36m[0]";
           echo "\r                               \r";
        exit(0);
    }
    
if(($ctr>=1) || ($z==-1)){
    setup();
    echo "\r                                  \r";
 echo   $d="\r\033[1;33m"."AUTOMATICALLY Changed Identity ID..."."\033[1;36m[0]";
    echo "\r                                   \r";
    $GLOBALS['ctr']=0;
}
    
if($z<=0){

    $d=enc('{"userId":"'.$uid.'","productId":"com.space.mass.likes","instUserId":"'.$i11.'","version":"1.2.1","deviceInfo":{"timezone":"50.00","timestamp":"'.$ts.'","lang":"en","deviceModel":"'.$a1.'01","systemVersion":"11","regionCode":"US"},"types":["follow","like"]}');
    $d='{"data":"'.$d.'"}'; $run = http_post('https://api.fowoii.com/api/v1/feed/get', $d);
$ooo = json_decode($run,true);
$ccc=$ooo['feeds'];
$zzzz=count($ccc);
 $z=$zzzz-1;

 
 }
 $oid=$ooo['feeds'][$z]['orderId'];
 $ot=$ooo['feeds'][$z]['orderType'];

if($ot=='follow')
{

$mid=$ooo['feeds'][$z]['user']['instUserId'];
}
else
{

$mid=$ooo['feeds'][$z]['media']['mediaId'];
}

  $act='{\"status\":\"ok\",\"message\":\"ok\"}';
  $rd='{"userId":"'.$uid.'","productId":"com.space.mass.likes","instUserId":"'.$i11.'","version":"1.2.1","deviceInfo":{"timezone":"50.00","timestamp":"'.$ts.'","lang":"en","deviceModel":"'.$a1.'01","systemVersion":"11","regionCode":"US"},"feedId":"'.$mid.'","feedType":"'.$ot.'","orderId":"'.$oid.'","actResult":"'.$act.'"}';
$d=enc($rd);
 $d='{"data":"'.$d.'"}';

$run = http_post('https://api.fowoii.com/api/v1/feed/act', $d);
$json = json_decode($run,true);


$dd=$json['balance'];


echo $yellow."Total COINS : ".$red.$dd.PHP_EOL;
echo $white."=========================================================\n";
echo "\r                                  \r";
  echo "\r\033[1;33m"."Please wait..."."\033[1;36m[0]  ";
echo "\r                                   \r";



if($dd>=30 && $op==1 && $amt!=0){
  $d=enc('{"userId":"'.$uid.'","productId":"com.space.mass.likes","instUserId":"'.$i11.'","version":"1.2.1","deviceInfo":{"timezone":"50.00","timestamp":"'.$ts.'","lang":"en","deviceModel":"'.$a2.'01","systemVersion":"11","regionCode":"US"},"offerId":3001,"insUserInfo":{"instaUsername":"'.$name.'","instaFullName":"'.$name.'","profileUrl":"https://lh3.googleusercontent.com/ogw/ADea4I4z6u8BFvVYCaD0RC7z'.$x99.'","instUserId":"'.$id.'"}}');
  $d='{"data":"'.$d.'"}';

$run=http_post('https://api.fowoii.com/api/v1/order/create',$d);
$json = json_decode($run,true);
$xx=$json['order']['isValid'];
if($xx){
$d="\r\033[1;33m"."SUCCESSFULLY SENT 2 Followers !!!! CHECK YOUR PROFILE..."."\033[1;36m[0]";

$ctr++;
$amt--;

}
else{
  $d="\r\033[1;33m"."ERROR OCCURED..."."\033[1;36m[0]";
}
}
else
if($dd>=25 && $op==2 && $amt!=0){
  $d=enc('{"userId":"'.$uid.'","productId":"com.space.mass.likes","instUserId":"'.$i11.'","version":"1.2.1","deviceInfo":{"timezone":"50.00","timestamp":"'.$ts.'","lang":"en","deviceModel":"'.$a2.'01","systemVersion":"11","regionCode":"US"},"offerId":3001,"insUserInfo":{"instaUsername":"'.$name.'","instaFullName":"'.$name.'","profileUrl":"https://lh3.googleusercontent.com/ogw/ADea4I4z6u8BFvVYCaD0RC7z'.$x99.'","instUserId":"'.$id.'"}}');

  $d=enc('{"userId":"'.$uid.'","productId":"com.space.mass.likes","instUserId":"'.$i11.'","version":"1.2.1","deviceInfo":{"timezone":"50.00","timestamp":"'.$ts.'","lang":"en","deviceModel":"'.$a1.'01","systemVersion":"11","regionCode":"US"},"offerId":2001,"insMediaInfo":{"thumbnailUrl":"https://lh3.googleusercontent.com/ogw/ADea4I4z6u8BFvVYCaD0RC7z'.$x99.'","lowResolutionUrl":"https://lh3.googleusercontent.com/ogw/ADea4I4z6u8BFvVYCaD0RC7z'.$x99.'","mediaId":"'.$id.'","instUserId":"'.$id.'","instaUsername":"'.$name.'","instaFullName":"'.$name.'"}}');
  $d='{"data":"'.$d.'"}';

$run=http_post('https://api.fowoii.com/api/v1/order/create',$d);
$json = json_decode($run,true);
$xx=$json['order']['isValid'];
if($xx){
$d="\r\033[1;33m"."SUCCESSFULLY SENT 5 Likes !!!! CHECK YOUR PROFILE..."."\033[1;36m[0]";

$ctr++;
$amt--;

}
else{
  $d="\r\033[1;33m"."ERROR OCCURED..."."\033[1;36m[0]";
}
}
else{
    $d="\r\033[1;33m"."Please wait..."."\033[1;36m[0]";

}
echo "\r                                  \r";
  echo $d;
echo "\r                                   \r";
echo $green.$dd.PHP_EOL;
$z--;
}