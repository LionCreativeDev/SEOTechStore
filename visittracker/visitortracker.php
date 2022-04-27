<?php
include_once('../business/DB.php');

$ip = $_SERVER['REMOTE_ADDR'];

/* Set your API key this is a fake example :) */
//$api = "1ade0eec6de005cfeedd12678aac3cbf4f47c120bbf83b3cc";
//$api = "7dd756fa3754e4e94c19ea804b0f76d0eb1fba5e382245af4a919a6e8f51be87"; //for local
$api = "5410ceede411077154c50d999fdf3d4ca29c428b1828f2b5eaf9b61ba628991c"; //for Online
$apiurl = "http://api.ipinfodb.com/v3/ip-city/?key=$api&ip=$ip";

/* Prepare connection to ipinfodb.com and parse results into varibles  */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$apiurl");
/**
 * Ask cURL to return the contents in a variable
 * instead of simply echoing them to the browser.
 */
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
/**
 * Execute the cURL session
 */
$contents = curl_exec($ch);
/**
 * Close cURL session
 */
curl_close($ch);
$pieces = explode(";", $contents);
$country = $pieces['4'];
$city = $pieces['6'];
$city2 = $pieces['5'];
$date = date("Y-m-d");
$time = date("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$query_string = $_SERVER['QUERY_STRING'];
$http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "no referer";
$http_user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "no User-agent";
$web_page = $_SERVER['SCRIPT_NAME'];
$isbot = is_Bot() ? '1' : '0';


/* Conect to the database --- set your credentials  ---  */
//$connection = new mysqli("localhost", "root", "", "test");
/* check connection */
/*if (mysqli_connect_errno()) {
    printf("Connection failed: %s", mysqli_connect_error());
    exit();
}*/

// $sql = "SELECT *, CURDATE() as 'date' FROM `visitor_tracker` where ip='$ip' and date=CURDATE()";
// $result = $conn->query($sql);

// if ($result->num_rows <= 0) {
//     while ($row = $result->fetch_assoc()) {
//         /* Insert data into mysql - table  */
//         mysqli_query($conn,  "INSERT INTO  `visitor_tracker` (`country` ,`city`,`date` ,`time`,`ip` ,`web_page` ,`query_string` ,`http_referer` ,`http_user_agent` ,`is_bot`) VALUES ('$country','$city',  '$date', '$time', '$ip', '$web_page',  '$query_string', '$http_referer', '$http_user_agent','$isbot')");
//         /* close DB-connection */
//         mysqli_close($conn);

//         /* Remove this line on production pages */
//         echo "Your IP is :" . $ip  . " and database is updated ";
//     }
// }
// else{
//     /* Remove this line on production pages */
//     echo "Your IP is :" . $ip  . " and exists in database";
// }
$sql = "SELECT * FROM `visitor_tracker` where ip='".$ip."' and date=CURDATE()";
$result = $conn->query($sql);

//echo $sql.'<br>';

if ($result->num_rows > 0) {
    /* Remove this line on production pages */
    echo "Your IP is :" . $ip  . " and exists in database";
}
else{
    while ($row = $result->fetch_assoc()) {
        /* Insert data into mysql - table  */
        mysqli_query($conn,  "INSERT INTO  `visitor_tracker` (`country` ,`city`,`date` ,`time`,`ip` ,`web_page` ,`query_string` ,`http_referer` ,`http_user_agent` ,`is_bot`) VALUES ('$country','$city',  '$date', '$time', '$ip', '$web_page',  '$query_string', '$http_referer', '$http_user_agent','$isbot')");
        /* close DB-connection */
        mysqli_close($conn);

        /* Remove this line on production pages */
        echo "Your IP is :" . $ip  . " and database is updated ";
    }
}


/* Detect if visitor is a "bot" */
function is_bot()
{
    $botlist = getBotList();
    foreach ($botlist as $bot) {
        if (strpos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
            return true;
    }
    return false;
} //end function is_bot


/* Parse the robotId.txt file into an array */
function getBotList()
{
    if (($handle = fopen("robotid.txt", "r")) !== FALSE) {
        $count = 1;
        $bots = array();
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if (strchr($data[0], "robot-id:")) {
                //echo $count ." $data[0]"."<br>"; // for debuging
                $botId = substr("$data[0]", 9) . "<br>";
                array_push($bots, "$botId");
                $count++;
            }
        }
        fclose($handle);
        return $bots;
    }
} // end function getBotList

?>
