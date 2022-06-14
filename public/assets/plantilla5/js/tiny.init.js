

// feature-slidier
if (document.getElementsByClassName('feature-slider')[0] != undefined) {
var slider = tns({
    container: '.feature-slider',
    loop: true,
    navPosition: "bottom",
    speed : 400,
    mouseDrag: true,
    controls: false,
    autoplay: true,
    autoplayButtonOutput: false,
    responsive: {        
        640: {
            edgePadding: 20,
            gutter: 20,
            items: 1
          },
          700: {
            edgePadding: 20,
            gutter: 30,
            items: 2
          },
          900: {
            edgePadding: 20,
            items: 4
          }
    }
});
}

// testi-slider
if (document.getElementsByClassName('testi-slider')[0] != undefined) {
  var slider = tns({
      container: '.testi-slider',
      loop: true,
      navPosition: "bottom",
      speed : 400,
      center : true,
      mouseDrag: true,
      controls: false,
      autoplay: true,
      autoplayButtonOutput: false,
      responsive: {        
          640: {
              edgePadding: 20,
              gutter: 20,
              items: 1
            },
            700: {
              edgePadding: 20,
              gutter: 30,
              items: 1
            },
            900: {
              edgePadding: 20,
              items: 1
            }
      }
  });
  }


