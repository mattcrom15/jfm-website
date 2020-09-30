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


function MobileMenu(){
    const menu = document.getElementById('nav-menu');
    const menuStatus = menu.getAttribute('status');
    const hamburger = document.querySelector('.hamburger');
    const closeIco = document.querySelector('.close-ico');

    if(menuStatus == 'closed'){
        menu.setAttribute('status','open')
        hamburger.style.display = 'none';
        closeIco.style.display = 'block';
        menu.style.display = 'block';
        hamburger.style.pointerEvents = 'none';
        closeIco.style.pointerEvents = 'auto';

    }else{
        menu.setAttribute('status','closed')
        closeIco.style.display = 'none';
        menu.style.display = 'none';
        hamburger.style.display = 'block';
        closeIco.style.pointerEvents = 'none';
        hamburger.style.pointerEvents = 'auto';
    }
}