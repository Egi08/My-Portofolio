$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slideup
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        $('html').css("scrollBehavior", "smooth");
    });

    //navbar 
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    var typed = new Typed(".typing", {
        strings: ["Muhammad Egi Perdianza"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
    
    // portofolio
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });

    $(document).ready(function(){
        $(window).scroll(function(){
            if(this.scrollY > 20){
                $('.navbar').addClass("sticky");
            }else{
                $('.navbar').removeClass("sticky");
            }
            
            if(this.scrollY > 500){
                $('.scroll-up-btn').addClass("show");
            }else{
                $('.scroll-up-btn').removeClass("show");
            }
        });
    
let width = 400;
let height = 400;

const scene = new THREE.Scene();
      scene.background = new
      THREE.Color("white");
const camera = new THREE.PerspectiveCamera(20, width/height, 1, 20);
const canvas = document.getElementById('myCanvas');
const renderer = new THREE.WebGLRenderer( {canvas});
      

renderer.setSize(width, height);
camera.position.z = 5;

// /* Geometri Material */
const geo = new THREE.BoxGeometry(1, 1, 1);

// /* Custom Material */
const ATexture = new THREE.TextureLoader().load('https://i.ibb.co/0m46KDH/PBO-DONE-2-removebg-preview-1.png');

const material = new THREE.MeshBasicMaterial(
    {
        map: ATexture
    }
);
let mesh = new THREE.Mesh(geo, material);
scene.add(mesh);

let pageX = 0.5;
let pageY = 0.5;

document.body.addEventListener('mousemove', (event) => {
  pageX = event.pageX / window.innerHeight; pageY = event.pageY/ window.innerHeight;
});
window.addEventListener('resize', function() {
    renderer.setSize(width, height);
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
});

function update() {
    mesh.rotation.y = (pageY - 0.5) * 2;
    mesh.rotation.x = (pageX - 0.5) * 2;

    requestAnimationFrame(update);
    renderer.render(scene, camera);
}
update();

      
      
        // slideup
        $('.scroll-up-btn').click(function(){
            $('html').animate({scrollTop: 0});
            $('html').css("scrollBehavior", "auto");
        });
    
        $('.navbar .menu li a').click(function(){
            $('html').css("scrollBehavior", "smooth");
        });
    
        //navbar 
        $('.menu-btn').click(function(){
            $('.navbar .menu').toggleClass("active");
            $('.menu-btn i').toggleClass("active");
        });
    
        var typed = new Typed(".typing", {
            strings: ["Muhammad Egi Perdianza"],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true
        });
        
        // portofolio
        $('.carousel').owlCarousel({
            margin: 20,
            loop: true,
            autoplay: true,
            autoplayTimeOut: 2000,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items: 1,
                    nav: false
                },
                600:{
                    items: 2,
                    nav: false
                },
                1000:{
                    items: 3,
                    nav: false
                }
            }
        });
    });
});