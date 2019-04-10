


 <a href="<?php echo base_url();?>pay"><input style="margin-left: 660px;" type="submit" class="btn btn-Primary" name="pay" value="Pay Now"></a>



   <table class="table table-striped table-bordered" style="width: 1100px;" align="right"  >

  <tr>

  <td></td>
  <td>Product Name</td>
  <td>Description</td>

  <td>Price</td> 
  <td>Quantity</td>
 
  <td style="width: 220px;">Action</td>
  </tr>
  
  

<?php foreach ($product as  $product): ?>      
<tr>

  <?php echo form_open_multipart('main/updatequantity'); ?>
     
   
<td><img style="width: 200px;" src="<?php echo base_url(); ?>assets/image/upload/<?php echo $product['upload_photo']; ?>"></td>
<td><input style="display: none;" type="text" name="id" value="<?php echo $product['id']; ?>"><?php echo $product['product']; ?></td>
<td><?php echo word_limiter($product['description'],20); ?></td>

<td><?php echo $product['price']  ; ?></td>
<td><input class="form-control" type="number" name="quantity" min="1" value="<?php echo $product['quantity']; ?>"></td>

<td>



<input type="submit" name="Update" class="btn btn-Primary" value="Update">
</form>
<?php echo form_open('/main/removecart/'.$product['id']); ?>
  
   <input  onclick="remove()" type="submit" class="btn btn-Danger" name="remove" value="Remove">
  
</form>
</td>

 <?php endforeach; ?> 


</tr>
  
</table>

<a href="<?php echo base_url(); ?>index"> <input style="margin-left: 660px;"  type="submit" class="btn btn-Primary" name="add" value="Add Product">


<script>
function remove() {
  var txt;
  if (confirm("do you want to remove the item?")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("index").innerHTML = txt;
}
</script>