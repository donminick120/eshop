

<h3> <b>Add Category</b></h3><br/>
<?php echo form_open_multipart('main/addcategory'); ?>
<?php echo validation_errors(); ?>
    <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter title" name="name">
    </div>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>