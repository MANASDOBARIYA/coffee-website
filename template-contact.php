<?php
// Template Name:Contact us
get_header();

?>

 <div class="contact_section_2 layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_0">
                  <div class="mail_section">
                     <div class="email_text">
                     
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Numbar" name="phone_number">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="massage"></textarea>
                        </div>
                        <div class="send_btn">
              
                           <div type="text" class="main_bt"><a href="#">SEND</a></div>
                        </div>
                 
                     </div>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="508" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php get_footer(); ?>