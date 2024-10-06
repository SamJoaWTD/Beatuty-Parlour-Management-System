<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 footer-1">
            <h6 class="footer-title-29">Contact Us</h6>
            <ul>
            <li>
  <span class="fa fa-map-marker"></span>
  <p>418A,transport nagar,Madurai . </p>
</li>
<li>
  <span class="fa fa-phone"></span>
  <a href="tel:+7826045193">+7826045193</a>
</li>
<li>
  <span class="fa fa-envelope-open-o"></span>
  <a href="mailto:samhita162004@gmail.com" class="mail">samhita162004@gmail.com</a>
</li>



            </ul>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-4 footer-list-29 footer-2 ">
  
            <ul>
              <h6 class="footer-title-29">Useful Links</h6>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php"> Services</a></li>
              <li><a href="contact.php">Contact us</a></li>
            </ul>
          </div>
         
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4">
            <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <h6 class="footer-title-29"><?php  echo $row['PageTitle'];?> </h6>
            <p><?php  echo $row['PageDescription'];?></p><?php } ?>
  
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© 2022  Beauty Parlour Management System </p>
  
        <div class="col-lg-4 main-social-footer-29">
  <a href="https://www.facebook.com/yourprofile" class="facebook" target="_blank"><span class="fa fa-facebook"></span></a>
  <a href="https://www.twitter.com/yourprofile" class="twitter" target="_blank"><span class="fa fa-twitter"></span></a>
  <a href="https://www.instagram.com/samhita_mahe" class="instagram" target="_blank"><span class="fa fa-instagram"></span></a>
  <a href="https://www.linkedin.com/in/samhitamahe" class="linkedin" target="_blank"><span class="fa fa-linkedin"></span></a>
</div>


  
      </div>
    </div>
  </section>