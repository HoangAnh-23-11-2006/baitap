<?php
$db_type = "mysql";
$db_host = "Localhost";
$db_name = "connect";
$user_name = "root";
$user_password = "";

$connection = new PDO("$db_type:host=$db_host; dbname=$db_name", $user_name, $user_password) ;

//Tạo Prepared Statement
$stmt = $connection->prepare('SELECT * from my_contacts WHERE id = :id');

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO :: FETCH_ASSOC);

//Gán giá trị và thực thi
$stmt->execute(array('id' => 1));

//Hiển thị kết quả, vòng lặp sau đây sẽ dừng lại khi đã duyệt qua toàn bộ kết quả
while($row = $stmt->fetch()) {
echo $row['full_names'], '<br>';
echo $row['email'], '<br>';
echo $row['gender'], '<br>';
}