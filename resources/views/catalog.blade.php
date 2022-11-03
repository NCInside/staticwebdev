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
            desc="(1:18 scale) VW Fender bike with Boxer R60 engine" modalId="mooneyes"/>

            <x-product-catalog imgsrc="/img/garuda.jpg" name="GARUDA"
            desc="(1:18 scale) tampil pada 'Mandalika Custom Show' November 2021" modalId="garuda" />

            <x-product-catalog imgsrc="/img/gareng.jpg" name="GARENG"
            desc="(1:18 scale) tampil pada 'Mandalika Custom Show' November 2021" modalId="gareng" />

            <x-product-catalog imgsrc="/img/yamaha.JPG" name="Yamaha XT500 Norev"
            desc="(1:18 scale) Black and Yellow Colorway" modalId="yamaha" />

            <x-product-catalog imgsrc="/img/speedy.jpg" name="Speedy Trinity"
            desc="(1:18 scale) Blue and Red American Stylez" modalId="speedy" />

            <x-product-catalog imgsrc="/img/norton.jpg" name="Norton Manx Solido"
            desc="(1:18 scale) Silver Colorway w/ live suspension" modalId="norton" />

        </div>  
    </div>
    
    <x-modal-review modalId="mooneyes" imgsrc="/img/mooneyes.jpg" prodName="Mooneyes Volspod with Boxer Engine">
        <x-chat-review name="Anthony Gondokusumo" reviews="Gila keren bang, stylenya estetik banget" time="4:20 pm" score=4.65 />
        <x-chat-review name="Bayu Tri" reviews="WOW" time="2:45 pm" score=4.95 />
        <x-chat-review name="gading K" reviews="Edyan" time="11:22 pm" score=3.95 />
    </x-modal-review>

    <x-modal-review modalId="yamaha" imgsrc="/img/yamaha.jpg" prodName="Yamaha XT500 Norev">
        <x-chat-review name="omarannas" reviews="Keren sekali ini mas" time="2:01 pm" score=4.95 />
        <x-chat-review name="garasi mini project" reviews="Aku selalu suka! T.O.P. S.E.L.A.L.U" time="8:45 pm" score=4.12 />
        <x-chat-review name="flameink_go" reviews="Jiga rangka asli euy" time="12:45 pm" score=4.28 />
    </x-modal-review>

    <x-modal-review modalId="speedy" imgsrc="/img/speedy.jpg" prodName="Speedy Trinity">
        <x-chat-review name="toropriant" reviews="Mewah Shocknya Om Que" time="5:29 pm" score=2.95 />
        <x-chat-review name="ta1ma2o" reviews="cool!" time="9:40 pm" score=4.55 />
        <x-chat-review name="oclinkbengal" reviews="Semua maenannya mencekam mas \m/" time="1:45 am" score=4.95 />
    </x-modal-review>

    <x-modal-review modalId="norton" imgsrc="/img/norton.jpg" prodName="Norton Manx Solido">
        <x-chat-review name="dwiprasetya" reviews="Ngeri perdetail an dunyawi!!!" time="1:15 pm" score=4.65 />
        <x-chat-review name="fvkri_warehouse" reviews="Mevvah" time="12:00 pm" score=3.95 />
        <x-chat-review name="wibiesimulya" reviews="lhaaaa iki" time="1:23 pm" score=4.56 />
    </x-modal-review>

    <x-modal-review modalId="garuda" imgsrc="/img/garuda.jpg" prodName="GARUDA">
        <x-chat-review name="Toropriant" reviews="Sedappp" time="5:20 pm" score=4.55 />
        <x-chat-review name="razorcombbicycles" reviews="like komen share subkrek give away motor kastem nih wkwk" time="3:15 pm" score=4.9 />
        <x-chat-review name="cak_cun" reviews="Setiker mau Boss" time="4:00 pm" score=4.15 />
    </x-modal-review>

    <x-modal-review modalId="gareng" imgsrc="/img/gareng.jpg" prodName="GARENG">
        <x-chat-review name="tommy_sunu" reviews="bengkele gawe penginn" time="5:25 pm" score=5 />
        <x-chat-review name="yofanhalim" reviews="Kereeeennn" time="8:12 pm" score=4.25 />
        <x-chat-review name="belo645" reviews="Kerrreeenn Mase" time="7:35 pm" score=3.95 />
    </x-modal-review>

@endsection