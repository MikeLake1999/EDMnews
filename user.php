<?php
session_start();
    class user  
    {
        private $conn;
        function __construct()
   {
      DEFINE ('DB_USER','2909424_studentdemo');
      DEFINE ('DB_PASSWORD','Hieu2951999');
      DEFINE ('DB_HOST','fdb23.runhosting.com');
      DEFINE ('DB_NAME','2909424_studentdemo');
      DEFINE ('DB_PORT','3306');

// connect to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
    // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      } else {
         $this->conn = $conn;
      }

   }


        public function GetPostById($id)
        {
             $id = $_GET['id'];
            $string = "SELECT *, DATE_FORMAT(DatePost,'%d/%m/%Y') AS regdate FROM `posts` INNER JOIN catalog WHERE posts.CatalogName=catalog.CatalogName AND PostID = $id ";
            $result = $this->conn->query($string);
            return $result;
        }
       public function ViewPost($string,$number)
       {
           $post = "SELECT *, DATE_FORMAT(DatePost,'%d/%m/%Y') AS regdate FROM `posts` INNER JOIN catalog WHERE posts.CatalogName=catalog.CatalogName AND posts.CatalogName='$string' AND ActivePost = 1 ORDER BY PostID DESC limit $number ";
           $result = $this->conn->query($post);
           return $result;
       }
              public function NewPost($number)
       {
           $post = "SELECT *, DATE_FORMAT(DatePost,'%d/%m/%Y') AS regdate FROM `posts` INNER JOIN catalog WHERE posts.CatalogName=catalog.CatalogName AND ActivePost = 1 ORDER BY PostID DESC  limit $number ";
           $result = $this->conn->query($post);
           return $result;
       }
       public function GetAllPost($string)
       {
           $query="SELECT * FROM `posts` INNER JOIN catalog WHERE posts.CatalogName=catalog.CatalogName AND posts.CatalogName='$string' AND ActivePost = 1 ";
           $result = $this->conn->query($query);
           return $result;
       }

       public function MAX($string)
       {
           $query="SELECT * FROM `posts` WHERE posts.CatalogName ='$string' AND ActivePost = 1 ORDER BY PostID DESC LIMIT 1";
           $result = $this->conn->query($query);
           return $result;
       }
       public function GetTwoPost($string)
       {
           $query ="SELECT MAX(PostID) as id FROM posts WHERE CatalogName='$string' AND ActivePost = 1";
           $result = $this->conn->query($query);
           while ($row = $result->fetch_array()) {
               $id = $row['id'];
           }
           $query1="SELECT * FROM `posts` WHERE CatalogName='$string' AND PostID !=$id AND ActivePost = 1 ORDER BY PostID DESC limit 2";
           $result1= $this->conn->query($query1);
           return $result1;
       }
       
      public function GetPostMaxTwo()
      {
          $query ="SELECT MAX(PostID) as id FROM posts WHERE CatalogName='Gallery' AND ActivePost = 1";
           $result = $this->conn->query($query);
           while ($row = $result->fetch_array()) {
               $id = $row['id'];
           }
          $query1="SELECT * FROM `posts` WHERE posts.CatalogName ='Gallery' AND PostID != $id AND ActivePost = 1 ORDER BY PostID DESC LIMIT 1";
          $result1 = $this->conn->query($query1);
          return $result1;    
      }
      
      public function GetPostMaxThree()
      {
           $query ="SELECT MAX(PostID) as id1 FROM posts WHERE CatalogName='Gallery' AND ActivePost = 1";
           $result = $this->conn->query($query);
           while ($row = $result->fetch_array()) {
               $id1 = $row['id1'];
           }
           $query2 ="SELECT MAX(PostID) as id2 FROM posts WHERE CatalogName='Gallery' AND PostID != $id1 AND ActivePost = 1";
           $result2 = $this->conn->query($query2);
           while ($row2 = $result2->fetch_array()) {
               $id2 = $row2['id2'];
           }
           $query3="SELECT * FROM `posts` WHERE posts.CatalogName ='Gallery' AND PostID != $id1 AND PostID != $id2 AND ActivePost = 1 ORDER BY PostID DESC LIMIT 1";
          $result3 = $this->conn->query($query3);
          return $result3;
           
        
          
      }
      
      public function GetPostMaxFour()
      {
         $query ="SELECT MAX(PostID) as id1 FROM posts WHERE CatalogName='Gallery' AND ActivePost = 1";
           $result = $this->conn->query($query);
           while ($row = $result->fetch_array()) {
               $id1 = $row['id1'];
           }
           $query2 ="SELECT MAX(PostID) as id2 FROM posts WHERE CatalogName='Gallery' AND PostID != $id1 AND ActivePost = 1";
           $result2 = $this->conn->query($query2);
           while ($row2 = $result2->fetch_array()) {
               $id2 = $row2['id2'];
           }  
           $query0 ="SELECT MAX(PostID) as id0 FROM posts WHERE CatalogName='Gallery' AND PostID != $id2 AND PostID != $id1 AND ActivePost = 1";
           $result0 = $this->conn->query($query0);
           while ($row0 = $result0->fetch_array()) {
               $id0 = $row0['id0'];
           } 
           $query3="SELECT * FROM `posts` WHERE posts.CatalogName ='Gallery' AND PostID != $id0 AND PostID != $id1 AND PostID != $id2 AND ActivePost = 1 ORDER BY PostID DESC LIMIT 1";
          $result3 = $this->conn->query($query3);
           
          return $result3;
      }
      
       
       
       public function Except($id)
       {
       
        $id = $_GET['id'];
        $query="SELECT CatalogName FROM `posts` WHERE PostID = $id AND ActivePost = 1";
        $result = $this->conn->query($query);
        while ($row = $result->fetch_array()) {
            $catalog = $row['CatalogName'];
        }
        $query1="SELECT MAX(PostID) as id FROM `posts` WHERE CatalogName='$catalog' AND PostID != $id AND ActivePost =1";
        $result1 = $this->conn->query($query1);
        while ($row = $result1->fetch_array()) {
            $postid = $row['id'];
        }
       
        $query2 = "SELECT * FROM `posts` WHERE PostID = $postid";
        $result2 = $this->conn->query($query2);
        return $result2;
       }
       
        
       public function GetPostNew($id)
       {
        $id = $_GET['id'];
        $query="SELECT CatalogName FROM `posts` WHERE PostID = $id AND ActivePost = 1";
        $result = $this->conn->query($query);
        while ($row = $result->fetch_array()) {
            $catalog = $row['CatalogName'];
        }
        $query1="SELECT MAX(PostID) as id FROM `posts` WHERE CatalogName='$catalog' AND PostID != $id AND ActivePost =1";
        $result1 = $this->conn->query($query1);
        while ($row = $result1->fetch_array()) {
            $postid = $row['id'];
        }
        $query2="SELECT * FROM `posts` WHERE CatalogName='$catalog' AND ActivePost = 1 AND PostID != $id AND PostID != $postid ORDER BY PostID DESC limit 4";
        $result2= $this->conn->query($query2);
        return $result2;
        
       }
       public function GetMusic()
       {
            $string = "SELECT Ulrmusic FROM music INNER JOIN album ON music.AlbumID = album.AlbumID AND album.Active= 1 AND music.Active = 1;";
            $result = $this->conn->query($string);
            return $result;   
       }
       public function dem_lan_xem($ma)
       {
            // neu chua ton tai session bo dem moi them 1 lan xem nua
            $sql = "UPDATE  `posts`  SET View = View+1 WHERE PostID = $ma";
            $result = $this->conn->query($sql);

       }
       
        public function GetViewHot()
        {
        $sql = "SELECT *, DATE_FORMAT(DatePost,'%d/%m/%Y') AS regdate FROM `posts` Where ActivePost = 1 ORDER BY View DESC limit 10";
        $result = $this->conn->query($sql);
        return $result;
        }
        
        public function GetViewHot1()
        {
        $sql = "SELECT *, DATE_FORMAT(DatePost,'%d/%m/%Y') AS regdate FROM `posts` Where ActivePost = 1 ORDER BY View DESC limit 3";
        $result = $this->conn->query($sql);
        return $result;
        }
        
        public function GetSearch($search)
        {
                $sql="SELECT * FROM `posts` WHERE NamePost like '%$search%' AND ActivePost=1";
                $result = $this->conn->query($sql);
        return $result;
        }
        public function GetBanner($string)
        {
                $sql = "SELECT * FROM `banner` WHERE Localtion = '$string' AND ActiveBanner = 1 limit 1;";
                $result = $this->conn->query($sql);
        return $result;
        }
        public function GetCatalog()
        {
                $sql = "SELECT * FROM catalog WHERE Active = 1 limit 7";
                $result = $this->conn->query($sql);
                return $result;
        }
        public function GetCatalogHomepage($string)
        {
                $sql = "SELECT * FROM `catalog` WHERE Ordinal = '$string' AND Active = 1;";
                $result = $this->conn->query($sql);
        return $result;
        }
        
     
       
       

    }
?>