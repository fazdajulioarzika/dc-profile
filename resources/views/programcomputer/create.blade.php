@extends('layout.dashboard.main')
@section('content')
    <div class="min-h-screen">
        <div
            class="w-3/4 px-6 py-3 mt-20 ms-6 rounded-lg shadow-md bg-gradient-to-r from-blue-700 via-blue-400 to-indigo-400 down">
            <h1 class="text-3xl font-semibold text-white">
                Tambah Data Program Computer</h1>
        </div>


        <form class="w-3/5 px-6 py-3 mt-8 ms-6 toright bg-white rounded-xl shadow-md" method="post"
            action="/program/computer">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Nama Program
                    Computer</label>
                <input type="text" id="name"
                    class="bg-gray-50 border @error('name') border-red-500 @enderror
                text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500
                block w-full p-2.5"
                    value="{{ old('name') }}" name="name" placeholder="Masukan nama program computer">
                @error('name')
                    <div class="text-red-500 text-sm m-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="description"
                    class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="description"
                    class="bg-gray-50 border @error('description') border-red-500 @enderror
                           text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500
                           block w-full p-2.5"
                    value="{{ old('description') }}" name="description" placeholder="Masukan deskripsi program computer" rows="4"></textarea>
                @error('description')
                    <div class="text-red-500 text-sm m-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="icon" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Icon</label>
                <select name="icon" id="icon"
                    class="bg-gray-50 border text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500
                           block w-full p-2.5"
                    required>
                    <option value=""> -- Pilih Icon --
                    </option>
                    <option value="webprogramming"> Coding
                    </option>
                    <option value="globe"> Network</option>
                    <option value="pallet"> Design</option>
                    <option value="desktop"> Computer</option>
                    <option value="keyboard"> Keyboard</option>
                </select>
                @error('icon')
                    <div class="text-red-500 text-sm m-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit"
                class="text-white inline-block bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
        </form>

    </div>
@endsection
