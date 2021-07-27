<?php
session_start();

include '../../php/connection/db_connect.php';
require_once('../../php/plugins/geoplugin/geoplugin.class.php');
include '../../php/utils/get_mac_ip.php';
include '../../php/utils/getOS_Browser.php';
include '../../php/utils/user-agent.php';
include 'cryptology.php';

$geoplugin = new geoPlugin();
$cryptology  = new encrypt_decrypt();

function login($username, $email, $password)
{
    global $con, $geoplugin, $cryptology;

    $access = false;

    $entered_password = $password;

    $decrypt_password = mysqli_query($con, "SELECT * FROM users WHERE Username='$username'");
    $result_user = mysqli_fetch_array($decrypt_password);

    $decrypted_password = $cryptology->decrypt($result_user['Password'], "AES-256-CBC", $result_user['Cipher_Key']);

    if ($decrypted_password == $entered_password) {
        $password =  $result_user['Password'];
        $access = true;
    } else {
        die(header("HTTP/1.0 404 Not Found"));
    }

    $result_email_username = mysqli_query($con, "SELECT * FROM users WHERE ( Username ='$username' OR Email = '$email') AND Password='$password'");
    $rows = mysqli_fetch_array($result_email_username);

    if ($access) {
        $unique_id = $rows["Unique_Id"];
        $geoplugin->locate();
        $ip_address = getIpAddress();
        $mac_address = getMacAddress();
        $country = $geoplugin->countryName;
        $city = $geoplugin->regionName;
        $os = getOS();
        $browser = getBrowser();

        $longitude =  $geoplugin->longitude;
        $latitude =  $geoplugin->latitude;

        mysqli_query($con, "INSERT INTO logins (User_UID, Ip_Address, Mac_Address, Country, City, Device, OS, Browser, Device_Name, Is_Online,Longitude,Latitude) VALUES ('$unique_id','$ip_address','$mac_address','$country','$city','device','$os','$browser','device name', '1','$longitude','$latitude')");

        $_SESSION['Username'] = $username;
        $_SESSION['Unique_Id'] = $unique_id;
    } else {
        die(header("HTTP/1.0 404 Not Found"));
    }
}

function checkUsername($username)
{
    global $con;

    $check_username_query = mysqli_query($con, "SELECT * FROM users WHERE Username = '$username' OR Email = '$username'");

    $result = mysqli_fetch_array($check_username_query);

    if ($result['Username'] != null) {
        echo json_encode($result);
        if ($result['Username'] != $username || $result['Email'] != $username) {
            echo 'This username is registered!' . $result['Username'];
        }
    } else {
        echo "Error While Checking Username In 'users' Table: " . mysqli_error($con);
        die(header("HTTP/1.0 404 Not Found"));

    }
}
