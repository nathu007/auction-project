
<?php


if(!isset($_COOKIE[$cookie_name])) {
    echo "<h1>sorry cookies are not set</h1>";
} else { 
    $comment = "oh yeah";
     echo $comment;
   echo"
    <script type=\"text/javascript\">
      document.write('nathu');
   </script>
   ";
}
?>