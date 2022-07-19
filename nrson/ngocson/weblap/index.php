<?php 
	include 'inc/header.php';
	include 'inc/slider.php';
	
 ?>	

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Sản phẩm nối bật</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php 
	      	$product_featheread = $product->getproduct_featheread();
	      	if($product_featheread){
	      		while ($result = $product_featheread->fetch_assoc()) {
	      			      	
	      	 ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId'] ?>"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 50) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				<?php 
				}
				}
				 ?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Sản phẩm mới</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			<?php 
	      	$product_new = $product->getproduct_new();
	      	if($product_new){
	      		while ($result_new = $product_new->fetch_assoc()) {
	      			      	
	      	 ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>
					 <h2><?php echo $result_new['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result_new['product_desc'], 50) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result_new['price'])." VNĐ" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result_new['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
			<?php 
				}
				}
			?>
			</div>
    </div>
 </div>
 <script type="text/javascript" src="https://web.cmbliss.com/webtools/hotline/js/hotline.js"></script><script type="text/javascript">$("body").hotline({phone:"0384146024",p_bottom:true,bottom:0,p_left:true,left:0,bg_color:"#e60808",abg_color:"rgba(230, 8, 8, 0.7)",show_bar:true,position:"fixed",});</script>
 <body>
	 
<?php 
	include 'inc/footer.php';
 ?>
