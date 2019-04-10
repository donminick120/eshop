
<div class="container">

<?php echo form_open_multipart('main/update'); ?>

  <div class="form-group">
    <input style="display: none;" type="text" name="id" value="<?php echo $product['id']; ?>">

    <label >Title</label>

    <?php echo validation_errors(); ?>
    <input type="text" class="form-control" name="title" value="<?php echo $product['title']; ?>">
  </div>
  <div class="form-group">
  
</div>
      <div class="form-group">
    <label >Category</label>
    <select class="form-control" name="category">
      <option><?php echo $product['category']; ?></option>
  <?php foreach ($category as  $category): ?>
      <option><?php echo $category['name']; ?></option>
     <?php endforeach; ?> 
    </select>
     
    </div>
  <div class="form-group">
    <label >Body</label>
    <textarea id="editor1" class="form-control" name="description"><?php echo $product['description']; ?></textarea>
  </div>
    <div class="form-group">
    <label >Quantity</label>
   <input class="form-control" type="int" name="quantity" value="<?php echo$product['quantity']; ?>">
  </div>
  <div class="form-group">
    <label >Price</label>
   <input class="form-control" type="int" name="price" value="<?php echo$product['price']; ?>">
  </div>



  <div class="form-group">

    <img src="<?php echo base_url();?>assets/image/upload/<?php echo $product ['upload-photo']; ?>"><br/>
    <label>Upload Photo</label>
    <input type="file" name="userfile" class="form-control">
    


  </div>

  <button  type="submit" class="btn btn-success">Submit</button>
</form>
</div>

<script>
  
  CKEDITOR.replace('editor1');


</script>