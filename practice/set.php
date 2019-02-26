 <?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "<h1>sorry cookies are not set</h1>";
} else { 
    $comment = "oh yeah";
   
   echo"
    <script type=\"text/javascript\">
      document.write('nathu');
   </script>
   ";
}
?>
   
    <h1 style="color: red;"><?php echo $comment; ?></h1>
</body>
</html> 