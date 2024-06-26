<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Thông tin sữa</title>
  <style>
    /* odd lẻ
    even chẵn */

    a {
      text-decoration: none;
      color: darkseagreen;
      padding: 0 10px;
    }

    a:hover {
      color: darkgreen;
    }
  </style>
</head>

<body>
  <?php
  include 'config.php';
  $rowsPerPage = 2; //số mẩu tin trên mỗi trang, giả sử là 10
  if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
  }
  //vị trí của mẩu tin đầu tiên trên mỗi trang
  $offset = ($_GET['page'] - 1) * $rowsPerPage;
  $sql = "SELECT Ten_sua, hang_sua.Ten_hang_sua, Hinh, TP_Dinh_Duong, Loi_ich, Trong_luong, Don_gia 
  FROM sua 
  JOIN hang_sua ON sua.Ma_hang_sua = hang_sua.Ma_hang_sua 
  LIMIT  $offset, $rowsPerPage";
  $result = mysqli_query($conn, $sql);

  echo "<p align='center'>
          <font color='green' face= 'Verdana, Geneva, sans-serif' size='5'>
            <b>THÔNG TIN CHI TIẾT CÁC LOẠI SỮA</b>
          </font>
        </p>";
  echo "<table align='center' width='800px' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
  if (mysqli_num_rows($result) <> 0) {
    $n = 0;
    while ($rows = mysqli_fetch_row($result)) {
      echo "<tr bgcolor='#99FFFF'>
                <th style = 'color: green' colspan='2'><h2>$rows[0] - $rows[1]</h2></th>
            </tr>
            <tr>
              <td style = 'width: 200px'>
                <img src='./Anhdata1/$rows[2] ' width= 200px height= 270px/>
              </td>
              <td>
                <div>
                  <b>Thành phần dinh dưỡng:</b>
                  <p>$rows[3]</p>
                  <b>Lợi ích:</b>
                  <p>$rows[4]</p>
                  <p><b>Trọng lượng:</b> <b style='color:green;'>$rows[5] gr</b> - <b>Đơn giá:</b> <b style='color:green;'>$rows[6] VNĐ</b></p>
                </div>
              </td>
            </tr>
        ";
      $n++;
      if ($n % 2 == 0)
        echo "<tr></tr>";
    } //while
  }
  echo "</table>";
  echo "<p align='center'>";
  $sql_products = "SELECT * FROM sua";
    $result_products = mysqli_query($conn, $sql_products);
    $numRows = mysqli_num_rows($result_products);
    $maxPage = floor($numRows / $rowsPerPage) + 1;
  //gắn thêm nút Back
  if ($_GET['page'] > 1) {
    echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . (1) . ">&#60&#60</a> ";
    echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . ">&#60</a> ";
  }
  for ($i = 1; $i <= $maxPage; $i++) //tạo link tương ứng tới các trang
  {
    if ($i == $_GET['page'])
      echo "<b style='padding:0 10px;'>" . $i . "</b> "; //trang hiện tại sẽ được bôi đậm
    else
      echo "<a href="
        . $_SERVER['PHP_SELF'] . "?page=" . $i . ">" . $i . "</a> ";
  }
  //gắn thêm nút Next
  if ($_GET['page'] < $maxPage) {
    echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">&#62</a>";
    echo "<a href = " . $_SERVER['PHP_SELF'] . "?page=" . ($maxPage) . ">&#62&#62</a>";
  }
  echo "</p>";
  echo "<p align='center'>Tổng số trang là: $maxPage </p>";
  ?>

</html>