@extends('layouts.maintemp')

@section('title', 'Catalog')

@section('content')

    {{-- masthead --}}
    <div class="bg-filled bg-no-repeat bg-bottom pt-32 pb-64 relative" style="height: auto;
    min-height: 34rem;
    padding: 15rem 0;
    background: linear-gradient(to bottom, rgba(56, 56, 56, 0.035) 0%, rgba(0, 0, 0, 0.7) 75%, rgba(0, 0, 0, 0.763) 100%), url('img/catalogmasthead.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;">
        <h1 class="text-white text-4xl font-bold pl-4 underline decoration-orange-600 absolute bottom-0 left-0 h-24">Past Miniatures</h1>
    </div>

    <div class="bg-gradient-to-b from-black via-neutral-900 to-black relative p-4 md:pt-12" style="background-color: #0e0e0e;
    opacity: 1;
    background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #0e0e0e 40px ), repeating-linear-gradient( #00000055, #000000 );">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-8 content-center md:ml-8 md:pt-12">
            
            <x-product-catalog imgsrc="/img/mooneyes.jpg" name="Mooneyes Volkspod with Boxer Engine"
            desc="Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order." modalId="defaultModal" />

            <x-product-catalog imgsrc="/img/yamaha.JPG" name="Yamaha XT500 Norev"
            desc="Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order." modalId="defaultModal" />

            <x-product-catalog imgsrc="/img/speedy.jpg" name="Speedy Trinity"
            desc="Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order." modalId="defaultModal" />

            <x-product-catalog imgsrc="/img/norton.jpg" name="Norton Manx Solido"
            desc="Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order." modalId="defaultModal" />

            <x-product-catalog imgsrc="/img/garuda.jpg" name="GARUDA"
            desc="Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order." modalId="defaultModal" />

            <x-product-catalog imgsrc="/img/gareng.jpg" name="GARENG"
            desc="Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order." modalId="defaultModal" />

        </div>  
    </div>
    
    <x-modal-review modalId="defaultModal" imgsrc="/img/mooneyes.jpg" prodName="Noteworthy technology acquisitions 2021">
        <x-chat-review name="Tom Cruise" reviews="Hi all! I have one question for the movie" time="12:45 pm" score=4.95 />
        <x-chat-review name="Tom Cruise" reviews="Hi all! I have one question for the movie" time="12:45 pm" score=4.95 />
        <x-chat-review name="Tom Cruise" reviews="Hi all! I have one question for the movie" time="12:45 pm" score=4.95 />
    </x-modal-review>

    {{-- <script type="module">

        let model;

        const canvas = document.querySelector('#motor');
        const renderer = new THREE.WebGLRenderer({canvas, alpha: true});
        renderer.setPixelRatio(window.devicePixelRatio)
        //renderer.setSize( window.innerWidth, window.innerHeight );

        const fov = 95;
        const aspect = 2.5;  // the canvas default
        const near = 0.01;
        const far = 5;
        const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);

        camera.position.z = 2;
        camera.position.y = 1;

        const control = new OrbitControls(camera, renderer.domElement);
        control.enablePan = false;
        control.maxPolarAngle = Math.PI / 2;
        control.minPolarAngle = Math.PI / 2;
        control.maxDistance = 1.85;
        control.minDistance = 1.75;
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

        // const axesHelper = new THREE.AxesHelper( 5 );
        // scene.add( axesHelper );

        const color1 = 0xDF9B20;
        const color2 = 0xf05252;
        const intensity1 = 1;
        const intensity2 = 0.75;
        const intensity3 = 1.75;
        const light1 = new THREE.DirectionalLight(color1, intensity3);
        const light2 = new THREE.DirectionalLight(color2, intensity1);
        const light3 = new THREE.DirectionalLight(color2, intensity3);
        light1.position.set(-1, 2, 4);
        light3.position.set(1, -2, -4);
        light2.position.set(1, -2, 4);
        scene.add(light1);
        scene.add(light2);
        scene.add(light3);

        function render(time) {
        time *= 0.001;  // convert time to seconds
        
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
    </script> --}}
  
@endsection