
@extends('layouts/master')
@section('content')

    <table class=" w-5/6 mx-auto bg-green-500 text-green-200 mb-6">
        <tr class="border-b border-gray-300">
            <th class="px-4 py-3 text-center text-black">Book List</th>
        </tr>
        <tr class="text-left border-b border-gray-300">
            <th class="px-4 py-3 text-black">Tittle</th>
            <th class="px-4 py-3 text-black">Author</th>
        </tr>

        @forelse ($books as $book)
            <tr class="bg-green-300 border-b border-gray-500">
                <td class="px-4 py-3 text-black"><a href="{{ route('detail',['details' => $book->details->book_id])}}">{{ $book->tittle }}</a></td>
                <td class="px-4 py-3 text-black">{{ $book->details->author }}</td>
            </tr> 
        @empty
        <tr class="bg-green-300 border-b border-gray-500">
            <td class="px-4 py-3 text-center text-black" colspan="2">Data tidak ada !</td>
        </tr> 
        @endforelse
    </table> 
@endsection