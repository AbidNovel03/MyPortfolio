<?php
         $f_lname=$_POST['first_lastname'];
         $email=$_POST['email'];
         $message=$_POST['message'];

      $filename='CustomerinfoData.csv';
      $new_file=fopen($filename,'w');
      $nvl=array(
         0 => $f_lname,
         1 => $email,
         2 => $message
      );

      fputcsv($new_file,$nvl);
      echo"Thank You For Your Kind Information"











?>