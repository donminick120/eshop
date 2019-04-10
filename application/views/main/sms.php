
<div class="card">
  <div class="card-header">
   SMS

  <div class="card-body">
  	</div>
  	<?php echo form_open_multipart('main/itextmoaction'); ?>
    <input style="display: none;" type="text" name="number" value="<?php echo $sms['number']; ?>">
  	<input style="display: none;" type="text" name="id" value="<?php echo$sms['id']; ?>">
  	<textarea class="form-control" name="message"><?php echo $sms['session']; ?> your order was approved with a total of Php:<?php echo $sms['price']; ?> thank you / MOP:Cash on Delivery
  	Eshop</textarea>
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>