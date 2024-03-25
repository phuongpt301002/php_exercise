<?php
    //1. Kết nối CSDL kiểu thủ tục
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_tb1";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //Check connection
    if(!$conn){
        die("Connection failed: " .mysqli_connect_error());
    } else echo "->>>Thành công";

    //2. Kết nối CSDL kiểu hướng đối tượng
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_tb1";
    $conn = new mysqli($servername, $username, $password, $dbname);
    //for vietnamese
    mysqli_set_charset($conn, 'utf8');
    //
    if($conn -> connect_error){
        die("Connection failed: " .$conn -> connect_error);
    } echo "->> thành công";

    
    ////Chuẩn bị câu truy vấn
    $query = 'SELECT * FROM nhanvien';
    $result = $conn -> query($query);
    //$result  = mysqli_query($conn, $query);
    if(! $result) die ('<br> <b> Query failed</b>');
    else echo "<br> Câu truy vấn đúng"; 

    if(!$result) die ('<br> <b>Query failed</b>');
    else echo "<br> Câu truy vấn đúng <br>";

    if(mysqli_num_rows($result) != 0){
        while($row = mysqli_fetch_row($result)){
            var_dump($row);
        }
    }

    //hiển thị mẫu tin bảng NHÂN VIÊN
    $result  = mysqli_query($conn, $query);
    echo "<p align = 'center'> <font size = '5'> THÔNG TIN NHÂN VIÊN</font></p>";
    echo "<table align = 'center' wight = '700' border = '1' cellpadding = '2'   style='border-collapse : collapse'> ";
    echo '<tr>
                <th width = "100"> Mã nhân viên</th>
                <th width = "200"> Tên nhân viên</th>
                <th width = "50"> Mã phòng ban</th>
                <th width = "100"> Ngày sinh</th>
                <th width = "50"> Giới tính</th>
                <th width = "100"> Lương</th>';

    if(mysqli_num_rows($result) <> 0){
         while  ($rows = mysqli_fetch_row($result)){
            echo "<tr>";
            echo "<td> $rows[0]</td>";
            echo "<td> $rows[1]</td>";
            echo "<td> $rows[2]</td>";
            echo "<td> $rows[3]</td>";
            echo "<td> $rows[4]</td>";
            echo "<td> $rows[5]</td>";
            echo "</tr>";
        }
    }

    $rowsPerPage = 3;
    if(!isset($_GET['page'])){
        $_GET['page'] = 1;
    }
    $offset = ($_GET['page'] - 1) * $rowsPerPage;
    $query = "Select * from nhanvien LIMIT $offset, $rowsPerPage";
    $result = mysqli_query($conn,$query);
    $numRows = mysqli_num_rows($result);
    $maxPage = ceil($numRows / $rowsPerPage);

    echo "<a href = ". $_SERVER['PHP_SELF']. "?page=" 
                    .($_GET['page']-1).">Back </a> ";

    
    for($i =1; $i<=$maxPage; $i++){
        if($i == $_GET['page'])
            echo '<b>Trang '. $i. '</b> ';
        else 
            echo "<a href =".$_SERVER['PHP_SELF']. "?page=".$i.">Trang".$i."</a> ";
    }

    

?>

