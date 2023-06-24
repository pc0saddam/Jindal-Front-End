<script src="assets/owl-carousel/owl.carousel.min.js"></script>



<script type="text/javascript">

$(document).ready(function () {

  $('.list').click(function () {
    const value = $(this).attr('data-filter');
    if (value == 'all') {
      $('.item-box').show('1000');

    }
    else {
      $('.item-box').not('.' + value).hide('1000');
      $('.item-box').filter('.' + value).show('1000');
    }
  })

  // add active class on selected items

  $('.list').click(function () {
    $(this).addClass('active').siblings().removeClass('active');
  })


})

</script>

<script>
$(document).ready(function () {
  var owl = $('#testimonial .owl-carousel');
  owl.owlCarousel({
    items: 4,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
        loop: true
      },
      600: {
        items: 1,
        nav: true,
        loop: true
      },
      1000: {
        items: 3,
        nav: true,
        loop: true
      }
    }
  });
  $('.play').on('click', function () {
    owl.trigger('play.owl.autoplay', [1000])
  })
  $('.stop').on('click', function () {
    owl.trigger('stop.owl.autoplay')
  })

})


$(document).ready(function () {
  var owl = $('#Shop-by-companies .owl-carousel');
  owl.owlCarousel({
    items: 4,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 3,
        nav: true,
        loop: true
      },
      600: {
        items: 3,
        nav: true,
        loop: true
      },
      1000: {
        items: 5,
        nav: true,
        loop: true
      }
    }
  });
  $('.play').on('click', function () {
    owl.trigger('play.owl.autoplay', [1000])
  })
  $('.stop').on('click', function () {
    owl.trigger('stop.owl.autoplay')
  })

})
</script>