<div class="header">
            
            <div class="row nav sticky-top" >
            
                <div class="col-sm-2 col-2 open-slide">
                
                    <a id="open" href="#" style="color: white;"><i class="fas fa-bars"></i></a>
                </div>
                <div class="col-md-10 col-sm-8 col-8"></div>

                <div class="col-md-2 col-sm-2 col-2 search" style="text-align:right;">
                
                    <a href="#" class="text-white btn-outline-dark"  data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-search"></i>
                        <span id="search-text"  >Search</span>
                    </a>
                </div>
           
        </div>
        <div class="slide-menu">
            <a href="#" id="btn-close">&times;</a>
            <a href="index.php" style="color: white;">HOME</a>
            <?php
						$user1 = $user->GetCatalog();
						while ($row = $user1->fetch_array()) {
            echo '<a style="color: white;" href="Catalog.php?Name%id='.$row['CatalogName'].'" ';
       
            echo '>' . $row['CatalogName'] . '</a>';
            
            }
						?>
        </div>
        
        <div class="header-logo">
            <div class="row text-center">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <a href="index.php"><img class="img-fluid" alt="Responsive image"
                            src="https://loopcentral.net/wp-content/uploads/2018/01/loopcentral-logo-150x110.png"></a>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                <?php 
              
                $user1 = $user->GetBanner("header");
                while($row = $user1->fetch_array())
                {
                
                  echo'  <a href="';
                  echo $row['Url'];
                  echo '">';
                 
                 
                   echo '<img src=' . $row['BannerUrl'] . ' class="img-fluid" class="img-fluid">';
                  echo'  </a>';
                  }
                    ?>

                </div>
            </div>

        </div> 
        <div class="make-me-sticky1 row"  data-spy="affix">
        
        <div class="row">
         <nav id="cb-nav-bar" class="" style="height: 45px;">
                 <div class="" >
                    <ul class="ss cb-main-nav wrap clearfix"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-21 current_page_item">
                    <a class="btn-outline-danger"  href="index.php">HOME</a></li>
                    <?php
						$user1 = $user->GetCatalog();
						while ($row = $user1->fetch_array()) {
                                              
                    
echo '<li  class="menu-item-hover menu-item menu-item-type-taxonomy menu-item-object-category "><a class="btn-outline-danger"  href="Catalog.php?Name%id='.$row['CatalogName'].'" ';

echo '>' . $row['CatalogName'] . '</a></li>';


}
						?>
<li  class="menu-item-hover menu-item menu-item-type-taxonomy menu-item-object-category "><a class="btn-outline-danger"  href="CONTACT.php">CONTACT</a></li>                                                
<li  class="cb-trending"><a class="btn-outline-danger" href="posthot.php" id="cb-trend-menu-item" class="cb-trending-item" data-spy="affix"> BÀI VIẾT HOT</a></li>
</ul>

             </nav>
        </div>
        </div>
        
        


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="form">
       <input class="input-search" type="text" name="search" placeholder="Search... " required></input>
       
       </form>
      </div>
      <div class="">
      
        <button type="submit" id="submit"  class="btn btn-dark text-right" style="margin:10px;display:none;">Search</button>
        <div id="result"></div>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
  $(document).ready(function () {
    //khai báo biến submit form lấy đối tượng nút submit
    var submit = $("button[type='submit']");
    
   
           
           
    $('input').keypress(function () {
    
    
      setTimeout(function () {
        $('#submit').trigger("click");
        

        //khai báo các biến dữ liệu gửi lên server
        var user = $("input[name='search']").val(); //lấy giá trị trong input user

        //Kiểm tra xem trường đã được nhập hay chưa

        //Lấy toàn bộ dữ liệu trong Form
        var data = $('form#form').serialize();
        

        //Sử dụng phương thức Ajax.
        $.ajax({
          type: 'POST', //Sử dụng kiểu gửi dữ liệu POST
          url: 'search.php', //gửi dữ liệu sang trang data.php
          data: data, //dữ liệu sẽ được gửi
          success: function (data)  // Hàm thực thi khi nhận dữ liệu được từ server
          {
            if (data == 'false') {
              alert('Không có người dùng');
            } 
            else {
              $('#result').html(data); //dữ liệu HTML trả về sẽ được chèn vào trong thẻ có id content
              
              if (e.keyCode == 13) {
                      $('#ok').click();
                      
              }
              if (e.keyCode == 13) {
                      $('#not').click();
                      
              }
             
              
            }
          }
        });

      },100);
           $('input').keyup(function(event){

    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        $(location).attr('href', 'postsearch.php');
            }

        });
    });
    
 
    //khi nút submit được click

  });
  
  
</script>
