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
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<!-- progress bar JS -->
<script src="js/tox-progress.js"></script>

<script>
$(document).ready(function(){
    reset(0);
    $( "#home" ).show();
    $( ".profile-information" ).show();
    $( ".cv_btn" ).show();
    ToxProgress.create();
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
    ToxProgress.animate();
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
<script>
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 88,
      "density": {
        "enable": true,
        "value_area": 700
      }
    },
    "color": {
      "value": ["#aa73ff", "#f8c210", "#83d238", "#33b1f8"]
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#eee"
      },
      "polygon": {
        "nb_sides": 15
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1.5,
        "opacity_min": 0.15,
        "sync": false
      }
    },
    "size": {
      "value": 3.5,
      "random": false,
      "anim": {
        "enable": true,
        "speed": 2,
        "size_min": 0.55,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 110,
      "color": "#eee",
      "opacity": 0.25,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1.6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
  stats.begin();
  stats.end();
  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
  }
  requestAnimationFrame(update);
};
requestAnimationFrame(update);;
</script>
</body>
</html>