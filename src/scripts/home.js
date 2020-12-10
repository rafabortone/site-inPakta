$(document).ready(function(){
  if (window.innerWidth <= 769 ) {
    const sliderCards = $('.cards-list')
    if ( sliderCards.length) {
      sliderCards.slick({
        autoplay: false,
        dots: true,
        arrows:false,
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: true,
        infinite: false,
        responsive: [
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            },
          },
        ]
      })
    }
  }
})

$('.card-content button').click(function(){
  window.location = window.location.href = '/#contato' 
})