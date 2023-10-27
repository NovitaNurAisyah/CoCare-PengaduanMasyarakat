<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CoCare | Complaint Care</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('img/care.png')}}">
  <style>
    html {
      scroll-behavior: smooth;
    }
    body
      /* {
        margin: 0;
        padding : 0 ;
      }
      section
      {
        width: 100%;
        min-height: 100px;
      }
      .wave
      {
        position: relative;
        background: #fda73f;
      }
      .wave::before
      {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 150px;
        background: url('img/wave.png');
        background-size: cover;
        background-repeat: no-repeat;
      } */
      {
          margin: 0;
          padding: 0;
      }
      section
      {
          position: relative;
          width: 100%;
          height: 100vh;
          background:#93C5FD;
          overflow: hidden;
      }
      section .wave
      {
          position: absolute;
          bottom: 0%;
          left: 0%;
          width: 100%;
          height: 100px;
          background: url('img/wave.png');
          background-size: 1000px 100px;
      }
      section .wave.wave1
      {
          animation: animate 30s linear infinite;
          z-index: 1000;
          opacity: 1;
          animation-delay: 0s;
          bottom: 0;
      }
      section .wave.wave2
      {
          animation: animate2 15s linear infinite;
          z-index: 999;
          opacity: 0.5;
          animation-delay: -5s;
          bottom: 5px;
      }
      section .wave.wave3
      {
          animation: animate 30s linear infinite;
          z-index: 998;
          opacity: 0.2;
          animation-delay: -2s;
          bottom: 10;
      }
      section .wave.wave4
      {
          animation: animate2 15s linear infinite;
          z-index: 997;
          opacity: 0.7;
          animation-delay: -5s;
          bottom: 15px;
      }
      @keyframes animate
      {
          0%
          {
              background-position-x: 0;
          }
          100%
          {
              background-position-x: 1000px;
          }
      }
      @keyframes animate2
      {
          0%
          {
              background-position-x: 0;
          }
          100%
          {
              background-position-x: -1000px;
          }
      }
      @keyframes animate3
      {
          0%
          {
              background-position-x: 0;
          }
          100%
          {
              background-position-x: -1000px;
          }
      }
  </style>
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Montserrat', sans-serif">
  <section class="wave">
  <nav class="flex items-center justify-between p-5 px-20">
    <div class="flex items-center flex-shrink-0 text-white mr-6 logo-with-text" display="outline-block; ">
      <img src="{{ asset('img/care.png')}}" height="300" width="300" alt=""
        class="transform transition hover:scale-110 duration-80 ease-in-out"/>
      <span class="font-bold tracking-wider" style="font-size:1cm">CoCare</span>
    </div>
    <div class="block lg:hidden">
      <button
        class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-right">
      <div class="text-md lg:flex-grow">
        <a href="/" class="text-white font-normal rounded-md py-3 border-black px-4 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" style="font-size:20px">
          Home
        </a>
        <a href="#how" class="text-white font-normal rounded-md py-3 border-black px-4 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" style="font-size:20px">
          Tata Cara
        </a>
      </div>
      <div>
        <button
          class="text-white font-normal rounded-md py-3 border-black px-4 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" style="font-size:20px">
          <a href="{{ url('login')}}">Masuk</a>
        </button>
        {{-- <button
          class="text-white font-medium rounded-md py-3 px-4 border-2 border-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('register')}}">Daftar</a>
        </button> --}}
        <button
          class="mx-auto lg:mx-0 bg-white text-blue-400 font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" style="font-size:20px">
          <a href="{{ url('register')}}">Daftar</a>
        </button>
      </div>
    </div>
  </nav>

  <!-- Header -->

  <!--Hero-->
  <div class="pt-18 px-13 " style="top: -100px">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-white" style="margin-top: -200px">
        <h1 class="my-4 text-4xl font-bold leading-tight">
          "Satu Langkah Menuju Perubahan Positif"
        </h1>
        <p class="leading-normal text-1xl mb-8">
          Tekankan bahwa setiap pengaduan yang dilaporkan adalah langkah menuju perubahan positif yang diinginkan.
        </p>
        <button
          class="mx-auto lg:mx-0 bg-white text-blue-400 font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out relative">
          <a href="{{ url('login')}}">Laporkan!</a>
        </button>
      </div>
      <div class="w-full md:w-3/5 text-center">
        <img class="object-fill mx-auto md:mx-0 transform transition hover:scale-80 duration-110 ease-in-out ml-100"
          src="{{ asset('img/1.png')}}" style="margin-left: 100px;"/>
      </div>
      
    </div>
  </div>
  <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>
  </section>

  <!-- How -->
  <div id="how" class="container my-20 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-black border-2  focus:outline-none focus:shadow-outline" style="background: #87CEEB">
          <img alt="Tulis"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/tulis.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center ">
            <h1 class="text-lg font-bold">1. Tulis Laporan</h1>
            <p class="text-grey-darker text-sm py-4">
              Tulis laporan keluhan Anda dengan jelas.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-black border-2  focus:outline-none focus:shadow-outline" style="background:#87CEEB">
          <img alt="Proses"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/processing.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">2. Proses Verifikasi</h1>
            <p class="text-grey-darker text-sm py-4">
              Tunggu sampai laporan Anda di verifikasi.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-black border-2 focus:outline-none focus:shadow-outline" style="background: #87CEEB">
          <img alt="Ditindak"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/act.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">3. Tindak Lanjut</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan Anda sedang dalam tindak lanjut.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-black border-2 focus:outline-none focus:shadow-outline" style="background: #87CEEB">
          <img alt="Selesai"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/verification.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">4. Selesai</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan pengaduan telah selesai ditindak.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
    </div>
  </div>
  <!-- Footer -->
  <footer class="text-center font-medium  py-5">
    © {{ now()->year }} CoCare | By
    <a href="" class="text-gray" target="_blank">Complaint Care</a>
  </footer>
  @include('sweetalert::alert')
</body>

</html>