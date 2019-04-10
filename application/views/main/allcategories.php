	


<table class="table table-striped table-bordered" style="width: 1100px;" align="right"  >

  <tr>
  <td>ID</td>
  <td>Category Name</td>
  <td>Date Created</td>
  </tr>

  <tr>
 <?php foreach ($category as $category): ?>
   
<td><?php echo $category['id']; ?></td>
<td><?php echo $category['name']; ?></td>
<td><?php echo $category['date_created']; ?></td>




</tr>
 <?php endforeach; ?> 
</table>