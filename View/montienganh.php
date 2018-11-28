<?php 
session_start();
require_once("header_student.php");
$monhoc =  $_REQUEST['monhoc'];
?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <div class="main-container container" id="main-container" style="    background-color: #fff; ">            
      <!-- post content -->
      <div class="blog__content mb-72">
        <h1 class="page-title" style=" MARGIN-LEFT: 26%; font-size: 108px;">Tiếng anh</h1>      
        <!-- bat dau cac dong lam bai thi , hoc bai -->
<div align="text-center" >
       
            <br>
            <!-- bat dau dong xoa cau hoi  -->
            <div class="row" >
                <div class="col"></div>              
                <div class="col">

                 
              <button type="button"  data-toggle="modal" data-target="#myModal_baihoc" class="btn btn-primary btn-block" >
                HỌC BÀI
              </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal_baihoc">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">BÀI HỌC</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->

        <div class="modal-body">
          
            
          
                       <!--  <li><a href="View/xoacauhoi.php?monhoc=<?php echo $monhoc ?>&baithi=1" >CLIP</a></li> -->
                         <li><a href="View/xembaigiang_ta_clip.php" >XEM CLIP</a></li>
                          <li><a href="View/xembaigiang_file.php" >XEM BÀI GIẢNG</a></li>
                        
                       
                       
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
              

                </div>
                <div class="col"></div>  

            </div>             
    <!-- ket thuc dong xoa cau hoi -->
            <br>
    <!-- bat dau dong sua cau hoi  -->
            <div class="row" >
                <div class="col"></div>              
                <div class="col">

                 
              <button type="button"  data-toggle="modal" data-target="#myModal_lambai" class="btn btn-primary btn-block" >
                LÀM BÀI THI
              </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal_lambai">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Danh Sách Bài Thi </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->

        <div class="modal-body">
          
            
          
                        <li><a href="View/test.php?test=1&monhoc=<?php 
                  echo $monhoc ?> " >Bài Thi 1</a></li>
                        <li><a href="#" >Bài Thi 2</a></li>
                        <li><a href="#" >Bài Thi 3</a></li>
                       
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
              

                </div>
                <div class="col"></div>  

            </div> 
    <!-- ket thuc dong sua cau hoi -->
        </div>
        <!-- ket thuc cac dong lam bai thi ,hoc bai -->
     

        
        </div>   
				

        	
        <div class="main-container container pt-80 pb-80" id="main-container">            
      <!-- post content -->
      <div class="blog__content mb-72">
        <div class="container text-center">
          <h1 class="page-404-number"style=" color: green;">THT</h1>
          <h2>ĐỪNG DO DỰ</h2>
          <p>Chúng tôi luôn bên cạnh bạn !</p>

          <div class="row justify-content-center mt-40">
                
            <div class="col-md-6">
              <!-- Search form -->
                        <!-- Widget Popular Posts -->
          <aside class="widget widget-popular-posts">
            <h4 class="widget-title">Popular Posts</h4>
            <ul class="post-list-small">
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-100">
                      <a href="single-post.html">
                        <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                    </h3>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <span>by</span>
                        <a href="#">DeoThemes</a>
                      </li>
                      <li class="entry__meta-date">
                        Jan 21, 2018
                      </li>
                    </ul>
                  </div>                  
                </article>
              </li>
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-100">
                      <a href="single-post.html">
                        <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                    </h3>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <span>by</span>
                        <a href="#">DeoThemes</a>
                      </li>
                      <li class="entry__meta-date">
                        Jan 21, 2018
                      </li>
                    </ul>
                  </div>                  
                </article>
              </li>
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-100">
                      <a href="single-post.html">
                        <img data-src="img/content/post_small/post_small_3.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                    </h3>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <span>by</span>
                        <a href="#">DeoThemes</a>
                      </li>
                      <li class="entry__meta-date">
                        Jan 21, 2018
                      </li>
                    </ul>
                  </div>                  
                </article>
              </li>
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-100">
                      <a href="single-post.html">
                        <img data-src="img/content/post_small/post_small_4.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                      </a>
                    </div>
                  </div>
                  <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                      <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                    </h3>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <span>by</span>
                        <a href="#">DeoThemes</a>
                      </li>
                      <li class="entry__meta-date">
                        Jan 21, 2018
                      </li>
                    </ul>
                  </div>                  
                </article>
              </li>
            </ul>           
          </aside> <!-- end widget popular posts -->

          <!-- Widget Newsletter -->

              <!-- Back to home -->
              <a href="index.html" class="btn btn-lg btn-light mt-40"><span>Back to Home</span></a>
            </div>     
          
          </div> <!-- end row -->

        </div> <!-- end container -->
      </div> <!-- end post content -->
    </div>
     
      </div> <!-- end post content -->
    </div> <!-- end main container -->


<?php require_once("footer.php");?>