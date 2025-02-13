$(window).on('scroll', function () {
    const scrollTop = $(window).scrollTop(); 
    const scale = 1 + scrollTop / 500; 
    const zoomOut = Math.min(scale, 2);
    
    $('#child-home').css('transform', `scale(${zoomOut})`); 
  });


// const image = document.getElementById('child-home');

// window.addEventListener('scroll', () => {
//   const scrollTop = window.scrollY; 
//   const scale = 1 + scrollTop / 500; 
//   const zoomOut = Math.min(scale, 2);
  
//   image.style.transform = `scale(${zoomOut})`; 
// });

  
