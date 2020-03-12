<?php
header("Content-Security-Policy: img-src 'self' https://parcsaintecroix.com")
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>CSP</title>
   </head>
   <body>
     <h1>CSP</h1>
     <img src="loup.jpg">
     <br>
     <img src="https://parcsaintecroix.com/wp-content/uploads/2017/10/loup-europe-ete-web-785x460.jpg">
   </body>
 </html>
