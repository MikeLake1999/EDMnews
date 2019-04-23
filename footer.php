<div class="container footer">

    <div class="row">
    <div class="col-12 text-center" style="margin-top:20px; margin-bottom:20px">
                            <a href="#">
                                <img src="https://loopcentral.net/wp-content/uploads/2018/05/Logo-white-100x70.png" class="img-fluid" alt="">
                            </a>
                        </div>

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 hot-footer" style="margin:20px;">
            <div class="cb-one cb-column clearfix text-center">
                <div id="text-2" class="cb-footer-widget clearfix widget_text">
                    <div class="textwidget">
            
                        <p style="text-align: justify;"><span
                                style="font-family: helvetica, sans-serif; font-size: 12pt; color: #ffffff;">Loop
                                Central ra mắt như với tiêu chí “luôn giữ bạn trong dòng thông tin” liên quan về nhạc
                                dance tại Việt Nam và trên toàn thế giới.</span></p>
                        <p style="text-align: justify;"><span
                                style="font-family: helvetica, sans-serif; font-size: 12pt; color: #ffffff;">Tất cả
                                những thông tin về nhạc dance như: tin tức, sự kiện đang và sắp diễn ra, mixtape mới,
                                các bài phỏng vấn hay những câu chuyện về các nghệ sĩ, Loop Central sẽ là điểm đến của
                                bạn.</span></p>
                        <p style="text-align: justify;"><span
                                style="font-family: helvetica, sans-serif; font-size: 12pt; color: #ffffff;">Với mong
                                muốn kết nối, mang lại thông tin hiểu biết chính xác và tôn trọng tất cả các thể loại
                                nhạc cũng như những người nghệ sĩ trong và ngoài nước, Loop Central hướng đến một tương
                                lai rộng mở cho nền văn hoá nhạc dance Việt Nam.</span></p>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 hot-footer" style="margin:20px;">
            <div class="cb-two cb-column clearfix">

                <h3 class="cb-footer-widget-title cb-widget-title">Bài Viết Mới Nhất</h3>
                <?php $user1 = $user->NewPost(4);
					if ($user1->num_rows > 0) {
						while ($row = $user1->fetch_array()) {
                                                echo '<div class="row" style="margin-bottom:20px;">';
                                                
                                                        echo '<div class="col-4"><div class="hover-img"><a href="post.php?id=' . $id . '"><img  src=' . $row['Img'] . ' class="img-fluid img-footer" alt=""></a></div></div>';
                                                        echo '<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12  cb-post-title"> <a href="post.php?id=' . $id . '"><h4 style="color:#eee">' . $row['NamePost'] . '</h4></a></div>';
                                                        
                                                
                                                
                                                echo ' </div>';
                                                
                                                
                                                
                                                }
                                                
                                                
                                                }
                                                ?>
            </div>
        </div>






    </div>
    <div class="row">

        <div class="col-12">
            <div class="text-center">
            

                <div id="cb-social-media-widget-2" class="cb-footer-widget clearfix cb-widget-social-media clearfix">
                    <h3 class="cb-footer-widget-title cb-widget-title">FOLLOW US:</h3>
                    <div class="cb-social-media-icons cb-colors"><a href="https://www.instagram.com/loopcentral/"
                            target="_blank" class="cb-instagram cb-icon-1"></a><a
                            href="https://www.facebook.com/loopcentral/" target="_blank"
                            class="cb-facebook cb-icon-2"></a><a href="http://www.twitter.com/loop_central"
                            target="_blank" class="cb-twitter cb-icon-3"></a></div>
                </div>
                <div class="cb-copyright"><h4  style=" color:#a6a6a6;">Copyright © 2017 by LOOP CENTRAL. All Rights Reserved. </h4></div>


            </div>
        </div>




    </div>






<script>
$('#open').click(function () {
$('.slide-menu').css('width', '250px');})

$('#btn-close').click(function () {
$('.slide-menu').css('width', '0');
})




</script>                