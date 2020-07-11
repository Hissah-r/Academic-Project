<!DOCTYPE html>
<html>
<head>
    <title>Drinks</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
    <body>
<?php include 'nav.php'; 
        $connection = mysql_connect("localhost","root","");
        $result = mysql_select_db("drinks");
        $q = mysql_query("select name, pic, price from drinks");
        
        $Row = mysql_fetch_row($q);
        do {
            echo "<div class=main><table align=center><tr><th>{$Row[0]} </th>
                  <td><img src={$Row[1]}> </td>
                  <td align='right'>Price: {$Row[2]} </td></tr></table></div>"; 
                  $Row = mysql_fetch_row($q);
        } while ($Row);    
      

        ?>
        
        
    </body>
</html>