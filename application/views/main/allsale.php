







<table class="table table-striped table-bordered" style="width: 1100px;" align="right"  >

  <tr>
  <td>ID</td>
  <td>Product</td>
  <td>Total Income</td>
  <td>Costumer</td>
  <td>Date</td>
  <td>Action</td>
  </tr>

  <tr>
 <?php foreach ($sale as  $row) : ?>
   
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['product']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php  echo $row['session']; ?></td>
<td><?php echo $row['date_sale']; ?></td>
 <td style="display: none;"><?php echo form_open('/main/getsms/'.$row['id']); ?></td>

<td><input type="submit" name="submit" class="btn btn-success" value="Approved"></form>

 <input type="submit" name="submit" class="btn btn-danger" value="Declined"></td>


</tr>
 <?php endforeach; ?> 
 </table>