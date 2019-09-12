二、php脚本连接数据库

1.连接数据库

a.	打开ec2安全组(不打开端口也可以)
 
b.	用户名是root，host是localhost
 
c.	php代码如下：
 
参考：https://www.runoob.com/mysql/mysql-connection.html




<?php
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'mysql1';            // mysql用户名
$dbpass = '123';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser,$dbpass);
echo '数据库连接测试页：';
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
echo '数据库连接成功！';
mysqli_close($conn);
?>
