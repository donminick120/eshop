

   <table class="table table-striped table-bordered" style="width: 1100px;" align="right"  >

  <tr>
  <td></td>
  <td>Product Name</td>
  <td>Description</td>
  <td>Quantity</td> 
  <td>Price</td> 
  <td>Date Posted</td>
  <td style="width: 170px;">Action</td>
  </tr>
  
  

      
<tr>
 <?php foreach ($products as $product): ?>
   
<td><img src="<?php echo base_url(); ?>assets/image/upload/<?php echo $product['upload-photo']; ?>"></td>
<td><?php echo $product['title']; ?></td>
<td><?php echo word_limiter($product['description'],10); ?></td>
<td><?php echo $product['quantity']; ?></td>
<td><?php echo $product['price']; ?></td>
<td><?php echo $product['date_posted']; ?></td>
<td>
 <?php echo form_open('/main/delete/'.$product['id']); ?>
<a href="<?php echo base_url();?>edit/<?php echo $product['id']; ?>">

  <input style="width: 50px;" class="btn btn-success" name="submit" value="Edit">

</a>


  <input type="submit" class="btn btn-danger" name="delete" value="Delete">
</form>

</td>


</tr>
 <?php endforeach; ?> 
</table>


