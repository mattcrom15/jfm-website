// image slideshow
function Slideshow(elem){
    const images = document.querySelectorAll('.product-hero-image');
    const thumbid = elem.getAttribute('thumbnailid');

    for (let t = 0; t < images.length; t++) {
        const element = images[t];
        if (element.getAttribute('photoid') == thumbid){
            console.log('same image');
            element.style.opacity = 1;
            
        }else{
            console.log('different image');
            element.style.opacity = 0;
            
        }
        
    }