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
// 1. Tạo mảng kết hợp chứa thông tin về sản phẩm
$products = [
    ["name" => "Bàn phím cơ", "price" => 1500000, "quantity" => 10],
    ["name" => "Chuột không dây", "price" => 500000, "quantity" => 20],
    ["name" => "Màn hình 24 inch", "price" => 3200000, "quantity" => 5]
];

// 2. Hiển thị thông tin của tất cả sản phẩm trong mảng
echo "<h3>Danh sách sản phẩm:</h3>";
echo "<ul>";
foreach ($products as $item) {
    echo "<li>Tên: " . $item['name'] . " | Giá: " . number_format($item['price']) . " VNĐ | Số lượng: " . $item['quantity'] . "</li>";
}
echo "</ul>";

// 3. Viết hàm để tính tổng giá trị của tất cả sản phẩm
function calculateTotalValue($productList) {
    $total = 0;
    foreach ($productList as $product) {
        $total += $product['price'] * $product['quantity'];
    }
    return $total;
}

// Gọi hàm và in kết quả
$totalValue = calculateTotalValue($products);
echo "<strong>Tổng giá trị của tất cả sản phẩm trong cửa hàng là: </strong>" . number_format($totalValue) . " VNĐ";
?>


