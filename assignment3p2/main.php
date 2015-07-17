<html>
  <body bgcolor="#005C5C">
   <h1 align="center" > Movie Store Inventory </h1>

   <br>
<br>
<br>

  <div>
  <!--This section includes the information headers and styling attributes for the table that will show what entries are already in the table.-->
   <table border="3" bgcolor="#696969" style="width: 75%">
    <tr><!--This is the title of the table.-->
     <td><font size="5"><b>Previous Entries: </b></font></td>
    </tr>
    <tr>
     <td><font size="4"><b>Inventory 6/20/15</b></font></td>
     </tr>
    <tr><!--These are the column headers for the table.-->
     <td><font size="3"><b>Title</b></td>
     <td><b>Genre</b></td>
     <td><b>Count</b></td>
     <td><b>Price</b></td>
     <td><b>Edit</b></td>
     <td><b>Delete</b></td>

    </tr>
    <tr>
    <td>The Notebook</td>
    <td>Romance</td>
    <td>10</td>
    <td>10.99</td>
    <td style="text-align: center; vertical-align: middle;">
            <input type="checkbox" name="query_myTextEditBox">    
        </td>
    <td style="text-align: center; vertical-align: middle;">
            <input type="checkbox" name="query_myTextEditBox">    
        </td>

    </tr>
    <tr>
    <td>Jurassic Park</td>
    <td>Science Fiction</td>
    <td>7</td>
    <td>14.99</td>
    <td style="text-align: center; vertical-align: middle;">
            <input type="checkbox" name="query_myTextEditBox">    
        </td>
    <td style="text-align: center; vertical-align: middle;">
            <input type="checkbox" name="query_myTextEditBox">    
        </td>

    </tr>
    </table>
    </div>
   <br><br><br>


    <form action="/submit" method="post">
    List Name: <br><input type="text" name="name" value="<?php echo $name;?>">
    <br><br>
  
    List Date: <br>
      <input type="text" name="date" value="<?php echo $date;?>">
    <br><br>

    Movie Title: <br>
      <input type="text" name="title" value="<?php echo $title;?>">
      <br><br>

    Genre: <br>
       <input type="text" name="genre" value="<?php echo $genre;?>">
       <br><br>

    Count in Stock:<br>
       <input type="text" name="count" value="<?php echo $count;?>">
       <br><br>
  
      Price: <br>
      <input type="text" name="price" value="<?php echo $price;?>">
          <br> <br>
  
      <input type="submit" name="submit" value="Add New Entry">
  </form>

 <?php
    if(array_key_exists('name', $_POST)) {
      echo "You entered: <pre>\n";
      echo htmlspecialchars($_POST['name']);
      echo "\n</pre>";
    }
    ?>

    <?php
     if(array_key_exists('date', $_POST)) {
      echo "<pre>\n";
      echo htmlspecialchars($_POST['date']);
      echo "\n</pre>";
    }
    ?>

    <?php
    if(array_key_exists('title', $_POST)) {
      echo "<pre>\n";
      echo htmlspecialchars($_POST['title']);
      echo "\n</pre>";
    }
    ?>

  <?php
    if(array_key_exists('genre', $_POST)) {
      echo "<pre>\n";
      echo htmlspecialchars($_POST['genre']);
      echo "\n</pre>";
    }
    ?>

    <?php
    if(array_key_exists('count', $_POST)) {
      echo "<pre>\n";
      echo htmlspecialchars($_POST['count']);
      echo "\n</pre>";
    }
    ?>

    <?php
    if(array_key_exists('price', $_POST)) {
      echo "<pre>\n";
      echo htmlspecialchars($_POST['price']);
      echo "\n</pre>";
    }
    ?>
    <br><br>
   

  </body>
</html>
