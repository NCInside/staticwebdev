@extends('layouts.maintemp')

@section('title', 'Home')

@section('content')
{{-- masthead --}}
<div class="bg-filled bg-no-repeat bg-bottom pt-32 pb-64" style="font-family: 'Poppins'; width: 100%;
height: auto;
min-height: 33rem;
padding: 15rem 0;
background: linear-gradient(to bottom, rgba(0, 0, 0, 0.097) 0%, rgba(0, 0, 0, 0.212) 75%, #000 100%), url('img/masthead.jpg');
background-position: center;
background-repeat: no-repeat;
background-attachment: scroll;
background-size: cover;">
    <div data-aos="zoom-in" data-aos-duration="1500">
        <h1 class="text-center text-5xl font-bold hidden md:block" style="font-family: 'Varela Round', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; font-size: 5rem; line-height: 5rem; letter-spacing: 0.1rem; background: linear-gradient(rgba(255, 168, 62, 0.988), rgb(255, 188, 107), rgb(255, 202, 88)); -webkit-text-fill-color: transparent; -webkit-background-clip: text; background-clip: text;">HOME TO <br><b>PRIMITIVE-GARAGE</b></h1>
        <h1 class="text-white text-center text-3xl font-bold md:hidden block" style="font-family: 'Varela Round', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; background: linear-gradient(rgba(255, 168, 62, 0.988), rgb(255, 188, 107), rgb(255, 202, 88)); -webkit-text-fill-color: transparent; -webkit-background-clip: text; background-clip: text;">HOME TO <br><b class="font-extrabold">PRIMITIVE-GARAGE</b></h1>
        <p class="text-gray-100 text-center mx-4 md:mt-12 mt-6">Purchase Premium Quality Miniatures Today</p>
    </div>
    <div class="hidden lg:flex justify-center shadow-2xl overflow-visible">
        <a href="#getstarted">
            <div data-aos-easing="ease-out-cubic" class="bg-orange-400 mt-20 border-2 border-opacity-50 border-orange-300 hover:bg-orange-300 text-gray-800 font-semibold px-4 rounded shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <p class="text-white m-4">Get Started</p>
            </div>
        </a>
    </div>
</div>
<div class="bg-black">

    <div class="bg-black w-full h-36 lg:h-72 overflow-visible hidden md:block" id="getstarted" ></div>
    
    <div data-aos="fade-up" class="content-middle md:-mt-24 relative overflow-hidden">
        <div class="max-w-2xl m-auto" style="font-family: 'Poppins'; background: linear-gradient(rgba(253, 253, 253, 0.988), rgb(255, 246, 235), rgb(255, 227, 168)); -webkit-text-fill-color: transparent; -webkit-background-clip: text; background-clip: text;">
            <h1 class="block md:hidden text-center text-3xl">Seek the Best</h1>
            <h1 class="hidden md:block text-center text-6xl mb-8">Seek the Best</h1>
            <p class="text-sm md:text-lg text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente numquam tenetur id nulla porro error doloremque similique quibusdam repudiandae modi.</p>
        </div>
        <div class=" ">
            <canvas id="motor" class="w-full"></canvas>
        </div>
        <div class="flex justify-center overflow-visible md:-mt-8" data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
            <a class="mb-10" href="/new">
                <div class="bg-orange-400 border-2 px-8 border-opacity-50 border-orange-300 opacity-90 hover:bg-orange-300 text-gray-800 font-semibold first:rounded shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <p class="text-white m-4">See What's New</p>
                </div>
            </a>
        </div>
    </div>

<div class="bg-gradient-to-b from-black via-neutral-900 to-black relative pt-12" style="background-color: #0e0e0e;
opacity: 1;
background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #0e0e0e 40px ), repeating-linear-gradient( #00000055, #000000 );">

    {{--ini cuman bisa kalo background terang--}}    
    <div data-aos="fade-in" class="hidden lg:block absolute top-24 lg:left-72 w-96 h-72 bg-yellow-100 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-28 lg:left-48 w-96 h-72 bg-orange-100 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-32 lg:left-96 w-96 h-52 bg-orange-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000" ></div>

    <div data-aos="fade-in" class="hidden lg:block absolute top-[31rem] right-72 w-[36rem] h-72 bg-yellow-100 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-[32rem] right-[11rem] w-96 h-96 bg-orange-100 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-[40rem] right-[41rem] w-72 h-52 bg-orange-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>

    <div data-aos="fade-in" class="hidden lg:block absolute top-[63rem] right-96 w-[39rem] h-72 bg-yellow-100 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-[64rem] right-[14rem] w-96 h-96 bg-orange-100 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-[72rem] left-[15rem] w-72 h-52 bg-orange-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>

    <div data-aos="fade-in" class="hidden lg:block absolute top-[60rem] right-[20rem] w-[39rem] h-72 bg-orange-100 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-[63rem] right-[15rem] w-96 h-96 bg-yellow-100 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-[74rem] left-[27rem] w-[30rem] h-52 bg-orange-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>


    {{-- What and Why --}}
    <div class="flex flex-col">
        <div class="self-start mx-3 lg:mx-0">
            <div data-aos="fade-up" class="lg:ml-48 flex flex-col-reverse items-center bg-gradient-to-b from-neutral-900 via-neutral-800 to-neutral-900 rounded-lg shadow-md md:flex-row md:max-w-3xl overflow-hidden ">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 md:mb-6 text-2xl font-bold tracking-wider text-white dark:text-white underline decoration-orange-400">What is Primitive Garage?</h5>
                    <p class="mb-3 font-normal text-white leading-loose">
                        Primitive Garage adalah tempat untuk menemukan berbagai macam miniatur sepeda motor buatan tangan dan spesial yang dibuat secara in-house.
                        Sejak tahun 2014, miniatur-miniatur Primitive Garage telah memupuk komunitas kuat yang terus mendukungnya hingga hari ini.
                    </p>
                </div>
                <img class="object-cover w-full h-full rounded-t-lg md:h-auto md:w-64 terpaksa md:rounded-none overflow-hidden md:border-l-2 border-orange-400" src="img/why.jpg" alt="">      
            </div>
        </div>
        
        <div class="self-end mx-3 lg:mx-0">
            <div data-aos="fade-up" class="lg:mr-48 mt-12 flex flex-col items-center bg-gradient-to-b from-neutral-900 via-neutral-800 to-neutral-900 rounded-lg shadow-md md:flex-row md:max-w-3xl overflow-hidden">
                <img class="terpaksa object-cover w-full h-full rounded-t-lg md:h-auto md:w-52 md:rounded-none md:rounded-l-lg md:border-r-2 border-orange-400" src="img/what.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 md:mb-6 text-2xl font-bold tracking-wider text-white underline decoration-orange-400">Why Choose Primitive Garage?</h5>
                    <p class="mb-3 font-normal text-white leading-loose">
                        Dilengkapi dengan pengetahuan dan peralatan yang diperoleh selama 8 tahun terakhir, Primitive Garage telah membuat banyak miniatur unik berdasarkan non-fiksi dan fiksi. Setelah bekerja di Sirkuit Internasional Mandalika sebagai pekerja seni resmi, Garasi Primitif menampilkan tingkat profesionalisme dan keterampilan yang tak tertandingi.
                    </p>
                </div>
            </div>
        </div>

        <section data-aos="fade-up" class="font-sans antialiased text-white leading-normal tracking-wider md:mt-32 md:mb-16">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto mt-24 mb-16 lg:my-0">
                <div id="profile" class="relative w-full lg:w-2/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-gradient-to-b from-neutral-900 via-neutral-900 to-neutral-900 mx-6 lg:mx-0">
                    <div class="p-4 md:p-12 text-center lg:text-left">
                        <!-- Image for mobile view-->
                        <div class="block md:hidden rounded-full ring-2 ring-orange-400 lg:rounded-xl shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('img/who.jpg')"></div>
                        <div class="hidden md:block rounded-full ring-2 ring-orange-400 lg:rounded-xl shadow-xl mx-auto -mt-24 h-72 w-72 bg-cover bg-center" style="background-image: url('img/who.jpg')"></div>
                        <h1 class="text-3xl font-bold pt-8 lg:pt-0">Who is Primitive Garage?</h1>
                        <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-orange-400"></div>
                        <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-orange-400 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg> Professional Craftsman</p>
                        <p class="pt-2 text-gray-100 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-orange-400 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"/></svg> 
                            Located in Banyuwangi
                        </p>
                        <p class="pt-8 text-sm">
                            Totally optional short description about yourself, what you do and so on.
                        </p>         
                    </div>
                </div>            
            </div>
        </section>
    </div>        
</div>

<script type="module">

    let model;

    const canvas = document.querySelector('#motor');
    const renderer = new THREE.WebGLRenderer({canvas, alpha: true});
    renderer.setPixelRatio(window.devicePixelRatio)
    //renderer.setSize( window.innerWidth, window.innerHeight );

    const fov = 95;
    const aspect = 0;  // the canvas default
    const near = 0.01;
    const far = 5;
    const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);

    camera.position.z = 1;
    camera.position.y = 1;
    camera.position.x = 1;

    const control = new OrbitControls(camera, renderer.domElement);
    control.enablePan = false;
    control.enableZoom = false;
    control.maxPolarAngle = Math.PI / 2;
    control.minPolarAngle = Math.PI / 2;
    control.minDistance = 1.85;
    control.enableDamping = true;

    const scene = new THREE.Scene();

    // const boxWidth = 1;
    // const boxHeight = 1;
    // const boxDepth = 1;
    // const geometry = new THREE.BoxGeometry(boxWidth, boxHeight, boxDepth);
    // const texture = new THREE.TextureLoader().load( '/img/what.jpg' );
    // const material = new THREE.MeshBasicMaterial({map: texture});
    // const cube = new THREE.Mesh(geometry, material);

    renderer.render(scene, camera);

    const loader = new GLTFLoader();

    loader.load( '/3d/motor.glb', function ( gltf ) {

        console.log(gltf);
        model = gltf.scene;

        model.scale.set(0.03, 0.03, 0.03);
        model.position.y = -0.5;
        model.rotation.x = 4.75;
        model.rotation.z = 1.5;

        scene.add( model );

    }, undefined, function ( error ) {

        console.error( error );

    } );

    /* const axesHelper = new THREE.AxesHelper( 5 );
    scene.add( axesHelper ); */

    var color1 = 0xe6e6fa;
    var color2 = 0xFFFFFF;
    var color3 = 0x34fabd;
    var color4 = 0xdb23a2;
    const intensity1 = 1;
    const intensity2 = 0.75;
    const intensity3 = 1.75;
    const light1 = new THREE.DirectionalLight(color1, intensity3);
    const light2 = new THREE.DirectionalLight(color2, intensity2);
    const light3 = new THREE.DirectionalLight(color2, intensity2);
    const light4 = new THREE.DirectionalLight(color3, intensity2);
    const light5 = new THREE.DirectionalLight(color4, intensity3);
    light1.position.set(-1, -2, 4);
    light3.position.set(1, -2, -4);
    light2.position.set(1, -2, 4);
    light4.position.set(-1, -2, 4);
    light5.position.set(1, 3, -4);
    scene.add(light1);
    scene.add(light2);
    scene.add(light3);
    scene.add(light4);
    scene.add(light5);

    //interval every 5 seconds
    setInterval(function() {var randomColor1 = Math.floor(Math.random()*16777215).toString(16);
        var randomColor2 = Math.floor(Math.random()*16777215).toString(16);
        var randomColor3 = Math.floor(Math.random()*16777215).toString(16);
        var randomColor4 = Math.floor(Math.random()*16777215).toString(16);

        color1 = "0x" + randomColor1;
        color2 = "0x" + randomColor2;
        color3 = "0x" + randomColor3;
        color4 = "0x" + randomColor4;

        light1.color.setHex(color1);
        light2.color.setHex(color2);
        light3.color.setHex(color2);
        light4.color.setHex(color3);
        light5.color.setHex(color4);
        console.log("test");}, 5000);

    function render(time) {
    time *= 0.0004;  // convert time to seconds
    
    // cube.rotation.x = time;
    // cube.rotation.y = time;

    if (model !== undefined) {
        model.rotation.z = time;
    }
    
    control.update();

    if (resizeRendererToDisplaySize(renderer)) {
        const canvas = renderer.domElement;
        camera.aspect = canvas.clientWidth / canvas.clientHeight;
        camera.updateProjectionMatrix();
    }
    
    renderer.render(scene, camera);
    
    requestAnimationFrame(render);
    }

    function resizeRendererToDisplaySize(renderer) {
        const canvas = renderer.domElement;
        const width = canvas.clientWidth;
        const height = canvas.clientHeight;
        const needResize = canvas.width !== width || canvas.height !== height;
        if (needResize) {
            renderer.setSize(width, height, false);
        }
        return needResize;
    }

    render();
</script>


@endsection