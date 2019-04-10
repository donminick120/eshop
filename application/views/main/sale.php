







<table class="table table-striped table-bordered" style="width: 1100px;" align="right"  >

  <tr>
  <td>ID</td>
  <td>Product</td>
  <td>Total Income</td>
  <td>Costumer</td>
  <td>Date</td>
  
  </tr>

  <tr>
 <?php foreach ($sale as  $row) : ?>
   
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['product']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php  echo $row['session']; ?></td>
<td><?php echo $row['date_sale']; ?></td>


</tr>
 <?php endforeach; ?> 
<td></td>
 <td></td>
 <td>Php : <?php echo $total['total']; ?></td>
 <td></td>
 <td></td> 
</table>