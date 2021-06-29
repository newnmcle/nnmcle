<?php 



$pid = $_GET['oid'];
$red = $_GET['refId'];




 
$data =[
    'amt'=> 1000,
    'rid'=> $red,
    'pid'=> $pid,
    'scd'=> 'EPAYTEST'
];

    $curl = curl_init("https://uat.esewa.com.np/epay/transrec");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    echo $response;
    curl_close($curl);
    if(strpos($response, "Success") !== false){
        header("Location: https://newnmcle.blogspot.com/p/take-exam.html");
    } else{
        header("Location: https://newnmcle.blogspot.com/");
    }
    

?>