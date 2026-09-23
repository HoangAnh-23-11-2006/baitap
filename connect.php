<?php $dbh = mysqli_connect('localhost', 'root', ''); 
    // Kết nối tới MySQL server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_error());
    // Nếu kết nối thất bại thì đưa ra thông báo lỗi
    
    if (!mysqli_select_db($dbh,'connect'))     
    die("Unable to select database: " . mysqli_error());
    // Thông báo lỗi nếu chọn CSDL thất bại
    
    $sql_stmt = "SELECT * FROM my_contacts"; 
    // Câu lệnh select
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL
     
    if (!$result)     
        die("Database access failed: " . mysqli_error()); 
        // Thông báo lỗi nếu thực thi thất bại
        
        $rows = mysqli_num_rows($result); 
        // Lấy số hàng trả về
    
    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {         
            echo 'ID: ' . $row['id'] . '<br>';         
            echo 'Full Names: ' . $row['full_names'] . '<br>';        
            echo 'Gender: ' . $row['gender'] . '<br>';         
            echo 'Contact No: ' . $row['contact_no'] . '<br>';         
            echo 'Email: ' . $row['email'] . '<br>';         
            echo 'City: ' . $row['city'] . '<br>';         
            echo 'Country: ' . $row['country'] . '<br><br>';     
        } 
    } 
mysqli_close($dbh); // Đóng kết nối CSDL
?>