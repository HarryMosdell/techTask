<?php 

  // This line here import the product-data.csv file , once the file is imported, the file can be opened, read from and written to

 $Filename = 'product-data.csv'; // saving the product-data.csv into a variable so it can later be refrenced

 $resource=fopen($Filename,'r+');  // This line here will open the product-data-csv file this will allow for data minipulation the r+ command allows for the file to be to read and written to

//  i will use the feof function, this function is designed to see if the end of the file has been reached

while(!feof($resource)) {  //  the following statment essentially says if the end of the file hasnt been reached do the following
  

  $productList[]= fgets($resource). "<br>" ;  //the fgets function gets each line of a file, saving each line of the file into an array index
         
  }
  fclose($resource); //closing the file


  foreach($productList as $product) {  //foreaching the product list array, this array has all the products from the csv file
     
    $productData= (explode(",",$product)); //turning each element such as the product id into an array element so it can get refrenced
    
    print_r ( '<p>'. $productData[0] . " ". $productData[1]. " ". $productData[2] . " ". $productData[3]." " . $productData[4] . " ". $productData[5]. " ". $productData[6].'</p>' ) ; //print_r had to be used instead of echo but echo can only print strings
     
}


?>

<?xml version="1.0" encoding="UTF-8"?> 

<catalog xmlns="http://www.demandware.com/xml/impex/catalog/2006-10-31"
catalog-id="TestCatalog">
<product product-id= <?php print_r ($productData[2]); ?> >
<display-name xml:lang="x-default"> <?php print_r ($productData[2]); ?></display-name>
<brand>   <?php print_r ($productData[1]); ?> </brand>
<variations>
<variants> <!-- i didnt know how to add different variants of the product dynamincally! !-->
<variant product-id="897654321"/>
<variant product-id="897654322" default="true"/>
<variant product-id="897654323"/>
</variants>
</variations>
</product>
<product product-id= <?php print_r ($productData[3]); ?>>
<custom-attributes>
<custom-attribute attribute-id="colour">  <?php print_r ($productData[4]); ?></custom-attribute>
<custom-attribute attribute-id="size">  <?php print_r ($productData[5]); ?> </custom-attribute>
</custom-attributes>
</product>
<product product-id="897654322">
<custom-attributes>
<custom-attribute attribute-id="colour">  <?php print_r ($productData[4]); ?></custom-attribute>
<custom-attribute attribute-id="size">  <?php print_r ($productData[5]); ?> </custom-attribute>
</custom-attributes>
</product>
<product product-id="897654323">
<custom-attributes>
<custom-attribute attribute-id="colour">  <?php print_r ($productData[4]); ?></custom-attribute>
<custom-attribute attribute-id="size">  <?php print_r ($productData[5]); ?> </custom-attribute>
</custom-attributes>
</product>
<product <?php print_r ($productData[3]); ?> >
<display-name xml:lang="x-default"> </display-name>
<brand>  <?php print_r ($productData[1]); ?> </brand>
<variations>
<variants>
<variant product-id="897654324" default="true"/>
<variant product-id="897654325"/>
<variant product-id="897654326"/>
</variants>
</variations>
</product>
<product product-id="897654324">
<custom-attributes>
<custom-attribute attribute-id="colour"></custom-attribute>
<custom-attribute attribute-id="size"></custom-attribute>
</custom-attributes>
</product>
<product product-id="897654325">
<custom-attributes>
<custom-attribute attribute-id="colour"></custom-attribute>
<custom-attribute attribute-id="size"></custom-attribute>
</custom-attributes>
</product>
<product product-id="897654326">
<custom-attributes>
<custom-attribute attribute-id="colour"></custom-attribute>
<custom-attribute attribute-id="size"></custom-attribute>
</custom-attributes>
</product>
</catalog>