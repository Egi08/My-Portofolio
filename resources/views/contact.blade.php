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
@include('templates.partials.head')
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    @include('templates.partials.navbar')
    <!-- about -->
    <section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title"><span>Contact me</span></h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Message me</div>
                <form action="#">
                    <div class="field name">
                        <input type="text" placeholder="Name" pattern="[a-zA-Z ]+" title="Please enter only letters and spaces" required>
                    </div>
                    <div class="field email">
                        <input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit"><center>Send</center></button>
                    </div>
                </form>
            </div>
            <div class="column right">
                <div class="text">Get in Touch</div>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Muhammad Egi Perdianza</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Tanjung Batu Seberang, Indralaya</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">MuhammadEgiPerdianza128@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  

    

   
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

