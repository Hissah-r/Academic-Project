<!DOCTYPE html>
<html>
<head>
    <title>Food</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
    <body>
<?php include 'nav.php'; 
        $connection = mysql_connect("localhost","root","");
        $result = mysql_select_db("menu");
        $q = mysql_query("select name, pic, description, price from food");
        
        $Row = mysql_fetch_row($q);
        do {
            echo "<div class=main><table align=center><tr><th>{$Row[0]} </th>
                  <td><img src={$Row[1]}> </td>
                  <td align='right'>{$Row[2]}  </td>
                  <td align='right'>Price: {$Row[3]} </td></tr></table></div>"; 
                  $Row = mysql_fetch_row($q);
        } while ($Row);    
      

        ?>
        
        
    </body>
</html>