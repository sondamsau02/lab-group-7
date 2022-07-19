
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<style type="text/css">
  		body{
  			background-image: url(3.jpg);
  			background-size: cover;
  		}
  		table{
  			margin-left: 350px;
            margin-top: 150px


  		}
  		table td{
  			color: #00000;
  			background-color: #FFFF99;
  		}
  		h3{
  			color: #000000;

  			margin-left: 400px;
  		}

  	</style>
  </head>
    <body onload="window.print();"> 
  	<?php
$conn = mysqli_connect("localhost","root","","web_mvcphu");
mysqli_set_charset($conn,"utf8");
mysqli_query($conn,"SET NAMES 'utf8'");
//tạo chuỗi sql
$sql = "select * from tbl_compare";
//Thực hiện query truy vấn
$kq=mysqli_query($conn,$sql);

//In tiêu đề bảng
echo "<table border='1'>";
echo " <tr style='text-align:center;font-size:20px;'><td style='background-color:#00FFFF;' colspan ='9';text-align:center >Phiếu hóa đơn thanh toán</td></tr>";
echo "<tr><td>STT</td><td>Mã khách hàng</td><td>Mã sản phẩm</td><td>Tên sản phẩm</td><td>Giá</td><td>Hình ảnh</td></tr>";
while($row = mysqli_fetch_row($kq)){
	echo "<tr>";	
	echo "<td style ='padding:5px'>".$row[0]."</td>";
	echo "<td style ='padding:5px'>".$row[1]."</td>";
	echo "<td style ='padding:5px'>"."<a  href='hienthichitiet.php?id=$row[0]'>".$row[2]."</a></td>";
	echo "<td style ='padding:5px'>".$row[3]."</td>";
	echo "<td style ='padding:5px'>".$row[4]."</td>";
  echo "<td style ='padding:5px'>"."<img src='images/".$row[5]."' height = 100 width = 100>"."</td>";

}
echo "</table>";

echo "<hr>";
echo "\t\t\t Người in phiếu\t\t\t\t\t\t Người mua hàng";




mysqli_close($conn);
  ?>


  </body>
  </html>
