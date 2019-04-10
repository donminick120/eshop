




 <div class="col-25">
 	<p align="center">ESHOP</p>
    <div class="container" style="width: 680px;height: 450px;">
      <p>Date/Time :<?php echo $receipt['date_sale']; ?></p>
   
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> </span></h4>
        <?php echo form_open('/main/delete_cart'); ?>


      <p><a href=""></a><?php echo $receipt['product'];?><br/></p>
  






      <hr>

      <p>Total <span class="price" style="color:black"><b>Php:  <?php echo $receipt['price']; ?></b></span></p>



    <input onclick="myFunction()" class="btn btn-dange" type="submit" name="delete" value="Continue" style="margin-top: 200px;">
    </form>


    </div>

  </div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

function myFunction() {
alert('success')

}

</script>
