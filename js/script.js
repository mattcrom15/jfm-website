// image slideshow
function Slideshow(elem){
    const images = document.querySelectorAll('.product-hero-image');
    const thumbid = elem.getAttribute('thumbnailid');

    for (let t = 0; t < images.length; t++) {
        const element = images[t];
        if (element.getAttribute('photoid') == thumbid){
            element.style.opacity = 1;
            
        }else{
            element.style.opacity = 0;
            
        }
        
    }

}