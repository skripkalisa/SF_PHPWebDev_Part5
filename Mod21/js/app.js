console.clear()
M.AutoInit()

// initializing the .sidenav element and modifying its options
const sidenav = document.querySelector('.sidenav')
const iSidenav = M.Sidenav.init(sidenav, {
  inDuration: 350,
  outDuration: 350,
  edge: 'left', //or right
})
var carousel = document.querySelector('.carousel')
var iCarousel = M.Carousel.init(carousel, {
  fullWidth: true,
})

setInterval(() => {
  iCarousel.next()
}, 2000)
