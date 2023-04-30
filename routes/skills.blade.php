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
    <nav class="navbar">
        <div class="max-width">
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#education" class="menu-btn">Education</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#project" class="menu-btn">Project</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text"><span class="typing">Muhammad Egi Perdianza</span></div>
            </div>
            <div class="images">
                <img src="https://i.ibb.co/LCWjz0y/v1075-040-removebg-preview.png" class="shapetyas">
                <img src="https://i.ibb.co/0m46KDH/PBO-DONE-2-removebg-preview-1.png" class="foto">
            </div>
        </div>
    </section>

    <!-- about -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <canvas id="myCanvas"></canvas>
                </div>
                <div class="column right">
                    <p>egi, itulah nama panggilan aku. aku adalah Mahasiswi Universitas Sriwijaya Semester 4 Sistem Informasi. aku lahir di Tanjung Batu Seberang pada tanggal 08 April 2002. aku tinggal di Desa Tanjung Batu Seberang Kecamatan Tanjung Batu Kabupaten Ogan Ilir. Dunia IT adalah lingkunganku saat ini.  yang paling aku suka. rebahan hobiku, selain rebahan bermain game dan olahraga itulah hobiku.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- education -->
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

    <!-- skills -->
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
  
    <!-- contact -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title"><span>Contact me</span></h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="field name">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" required>
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
    <footer>
        <span>Portofolio Muhammad Egi Perdianza <a href="https://www.codingnepalweb.com"></a> | 2023</span>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js'></script><script  src="./script.js"></script>

</body>
</html>
