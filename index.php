<?php 
  //include pages
  include("./topNav.php");
  include("./functions/getProducts.php"); 
  include("./functions/helpers.php"); 
  // class declaration (dit is hoe je een class met nieuwe functies aan kan roepen)
  $getProducts = new getProducts;
  $helpers = new helpers;

  function test(){
    echo 'hello';
  }
?>
<main>
  <div class="content-container">
    <div class="productWrapper">
      <?php
      $listOfAllProducts = $getProducts->listProducts();
        for($i = 0; $i < count($listOfAllProducts); $i++) {
          echo "<div class='productCard'>";
            echo "<div class='productImage'><a href='product.php?id=".$listOfAllProducts[$i]['StockItemID']."'><img src='https://via.placeholder.com/200'></a></img></div>";
            echo "<div class='productName'>".$listOfAllProducts[$i]['StockItemName']."</div>";
            // echo "<div class='productCustomFields'>".$listOfAllProducts[$i]['CustomFields']."</div>";
            echo "<div class='productPrice'>€".$listOfAllProducts[$i]['UnitPrice']."</div>";
          echo "</div>";
        }

        $helpers->filter($listOfAllProducts, $searchVariable);
      ?>
      </div>
</div>