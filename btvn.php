<!-- bài 6 buổi 4  -->
 <?php
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

foreach ($nam as $year) {
    echo $year . "<br>";
}
?>
<?php
// ==================== BÀI 2 ====================
// Nhập điểm và số buổi nghỉ; kiểm tra đủ điều kiện dự thi

$diem = 8;
$soBuoiNghi = 2;

if ($diem >= 5 && $soBuoiNghi <= 3) {
    echo "Đủ điều kiện dự thi<br>";
} else {
    echo "Không đủ điều kiện dự thi<br>";
}

echo "<hr>";


// ==================== BÀI 4 ====================
// Nhập số từ 1–7, dùng switch hiển thị thứ tương ứng

$thu = 4;

switch ($thu) {
    case 1:
        echo "Chủ nhật<br>";
        break;
    case 2:
        echo "Thứ hai<br>";
        break;
    case 3:
        echo "Thứ ba<br>";
        break;
    case 4:
        echo "Thứ tư<br>";
        break;
    case 5:
        echo "Thứ năm<br>";
        break;
    case 6:
        echo "Thứ sáu<br>";
        break;
    case 7:
        echo "Thứ bảy<br>";
        break;
    default:
        echo "Số không hợp lệ<br>";
}

echo "<hr>";


// ==================== BÀI 5 ====================
// In số từ 1–100, bỏ qua số chia hết cho 3
// và dừng khi gặp số lớn hơn 50

for ($i = 1; $i <= 100; $i++) {
    if ($i > 50) {
        break;
    }

    if ($i % 3 == 0) {
        continue;
    }

    echo $i . " ";
}

echo "<hr>";


// ==================== BÀI 7 ====================
// Hàm tính tổng tiền

function calculateTotal($price, $quantity, $discount = 0) {
    $total = $price * $quantity;
    $total = $total - ($total * $discount / 100);

    return $total;
}

echo "Tổng tiền: " . calculateTotal(100000, 3, 10) . " VNĐ<br>";

echo "<hr>";


// ==================== BÀI 8 ====================
// Mảng 10 số: tính tổng, trung bình, nhỏ nhất,
// lớn nhất và sắp xếp tăng dần

$numbers = array(12, 5, 8, 20, 3, 15, 7, 10, 2, 18);

echo "Mảng ban đầu: ";
print_r($numbers);
echo "<br>";

echo "Tổng: " . array_sum($numbers) . "<br>";
echo "Trung bình: " . (array_sum($numbers) / count($numbers)) . "<br>";
echo "Nhỏ nhất: " . min($numbers) . "<br>";
echo "Lớn nhất: " . max($numbers) . "<br>";

sort($numbers);

echo "Mảng tăng dần: ";
print_r($numbers);

echo "<hr>";


// ==================== BÀI 9 ====================
// Mảng tên -> điểm; lọc sinh viên đạt từ 8 điểm
// và sắp xếp giảm dần theo điểm

$students = array(
    "Nguyễn An" => 8.5,
    "Trần Bình" => 7.5,
    "Lê Chi" => 9,
    "Phạm Dũng" => 8,
    "Hoàng Anh" => 6.5
);

$passedStudents = array_filter($students, function ($score) {
    return $score >= 8;
});

arsort($passedStudents);

echo "Sinh viên đạt từ 8 điểm trở lên:<br>";

foreach ($passedStudents as $name => $score) {
    echo $name . ": " . $score . " điểm<br>";
}

echo "<hr>";


// ==================== BÀI 10 ====================
// Quản lý sản phẩm bằng mảng đa chiều;
// tính thành tiền và hiển thị bằng bảng HTML

$products = array(
    array(
        "name" => "Laptop",
        "price" => 15000000,
        "quantity" => 2
    ),
    array(
        "name" => "Chuột",
        "price" => 300000,
        "quantity" => 3
    ),
    array(
        "name" => "Bàn phím",
        "price" => 700000,
        "quantity" => 1
    )
);

function thanhTien($price, $quantity) {
    return $price * $quantity;
}

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>";
echo "<th>Tên sản phẩm</th>";
echo "<th>Đơn giá</th>";
echo "<th>Số lượng</th>";
echo "<th>Thành tiền</th>";
echo "</tr>";

foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product["name"] . "</td>";
    echo "<td>" . number_format($product["price"]) . " VNĐ</td>";
    echo "<td>" . $product["quantity"] . "</td>";
    echo "<td>" . number_format(
        thanhTien($product["price"], $product["quantity"])
    ) . " VNĐ</td>";
    echo "</tr>";
}

echo "</table>";
?>