@extends('layouts/master')
@section('content')
<p class="text-3xl text-center font-bold mt-5">Buku : {{ $book->tittle }}</p>
    <div class=" p-10">
      {{-- @forelse ($books as $detail) --}}
        <div class="mb-auto mt-auto ">
        <p class="font-semibold mt-5 mb-5 text-xl text-justify">Tittle       : {{ $book->tittle }}</p>
        <p class="font-semibold mt-5 mb-5 text-xl text-justify">Author       : {{ $book->details->author }}</p>
        <p class="font-semibold mt-5 mb-5 text-xl text-justify">Publisher    : {{ $book->details->publisher }}</p>
        <p class="font-semibold mt-5 mb-5 text-xl text-justify">Year         : {{ $book->details->book_year }}</p>
        <p class="font-semibold mt-5 mb-5 text-xl text-justify">Description  : {{ $book->details->description }}</p>
      </div>
    </div>

@endsection

