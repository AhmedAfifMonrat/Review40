 <?php
  if(isset($_POST['submit_review']))
  {
  $title=$_POST['title_review_hotel'];
  $review=$_POST['hotel_review'];
  $date=$_POST['date'];
  $trip=$_POST['button'];
  echo $date;
  echo "<br />";
  echo $title;
  echo "<br />";
  echo $review;
  echo "<br />";
  echo $trip;
  }
  ?>
