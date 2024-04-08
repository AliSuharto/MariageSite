
const container= document.getElementById('animation');
const images=document.querySelectorAll('.imtext');
let currentImageIndex=0;
function scrollImages(){
    images[currentImageIndex].classList.remove('active');
    currentImageIndex= (currentImageIndex+1)% images.length;
    images[currentImageIndex].classList.add('active');
}
setInterval(scrollImages,3000);
images[currentImageIndex].classList.add('active');

    function toPage1(){
        window.location.href="box1.html";
    }
    function toPage2(){
        window.location.href="box2.html";
    }
    function toPage3(){
        window.location.href="box3.html";
    }