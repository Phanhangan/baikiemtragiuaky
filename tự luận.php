// Bài 1:
<?php
// Hàm kiểm tra số nguyên tố
function isPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "Các số nguyên tố từ 1 đến 100 là: <br>";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>

// Bài 2:
<?php
// 1. Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa name, price, và quantity
$products = [
    ["name" => "Sản phẩm A", "price" => 150000, "quantity" => 10],
    ["name" => "Sản phẩm B", "price" => 200000, "quantity" => 5],
    ["name" => "Sản phẩm C", "price" => 50000, "quantity" => 20]
];

// 2. Hiển thị thông tin của tất cả sản phẩm trong mảng 
echo "<table border='1'>";
echo "<tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>";

foreach ($products as $item) {
    echo "<tr>";
    echo "<td>" . $item['name'] . "</td>";
    echo "<td>" . $item['price'] . "</td>";
    echo "<td>" . $item['quantity'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";

// 3. Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity)
function tinhTongGiaTri($mangSanPham) {
    $tong = 0;
    foreach ($mangSanPham as $sp) {
        $tong += $sp['price'] * $sp['quantity'];
    }
    return $tong;
}

// Gọi hàm và hiển thị kết quả
echo "Tổng giá trị của tất cả sản phẩm: " . tinhTongGiaTri($products);
?>