<?php
//$username = $_GET['username'];

// TODO 存入数据库
define('DB_HOST','localhost');//连接的服务器地址
define('DB_USER','root'); //连接数据库的用户名
define('DB_PWD','lijiabin');  //连接数据库的密码
define('DB_NAME','mechanism');//

//连接数据库
$connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
if(!$connect){
  die('数据库连接失败，错误信息：'.mysqli_connect_error());
}
$sql = "insert into user values
  (null, '30', '李强', '用户描述001', 'lkjhcf5555', '枭龙', ' ', '是', '2016-07-26', '23', '2016-05-26', '找死', '2016-07-26');";
$result = $connect->query($sql);
// while( $row = $result->fetch_assoc() ){
 // echo $row["name"];
 //  echo $row["article"];
 //  echo $row["type"];
 //  echo $row["duration"];
 //  echo $row["results"];
   echo $sql;
 // }
?>
