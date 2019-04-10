


  <h1><B><?=$title ?></B></h1>

<?php echo form_open_multipart('main/createpost'); ?>
<?php echo validation_errors(); ?>
    <div class="form-group">
    <label >Product</label>
    <input type="text" class="form-control"  placeholder="Enter title" name="title">
    </div>
    <div class="form-group" >
    
        
     
    <label >Category</label>
    <select class="form-control" name="category">
  <?php foreach ($category as  $category): ?>
      <option><?php echo $category['name']; ?></option>
     <?php endforeach; ?> 
    </select>
     
    </div>
    <div class="form-group">
    <label >Description</label>
      
    <textarea id="editor1" name="description"></textarea>
    </div>
    <div class="form-int" >
    <label >Quatity</label>
    <input type="number" class="form-control" placeholder="0" name="quantity">
    </div><br/>
    <div class="form-int">
      <label>Price</label>
    <input type="number" class="form-control" placeholder="0" name="price">
    </div><br/>
     <div class="form-group">
      <label>Upload Photo</label>
    <input type="file" class="form-control" placeholder="0" name="userfile">
    </div><br/>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>