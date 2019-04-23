<?php
 session_start();
require("mysqli_connect.php");
$search = $_POST['search'];
$query2 = "SELECT COUNT(*) as total FROM posts WHERE NamePost LIKE '%$search%'";
$result2 = $conn->query($query2);
$row2 = $result2->fetch_array();
$query = "SELECT *, DATE_FORMAT(DatePost,'%d/%m/%Y') AS regdate FROM `posts` WHERE NamePost like '%$search%' AND ActivePost=1 limit 3 ";
$result = $conn->query($query);
if($search!=null)
{
        echo '<div class="text-center"><h3> Found '.$row2['total'].' Result For : '.$search.'</h3></div>';
        if ($result->num_rows>0) {
        echo'<div class="row" style="margin:30px;">';
        
    while ($row = $result->fetch_array()) {    
        $id = $row['PostID'];
        
        echo'<div class="col-lg-4 col-md-12 col-xs-12">';
                 
                 echo '<a href="post.php?id=' . $id . '"><img class="img-fluid img-search" src='.$row['Img'].'></a>';
                 echo '<div class="text-center" style="margin-top:20px;">';
                 echo '<a href="post.php?id=' . $id . '" class="text-center" style="color:#b72126;font-weight: bold;">'.$row['NamePost'].'</a>';
                 echo '</div>';
                 echo '<p class="text-center" style="color:#777">'.$row['regdate'].'</p>';
                 $_SESSION["search"] =$search;
                 
        echo'</div>';
        
       
    }
    
     echo'</div>';
     echo '<div  class="text-center text-centerr" style="margin-bottom:50px;"><a id="ok" href="postsearch.php" style="font-weight: bold;border: 2px solid black; padding: 8px; margin-top:90px;">SEE ALL RESULT FOR: '.$search.' </a></div.';
        }
        else {
    echo' <p class="text-center font-weight-bold" style:"color:gray;font-weight: bold;"> NO RESULTS FOUND FOR: '.$search.' </p>' ;
      echo '<div  class="text-center text-centerr" style="margin-bottom:50px; display:none"><a id="not" href="searchnull.php" style="font-weight: bold;border: 2px solid black; padding: 8px; margin-top:90px;">SEE ALL RESULT FOR: '.$search.' </a></div.';
 


}
}
else{
        echo"";
}

?>





