<?php

$email = $_POST["inputEmail"];

var_dump($_POST);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6Lfnij4iAAAAAKC3mdB-Z5_d30xHffU-iwoJnG3a",
    "response"=>$_POST["g_recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

var_dump($ch);

/*
if ($recaptcha["sucess"] === true){

    echo "OK: ".$_POST["inputEmail"];

} else {

    //header("Location: exemplo04.php");
    echo "Tente novamente";

}
*/
?>