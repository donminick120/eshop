
<div class="sidenav sidenav-expand-lg sidenav-dark bg-primary">
  <a href="<?php echo base_url(); ?>index">All</a>  
  <?php foreach ($category as $category): ?>

   <a href="<?php echo base_url('/view_category/'.$category['name']); ?>"><?php echo $category['name']; ?></a>
 

  <?php endforeach;?>
</div>


<h3>Products</h3>

<?php foreach ($cat as $products):
	# code...
?>



<div class="gallery" style="width: 180px;height: 400px;">
	<p><?php echo $products['title']; ?></p>
  <a href="<?php echo base_url('/products/'.$products['id']); ?>">

    <img style="height: 170px;" src="<?php echo base_url(); ?>assets/image/upload/<?php echo $products['upload-photo'];?>" alt="<?php echo $products['title']; ?>" >
  </a>
  <div class="desc"><?php echo word_limiter($products['description'],5); ?></div>

  <p>Price: <?php echo $products['price']; ?></p><br/>



<?php echo form_open('/products/'.$products['id']); ?>
  <button  align="bottom" class="btn btn-success">Add to Cart</button>

</form>


</div>


<?php endforeach;?>