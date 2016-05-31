<?php
/**
 *数据库测试，使用PDO_MYSQL
 *
 **/
try {
    $dbh = new PDO('mysql:host=mysql;dbname=dbname', 'dbuser', 'dbpass');
    foreach($dbh->query('SELECT * from test') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
/**Redis测试**/
  $redis = new Redis();
  //var_dump($redis);
  $redis->connect('redis',6379);
  $redis->set('test','hello redis');
   echo $redis->get('test');
 //存储数据到列表中
   $redis->lpush("tutorial-list", "Redis");
   $redis->lpush("tutorial-list", "Mongodb");
   $redis->lpush("tutorial-list", "Mysql");
   // 获取存储的数据并输出
   $arList = $redis->lrange("tutorial-list", 0 ,5);
   echo "Stored string in redis";
   print_r($arList);



	exit;
?>
