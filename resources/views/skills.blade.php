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
    @include('templates.partials.head')
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
   <nav class="navbar">
        <div class="max-width">
            <ul class="menu">
                <li><a href="/" class="menu-btn">Home</a></li>
                <li><a href="/about" class="menu-btn">About</a></li>
                <li><a href="/education" class="menu-btn">Education</a></li>
                <li><a href="/skills" class="menu-btn">Skills</a></li>
                <li><a href="/project" class="menu-btn">Project</a></li>
                <li><a href="/contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

  <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title"><span>My Skills</span></h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>60%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>40%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>35%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>40%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>45%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    </div>
                        <div class="column right">
                            <img src="https://i.ibb.co/Tr1MyQv/skills.png/skills.png">
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

