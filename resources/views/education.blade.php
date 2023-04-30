<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Muhammad Egi Perdianza</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!DOCTYPE html>
<html lang="en">    @include('templates.partials.head')

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
   @include('templates.partials.navbar')

<section class="education" id="education">
        <div class="max-width">
            <h2 class="title">My <span>educat</span>ion</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="col-md-4">
                        <img src="https://i.ibb.co/9YwGvpj/logo-SD-removebg-preview.png" alt="SMP" border="0" width="180" height="180">
                    </div>
                    <div class="box">
                        <div class="text">SDN 21 Tanjung Batu</div>
                        <p>2008-2014</p>
                    </div>
                </div>
                <div class="card">
                    <div class="col-md-3">
                        <img src="https://i.ibb.co/Ssh4pdP/logo5.png" alt="SMP" border="0" width="180" height="180">
                    </div>
                    <div class="box">
                        <div class="text">SMPN 1 Tanjung Batu</div>
                        <p>2014-2017</p>
                    </div>
                </div>
                <div class="card">
                    <div class="col-md-4">
                        <img src="https://i.ibb.co/pwGN3tQ/download-3-removebg-preview.png " alt="SMP" border="0" height="180" width="180">
                    </div>
                    <div class="box">
                        <div class="text">SMKN 1 Indralaya Selatan</div>
                        <p>2017-2020</p>
                    </div>
                </div>
                <div class="card">
                    <div class="col-md-4">
                        <img src="https://i.ibb.co/k3nf905/download-1-removebg-preview.png" alt="SMP" border="0" height="180" width="180">
                    </div>
                    <div class="box">
                        <div class="text">Unversitas Sriwijaya</div>
                        <p>2020-sekarang</p>
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

