<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/views/php/connection/db_connect.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/views/php/utils/randomizer.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/views/php/utils/cryptology.php');


function insertUser($username, $email, $password, $creater_uid)
{
    global $con;

    $Random_Email = randomChars(0, 6, "Numbers");
    $Random_SMS = randomChars(0, 6, "Numbers");
    $Random_UID = randomChars(0, 15, "All");
    $Random_Key = randomChars(0, 40, "All");

    $password = encrypt($password, "AES-256-CBC", $Random_Key);

    $insert_user_query = "INSERT INTO users (Unique_Id, Username, Email, Password, Email_Verification ,SMS_Verification, Active, Created_By_UID, Cipher_Key) VALUES ('$Random_UID', '$username', '$email', '$password', '$Random_Email', '$Random_SMS', '1', '$creater_uid', '$Random_Key')";

    $result = mysqli_query($con, $insert_user_query);

    if ($result) {
        echo json_encode($result);
        insertUserInformation($Random_UID);
    } else {
        echo "Error User Insertation: " . mysqli_error($con);
        die(header("HTTP/1.0 404 Not Found"));
    }
}

function insertUserInformation($user_uid)
{
    global $con;

    $Random_UID = randomChars(0, 15, "All");

    $insert_users_information_query = "INSERT INTO users_information (User_UID, Unique_Id) VALUES ('$user_uid', '$Random_UID')";

    $result = mysqli_query($con, $insert_users_information_query);

    if ($result) {
        echo json_encode($result);
    } else {
        echo "Error Users Information Insertation: " . mysqli_error($con);
    }
}

function checkUsername($username)
{
    global $con;

    $check_username_query = mysqli_query($con, "SELECT * FROM users WHERE Username = '$username'");

    $result = mysqli_fetch_array($check_username_query);

    if ($result['Username'] != null) {
        echo json_encode($result);
        if ($result['Username'] == $username) {
            die(header("HTTP/1.0 404 Not Found"));
        } else {
            echo 'This username is usable';
        }
    } else {
        echo "Error While Checking Username In 'users' Table: " . mysqli_error($con);
    }
}

function checkEmail($email)
{
    global $con;

    $check_email_query = mysqli_query($con, "SELECT * FROM users WHERE Email = '$email'");

    $result = mysqli_fetch_array($check_email_query);

    if ($result['Email'] != null) {
        echo json_encode($result);
        if ($result['Email'] == $email) {
            die(header("HTTP/1.0 404 Not Found"));
        } else {
            echo 'This email is usable';
        }
    } else {
        echo "Error While Checking Email In 'users' Table: " . mysqli_error($con);
    }
}

function getAllUsers($filter)
{
    global $con, $host, $username, $password, $database;
    $filter = "";
    if ($filter == "") {
        $get_all_users_query = mysqli_query($con, "SELECT * FROM users WHERE Active = '1' ORDER BY User_Id DESC");
    } else {
        $get_all_users_query = mysqli_query($con, "SELECT * FROM users WHERE Username LIKE '%$filter%' OR Email LIKE'%$filter%' OR Created_At LIKE '%$filter%' AND Active = '1' ORDER BY User_Id DESC");
    }


    $table = "users";
    $primaryKey = 'User_Id';

    $sql_details = array(
        'user' => $username,
        'pass' => $password,
        'db'   => $database,
        'host' => $host
    );

    $columns = array(
        array('db' => 'Username', 'dt' => 0),
        array('db' => 'Name',  'dt' => 1),
        array('db' => 'Surname',   'dt' => 2),
        array('db' => 'Birthday',     'dt' => 3),
        array('db' => 'Profession',     'dt' => 4),
        array('db' => 'Education',     'dt' => 5)
    );

    require_once($_SERVER['DOCUMENT_ROOT'] . '/views/php/utils/ssp.php');

    echo json_encode(
        SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
    );


    if ($get_all_users_query) {
        while ($row_users = mysqli_fetch_array($get_all_users_query)) {

            $fetch_all_users_information_query = mysqli_query($con, "SELECT * FROM users_information WHERE User_UID = '$row_users[Unique_Id]'");

            while ($rows_informations = mysqli_fetch_array($fetch_all_users_information_query)) {

                json_encode($row_users);
                $today = date("Y-m-d");
                $diff = date_diff(date_create($rows_informations['Birthday']), date_create($today));

                echo '<div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                    <img src="../../../contents/admin/assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="../../../contents/admin/assets/img/theme/team-4.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                            <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">Friends</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Photos</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">';

                if ($rows_informations['Name'] == "" || $rows_informations['Surname'] == "") {
                    echo '<h5 class="h3">Bilgi Verilmemiş';
                } else {
                    echo '<h5 class="h3">' . $rows_informations['Name'] . ' ' . $rows_informations['Surname'] . '';
                }
                if ($rows_informations['Birthday'] == "") {
                    echo '<span class="font-weight-light">, 0</span>';
                } else {
                    echo '<span class="font-weight-light">, ' . $diff->format('%y') . '</span>';
                }

                echo '</h5>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>@' . $row_users['Username'] . '
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>' . $rows_informations['Profession'] . '
                            </div>
                            <div>';
                if ($rows_informations['Education'] == "") {
                    echo '<i class="ni education_hat mr-2"></i>Bilgi Verilmemiş';
                } else {
                    echo '<i class="ni education_hat mr-2"></i>' . $rows_informations['Education'] . '';
                }
                echo '
                            </div>
                        </div>
                    </div>
                </div>
                </div>';
            }
        }
    } else {
        echo "Error While Gathering Users From 'users' Table: " . mysqli_error($con);
    }
}

function getFilteredUsers($conditions = array())
{

    $tblName = 'users';
    $sql = 'SELECT ';
    $sql .= array_key_exists("select", $conditions) ? $conditions['select'] : '*';
    $sql .= ' FROM ' . $this->tblName;
    if (array_key_exists("where", $conditions)) {
        $sql .= ' WHERE ';
        $i = 0;
        foreach ($conditions['where'] as $key => $value) {
            $pre = ($i > 0) ? ' AND ' : '';
            $sql .= $pre . $key . " = '" . $value . "'";
            $i++;
        }
    }

    if (array_key_exists("search", $conditions)) {
        $sql .= (strpos($sql, 'WHERE') !== false) ? ' AND ' : ' WHERE ';
        $i = 0;
        $sql_src = '';
        foreach ($conditions['search'] as $key => $value) {
            $pre = ($i > 0) ? ' OR ' : '';
            $sql_src .= $pre . $key . " LIKE '%" . $value . "%'";
            $i++;
        }

        $sql .= !empty($sql_src) ? ' (' . $sql_src . ') ' : '';
    }

    if (array_key_exists("order_by", $conditions)) {
        $sql .= ' ORDER BY ' . $conditions['order_by'];
    } else {
        $sql .= ' ORDER BY id DESC ';
    }

    if (array_key_exists("start", $conditions) && array_key_exists("limit", $conditions)) {
        $sql .= ' LIMIT ' . $conditions['start'] . ',' . $conditions['limit'];
    } elseif (!array_key_exists("start", $conditions) && array_key_exists("limit", $conditions)) {
        $sql .= ' LIMIT ' . $conditions['limit'];
    }

    $result = $this->db->query($sql);

    if (array_key_exists("return_type", $conditions) && $conditions['return_type'] != 'all') {
        switch ($conditions['return_type']) {
            case 'count':
                $data = $result->num_rows;
                break;
            case 'single':
                $data = $result->fetch_assoc();
                break;
            default:
                $data = '';
        }
    } else {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
    }
    return !empty($data) ? $data : false;
}
