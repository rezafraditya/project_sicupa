@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16">
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

    <!-- strat Analytics -->
    <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">
      <!-- update section -->
      <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
        <div class="card-body flex flex-row">
          <!-- image -->
          <div
            class="img-wrapper w-40 h-40 flex justify-center items-center"
          >
            <img src="./img/happy.svg" alt="img title" />
          </div>
          <!-- end image -->

          <!-- info -->
          <div class="py-2 ml-10">
            <h1 class="h6">Hi, {{Auth::user()->name}}!</h1>
            <p class="text-white text-xs">
              Welcome to SICUPA
            </p>
          </div>
          <!-- end info -->
        </div>
      </div>
      <!-- end update section -->

      </div>
      <!-- end charts -->
    </div>
    <!-- end Analytics -->
    <div class="card">
        <div class="card-header">Shoes Treatment</div>

        <!-- brawser -->
        <div
          class="p-6 flex flex-row justify-between items-center text-gray-600 border-b"
        >
          <div class="flex items-center">
            <h1>Fast Cleaning</h1>
          </div>
          <div><h1>25K</h1></div>
        </div>

        <div
          class="p-6 flex flex-row justify-between items-center text-gray-600 border-b"
        >
          <div class="flex items-center">
            <h1>Fast Premium Cleaning</h1>
          </div>
          <div><h1>35K</h1></div>
        </div>

        <div
        class="p-6 flex flex-row justify-between items-center text-gray-600 border-b"
      >
        <div class="flex items-center">
          <h1>Deep Cleaning</h1>
        </div>
        <div><h1>40K</h1></div>
      </div>

      <div
      class="p-6 flex flex-row justify-between items-center text-gray-600 border-b"
    >
      <div class="flex items-center">
        <h1>Deep Cleaning</h1>
      </div>
      <div><h1>60K</h1></div>
    </div>

        <div
          class="p-6 flex flex-row justify-between items-center text-gray-600 border-b"
        >
          <div class="flex items-center">
            <h1>Unyellowing</h1>
          </div>
          <div><h1>30K-50K</h1></div>
        </div>

        <div
          class="p-6 flex flex-row justify-between items-center text-gray-600 border-b"
        >
          <div class="flex items-center">
            <h1>Whitening</h1>
          </div>
          <div><h1>70K</h1></div>
        </div>

        <div
        class="p-6 flex flex-row justify-between items-center text-gray-600 border-b"
      >
        <div class="flex items-center">
          <h1>Repaint</h1>
        </div>
        <div><h1>50K-200K</h1></div>
      </div>

      <div
      class="p-6 flex flex-row justify-between items-center text-gray-600 border-b"
    >
      <div class="flex items-center">
        <h1>Waterproofing</h1>
      </div>
      <div><h1>175K</h1></div>
    </div>

      </div>
  </div>
@endsection
