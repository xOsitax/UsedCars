
<?php
include "header.php";
?>
 
<html>
<head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<script type= "text/javascript" >
            function test()
            {
                $.ajax({url:"echo.php",success:function(result)
                    {
                        
                       $("h3").text(result);
                    }
                })

            }
        </script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
 
html {
  box-sizing: border-box;
}
 
*, *:before, *:after {
  box-sizing: inherit;
}
 
.column {
  float: left;
  width: 59.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
 
.card {
  box-shadow: 0 8px 50px 0 rgba(0, 0, 0, 0.2);

  margin: 12px;
}
 
.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
 
.container {
  padding: 0 16px;
}
 
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
 
.title {
  color: grey;
}
 
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 20%;
}
 
.button:hover {
  background-color: #555;
}
 
@media screen and (max-width: 650px) {
  .column {
    width: 20%;
    display: block;
  }
}
</style>
</head>
<body>
<button onclick='test()'>Contact Us Details</button> 
        <h3>
            <nr></nr>
        </h3>
<div class="about-section">
  <h1>About Us Page</h1>
  <br>
  <p>Gloucester Toyota serving Gloucester, VA, also near Williamsburg, VA and near Newport News, VA, is proud to be an automotive leader in our area. Since opening our doors, Gloucester Toyota has kept a firm commitment to our customers. We offer a wide selection variety of vehicles, and hope to make the car buying process as quick and hassle free as possible.

If you would like financing options and you are in the market to purchase a new Toyota, or used car or truck, we will provide assistance to help you find financing options that fits your needs! Whether or not you are a first time car buyer, Gloucester Toyota Scion will help get you into the car or truck you choose with professionalism and attention to your needs.

Gloucester Toyota has an experienced and reliable Service and Parts Department, open extra hours to help fit our customers’ hectic schedules; and, as always, Gloucester Toyota offers competitive pricing for your automotive maintenance needs. Customer satisfaction is our highest priority, and our staff is committed to achieving this goal in every aspect of our business. Please feel free to reach us at (804) 693-2100 if you have any questions or comments.</p>
  <p>We sell used cars.</p>
  <p>
</div>
 
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
    
      <div class="container">
        <h2>Yessenia Carlos</h2>
        <p class="title">Developer</p>
        <p>We are here to help you find the car of your dreams !</p>
        <p>jane@example.com</p>
        <td class=”button”>
                      <a  class='button' href="mailto:carlosy@kean.edu" target="_blank">
                          Contact Us            
                      </a>
      </div>
    </div>
  </div>
 
 
 
  <div class="column">
    <div class="card">
     
      <div class="container">
        <h2>Anthony Lopez</h2>
        <p class="title">Developer</p>
        <p>Hit me up!</p>
        <p>john@example.com</p>
       

        <td class=”button”>
                      <a  class='button' href="mailto:lopezant@kean.edu" target="_blank">
                          Contact Us            
                      </a>
      </div>
    </div>
  </div>
</div>

</body>

</html>
<?php

include "footer.php";
 ?>
