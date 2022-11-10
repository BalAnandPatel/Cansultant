<?php 
include "include/header.php"; 
?>
<?php

  $url = $URL."exam/read_exam_list.php";
  $data = array();
  //print_r($data);
  $postdata = json_encode($data);
  $client = curl_init($url);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
  //curl_setopt($client, CURLOPT_POST, 5);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  $response = curl_exec($client);
  //print_r($response);
  $result = json_decode($response);
  //print_r($result);
?>

    <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><span>/</span></li>
                        <li>Recruitment</li>
                    </ul>
                    <h2>Recruitment</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Error Page Start-->
        <section class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <h3 class="error-page__tagline">Recruitment</h3>
                            <p class="error-page__text"><b>SHAILJA SANEER EDUCATION AND GREEN REVOLUTIO (OPC) PVT.LTD.</b></p>
                            <p class="error-page__text">RECRUITED 53900 VARIOUS POST IN EDUCATION, AGRICUTURE AND HOME INDUSTRY / SMALL SCALE INDUSTRY SECTOR.</p>
                            <div class="error-page__btn-box mt-5">
                                <a href="index.php" class="thm-btn error-page__btn">For more details check the notification<i
                                        class="icon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->

        <!--Start Cart Page-->
        <section class="cart-page">
            <div class="container">
                <div class="table-responsive">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                              <!--   <th>Item</th> -->
                                <th>Exam Name</th>
                                <th>Exam Type</th>
                                <th>Exam Amount</th>
                                <th>Exam Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                             <?php 
                                     
                                foreach($result as $key => $value){
                                foreach($value as $key1 => $value1)
                               {
                             ?> 

                            <tr>
                                <td>
                                    <div class="product-box">
                                        <h3><a href="#"><?php echo $value1->exam_name; ?></a></h3>
                                    </div>
                                </td>
                                <td><?php echo $value1->type; ?></td>
                                <td><?php echo $value1->amount; ?></td>
                                <td><?php echo $value1->exam_date; ?></td>
                                 <td>
                                     <div class="error-page__btn-box mt-0">
                                <a href="../user/index.php" target="blank" class="thm-btn error-page__btn">Apply<i
                                        class="icon-right-arrow"></i> </a>
                            </div>
                                 </td>
                            </tr>

                            <?php } } ?>
                           
                        </tbody>
                    </table>
                </div>

             <!--    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <form action="#" class="default-form cart-cupon__form">
                            <input type="text" placeholder="Enter Coupon Code" class="cart-cupon__input">
                            <button class="thm-btn" type="submit">
                                <span>Apply Coupon</span> <i class="icon-right-arrow"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <ul class="cart-total list-unstyled">
                            <li>
                                <span>Subtotal</span>
                                <span>$20.98 USD </span>
                            </li>
                            <li>
                                <span>Shipping Cost</span>
                                <span>$0.00 USD</span>
                            </li>
                            <li>
                                <span>Total</span>
                                <span class="cart-total-amount">$20.98 USD</span>
                            </li>
                        </ul>
                        <div class="cart-page__buttons">
                            <div class="cart-page__buttons-1">
                                <a href="#" class="thm-btn">Update <i class="icon-right-arrow"></i></a>
                            </div>
                            <div class="cart-page__buttons-2">
                                <a href="checkout.html" class="thm-btn">Checkout <i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!--End Cart Page-->
<?php
include "include/footer.php"; 
?>
