<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Muhammad Egi Perdianza</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <style>
        canvas {
          margin: 0px;
          padding: 0px;
        }
      </style>
      <script src="node_modules/three/build/three.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    @include('templates.partials.navbar')
    <!-- project -->
    <section class="parallax" id="project">
        <div class="project">
            <div class="max-width">
                <h2 class="title">My project</h2>
                <div class="carousel owl-carousel">
                    <div class="card">
                        <div class="box">
                            <img src="https://i.ibb.co/zsMHq0p/Screenshot-2023-04-13-022726.png" alt="">
                            <div class="text">Membuat Prototype aplikasi menggunkan figma</div>
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://i.ibb.co/2yt4pX1/Screenshot-2023-04-13-022933.png" alt="">
                            <div class="text">Membuat Aplikasi BMI</div>
                            <a href="-">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://i.ibb.co/WkC5YFt/Screenshot-2023-04-13-023730.png" alt="">
                            <div class="text">Membuat cv dengan html css dan js </div>
                            <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://i.ibb.co/74cBV3B/Screenshot-2023-04-13-024039.png" alt="">
                            <div class="text">Membuat website ecommerce </div>
                            <a href="">Read More</a>
                        </div>
                    </div>
                  <div class="card">
                        <div class="box">
                            <img src="https://i.ibb.co/94qNXZ7/Screenshot-2023-04-13-024541.png" alt="">
                            <div class="text">Membuat website E-Perpus</div>
                            <a href="-">Read More</a>
                        </div>
                    </div>
                  <div class="card">
                        <div class="box">
                            <img src="https://i.ibb.co/pK3VB5h/Screenshot-2023-04-13-024915.png" alt="">
                            <div class="text">Membuat Profil Biodata diri menggunakan html,css dan js</div>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
        
          
                <div class="text"><span class="typing">Muhammad Egi Perdianza</span></div>
            
        
   
         <!--3D-->
         <script>
            let width = 1356;
            let height = 100;

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(45, width/height, 0.1, 5);
            const renderer = new THREE.WebGLRenderer({antialias: true});

            renderer.setSize(width, height);
            document.body.appendChild(renderer.domElement);

            camera.position.z = 5;

            const geo = new THREE.BufferGeometry();
            let vertices = new Float32Array([
            -1.0, -1.0, 1.0,    // 0
            1.0, -1.0, 1.0,     // 1
            1.0, -1.0, -1.0,    // 2
            -1.0, -1.0, -1.0,   // 3
            0.0, 0.0, 0.0       // 4

            ]);
            let colors = new Float32Array([
            //   R    G    B
            1.0, 0.0, 0.0,  // 0
            0.0, 1.0, 0.0,  // 1
            0.0, 0.0, 1.0,  // 2
            1.0, 1.0, 0.0,  // 3

            1.0, 0.0, 1.0,  // 4
            ]);

            geo.setAttribute('position', new THREE.BufferAttribute(vertices, 3));
            geo.setAttribute('color', new THREE.BufferAttribute(colors, 3));

            geo.setIndex([
            // sisi depan
            0,1,4,
            1,4,0,
            // sisi belakang
            2,3,4,
            3,2,4,
            // sisi kiri
            3,0,4,
            0,3,4,
            // sisi kanan
            1,2,4,
            2,4,1,
            // sisi bawah
            0,3,2,
            2,1,0
            ]);

            const material = new THREE.MeshBasicMaterial({vertexColors:THREE.VertexColors});
            let mesh = new THREE.Mesh(geo, material);
            scene.add(mesh);

            window.addEventListener('resize', function() {
            renderer.setSize(width, height);
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
            });

            function update() {
            //mesh.rotation.x += 0.01;
            mesh.rotation.y += 0.01;
            requestAnimationFrame(update);
            renderer.render(scene, camera);
            }
            update(); 
        </script>
    </section>

    <!-- footer section start -->
    @include('templates.partials.footer')

    <script src="js/script.js"></script>
</body>
</html>
<!-- partial -->
  @include('templates.partials.script')

</body>
</html>
