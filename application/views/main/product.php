


<?php echo form_open_multipart('main/addcart'); ?>
<?php echo validation_errors(); ?>
<div style="display: none;">
<input type="text" name=username value="<?php echo $this->session->userdata('cos_name') ; ?>">			
<input type="text" name="title" value="<?php echo $product['title'];?>">		
<input type="text" name="photo" value="<?php echo $product['upload-photo'];?>">	
<input type="text" name="description" value="<?php echo $product['description']; ?>">	
<input type="text" name="price" value="<?php echo $product['price'];?>">	
	

</div>


 



<div class="card">
  <div class="card-header">
    Product
  </div>
  <div class="card-body">
    <h3 class="card-title" style="margin-right:  680px; width: 160px;"><b><?php echo $product['title']; ?></b></h3>


    <h5 class="card-title" style="margin-right:  620px;">Php :<?php echo $product['price']; ?></h5>

    <p style="width: 300px;margin-left: 200px;"><img  src="<?php echo base_url(); ?>assets/image/upload/<?php echo $product['upload-photo']; ?>"></p>


<p style="margin-right: 650px;">Quantity</p>
 	<input style="width: 100px;" class="form-control" type="number" name="quantity" min="1"  required >
    	


    <p class="card-text"><?php echo word_limiter($product['description'],40); ?></p>
    <button onclick="myFunction()" style="width: 400px;"   name="submit" type="submit">Add to Cart</button>
    </form>
    <a style="width: 400px;" class="btn btn-danger" href="<?php echo base_url(); ?>index">Cancel</a>
  
  </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

function myFunction() {
 alert('successfully added to cart');

}
</script>