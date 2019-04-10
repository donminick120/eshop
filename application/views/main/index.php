  <div class="row">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
                            <div class="" style="width: 80%; margin: 0 auto; margin-bottom: 40px;margin-top: 20px;">
                                <form action="#" method="post">
                                    <input type="text" id="search_data" class="form-control search-input" name="search-term" placeholder="What are you looking for?" onkeyup="liveSearch()" autocomplete="off">
                                    <div id="suggestions">
                                        <div id="autoSuggestionsList">
                                        </div>
                                    </div>
                                   
                                </form>

                            </div>

                        </div>




                    </div>

                </div>
            </div>

<div class="sidenav sidenav-expand-lg sidenav-dark bg-primary">

	<a href="<?php echo base_url(); ?>index">All</a>
  <?php foreach ($category as $category): ?>

   <a onclick="myFunction()" href="<?php echo base_url('/view_category/'.$category['name']); ?>"><?php echo $category['name']; ?></a>
 

  <?php endforeach;?>
</div>


<h3>Products</h3>

<?php foreach ($products as $products):
	# code...
?>



<div class="gallery" style="width: 180px;height: 400px;">
	<p><?php echo $products['title']; ?></p>
  <a href="<?php echo base_url('/products/'.$products['id']); ?>">

    <img style="height: 170px;" src="<?php echo base_url(); ?>assets/image/upload/<?php echo $products['upload-photo'];?>" alt="<?php echo $products['title']; ?>" >
  </a>
  <div class="desc"><?php echo word_limiter($products['description'],5); ?></div>

  <p>Price: <?php echo $products['price']; ?></p><br/>



<?php echo form_open('/products/'.$products['id']); ?>
  <button  align="bottom" class="btn btn-success">Add to Cart</button>

</form>


</div>


<?php endforeach;?>


 <script>

            function liveSearch() {

                var input_data = $('#search_data').val();
                if (input_data.length === 0) {
                    $('#suggestions').hide();
                } else {


                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>index.php/main/search",
                        data: {search_data: input_data},
                        success: function (data) {
                            // return success
                            if (data.length > 0) {
                                $('#suggestions').show();
                                $('#autoSuggestionsList').addClass('auto_list');
                                $('#autoSuggestionsList').html(data);
                            }
                        }
                    });
                }
            }

        </script>