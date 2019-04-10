


<style >
  .form-int{
    width: 200px;


  }
  .gg{
    width: 800px;
    height: 500px;
  }
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 900px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}


</style>
<!DOCTYPE html>
<html>
<head>


  <title>Eshop</title>
  
  <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>assets/css/style.css">
  <script src="http://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
</head>
<body style="margin-top: 0px;">
  <nav  class="navbar navbar-expand-lg navbar-dark bg-primary">




  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
  <a class="nav-link"><h5>Eshop</h5></a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index">Home</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Logo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>-->
    </ul>
    <ul class="nav navbar-nav navbar-right">


          <li><a class="nav-link" href="<?php echo base_url(); ?>logout">Logout</a>
      
      
    </ul>
   
  </div>
</nav>
</body>
<div style="margin-top: 80px;width: 800px;height: 500px;" class="container">
</html>