@extends('layouts.masyarakat')
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
  </style>
</head>
@section('title')

@endsection
@section('content')
<main class="h-full pb-16 overflow-y-auto bg-blue-200 dark:bg-gray-700">
  {{-- @foreach($liat as $li)
 <li>{{ $li->nik }}</li>
  @endforeach --}}
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-100">
      Silahkan ajukan pengaduan Anda!
    </h2>


    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }} </li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data">
      @csrf

      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block text-sm">
          
          <span class="text-gray-700 dark:text-gray-300">Laporan</span>
          <textarea
            class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-blue-200 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Isi laporan Anda" value="{{ old('description')}}" required
            name="description"></textarea>
        </label>

        <label for="image" class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-300">Foto</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-200 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="file" value="{{ old('image')}}" name="image" required/>
        </label>
        <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-400 border border-transparent rounded-lg active:bg-blue-400 hover:bg-blue-600 dark:hover:bg-gray-100 focus:outline-none focus:shadow-outline-red dark:bg-gray-700 hover:bg-gray-800">
          Laporkan
        </button>

      </div>
    </form>
</main>
@endsection