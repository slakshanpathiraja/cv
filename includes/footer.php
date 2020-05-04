<script src="js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Sweet alert  JS -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>
<!-- partical background JS -->
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script>
$(document).ready(function(){
    reset(0);
    $( "#home" ).show();
    $( ".profile-information" ).show();
    $( ".cv_btn" ).show();
  $("#home_btn").click(function(){
    reset(1000);
    $( ".profile-information" ).delay(1000).slideDown(1000);
    $( ".cv_btn" ).delay(1000).slideDown(1000);
    $( "#home" ).delay(1000).slideDown(1000);
  });
  $("#resum_btn").click(function(){
    reset(1000);
    $( ".resume_list" ).delay(1000).slideDown(1000);
    $( "#resume_part_1" ).delay(1000).slideDown(1000);
  });
  $("#portfolio_btn").click(function(){
    reset(1000);
    $( ".profile-information" ).delay(1000).slideDown(1000);
    $( ".cv_btn" ).delay(1000).slideDown(1000);
    $( "#portfolio" ).delay(1000).slideDown(1000);
  });
  $("#blog_btn").click(function(){
    reset(1000);
    $( ".profile-information" ).delay(1000).slideDown(1000);
    $( ".cv_btn" ).delay(1000).slideDown(1000);
    $( "#blog" ).delay(1000).slideDown(1000);
  });
  $("#contact_btn").click(function(){
    reset(1000);
    $( ".profile-information" ).delay(1000).slideDown(1000);
    $( ".cv_btn" ).delay(1000).slideDown(1000);
    $( "#contact" ).delay(1000).slideDown(1000);
  });
  $("#education").click(function(){
    reset_c(1000);
    $( "#resume_part_2" ).delay(1000).slideDown(1000);
  });
  $("#skills").click(function(){
    reset_c(1000);
    $( "#resume_part_3" ).delay(1000).slideDown(1000);
  });
  $("#qulification").click(function(){
    reset_c(1000);
    $( "#resume_part_4" ).delay(1000).slideDown(1000);
  });
  $("#projects").click(function(){
    reset_c(1000);
    $( "#resume_part_5" ).delay(1000).slideDown(1000);
  });

});
function reset (time) {
    $( "#home" ).slideUp(time);
    $( "#resume_part_1" ).slideUp(time); 
    $( "#resume_part_2" ).slideUp(time);
    $( "#resume_part_3" ).slideUp(time);
    $( "#resume_part_4" ).slideUp(time);
    $( "#resume_part_5" ).slideUp(time);
    $( "#portfolio" ).slideUp(time);
    $( "#blog" ).slideUp(time);
    $( "#contact" ).slideUp(time);
    $( ".profile-information" ).slideUp(time);
    $( ".cv_btn" ).slideUp(time);
    $( ".resume_list" ).slideUp(time);
    $( ".portfolio_list" ).slideUp(time);
}
function reset_c (time) {
    $( "#home" ).slideUp(time);
    $( "#resume_part_1" ).slideUp(time); 
    $( "#resume_part_2" ).slideUp(time);
    $( "#resume_part_3" ).slideUp(time);
    $( "#resume_part_4" ).slideUp(time);
    $( "#resume_part_5" ).slideUp(time);
    $( "#portfolio" ).slideUp(time);
    $( "#blog" ).slideUp(time);
    $( "#contact" ).slideUp(time);
}
var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
});
</script>
</body>
</html>