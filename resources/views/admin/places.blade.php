@extends('layouts.admin')

@section('main')

<div class="flex gap-16 justify-start mx-7 my-7">
    <a href="/add_category" class="flex items-center justify-center w-48 h-16 rounded-2xl shadow-md bg-white border relative">
        <p>Places</p>
    </a>
</div>

<!-- Modal toggle -->
<div class="flex justify-end mr-3">
    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="inline-flex text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-3 py-2.5 text-center items-center mr-2 mb-2" type=" button">
        <svg class="w-5 mr-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <title></title>
                <g id="Complete">
                    <g data-name="add" id="add-2">
                        <g>
                            <line fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="12" x2="12" y1="19" y2="5"></line>
                            <line fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" x1="5" x2="19" y1="12" y2="12"></line>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
        Add Places
    </button>
</div>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-black text-gray-900">
                    Add New Places
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{route('admin/add_places')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="mb-4 px-4 my-2">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Place">
            </div>
            <div class="mb-4 px-4 my-2">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="map" name="map" type="text" placeholder="Map Location">
            </div>
            <div class="mb-4 px-4 my-2">
                <textarea id="desc" name="desc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Description Place" cols="30" rows="10"></textarea>
            </div>
           
            <div class="mb-4 px-4 my-2">
                <select id="countries" name="coba" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                    <option selected disabled>Category</option>
                    @foreach ($cat as $item)
                        <option value="{{ $item->id_category }}">{{ $item->category }}</option>
                        @endforeach
                </select>
                
            </div>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" name="image" required />
                </label>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="w-20 justify-center inline-flex text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-3 py-2.5 text-center items-center mr-2 mb-2" type=" button">
                    Add
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
@foreach ($placem as $editdata)
    
{{-- modal edit --}}
<div id="editModal-{{$editdata->id_places}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-black text-gray-900">
                    Add New Places
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="editModal-{{$editdata->id_places}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{route('admin/add_places')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="mb-4 px-4 my-2">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Place">
            </div>
            <div class="mb-4 px-4 my-2">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="map" name="map" type="text" placeholder="Map Location">
            </div>
            <div class="mb-4 px-4 my-2">
                <textarea id="desc" name="desc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Description Place" cols="30" rows="10"></textarea>
            </div>
           
            <div class="mb-4 px-4 my-2">
                <select id="countries" name="coba" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                    <option selected disabled>Category</option>
                    @foreach ($cat as $item)
                        <option value="{{ $item->id_category }}">{{ $item->category }}</option>
                        @endforeach
                </select>
                
            </div>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" name="image" required />
                </label>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button data-modal-target="editModal" data-modal-toggle="editModal-{{$editdata->id_places}}" class="w-20 justify-center inline-flex text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-3 py-2.5 text-center items-center mr-2 mb-2"
                 type="submit">
                    Add
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
{{-- end modal edit --}}
{{-- modal delete --}}
<div id="deleteModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-black text-gray-900">
                    Add New Places
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <div class="mb-4 px-4 my-2">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Place">
            </div>
            <div class="mb-4 px-4 my-2">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="map" name="map" type="text" placeholder="Map Location">
            </div>
            <div class="mb-4 px-4 my-2">
                <textarea id="desc" name="desc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Description Place" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-4 px-4 my-2">
                <p class="mb-1">Rekomendasi Kendaraan</p>
                <div class="flex gap-2 p-2 rounded border-[1px] w-fit border-black">
                    <div class="flex items-center">
                        <input id="motor" type="checkbox" name="rekomendasi_kendaraan" value="motor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <label for="motor" class="ml-2 text-sm font-medium text-gray-900">Motor</label>
                    </div>
                    <div class="flex items-center">
                        <input id="mobil" type="checkbox" name="rekomendasi_kendaraan" value="mobil" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <label for="mobil" class="ml-2 text-sm font-medium text-gray-900">Mobil</label>
                    </div>
                    <div class="flex items-center">
                        <input id="bus" type="checkbox" name="rekomendasi_kendaraan" value="bus" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <label for="bus" class="ml-2 text-sm font-medium text-gray-900">Bus</label>
                    </div>
                </div>
            </div>
            <div class="mb-4 px-4 my-2">
                <select id="countries" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option selected disabled>Category</option>
                    <option value="kuliner">Kuliner</option>
                    <option value="pantai">Pantai</option>
                    <option value="mall">Mall</option>
                </select>
            </div>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="w-20 justify-center inline-flex text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-3 py-2.5 text-center items-center mr-2 mb-2" type=" button">
                    Add
                </button>
                <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="w-20 justify-center inline-flex text-black bg-slate-200 border hover:bg-slate-300 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-3 py-2.5 text-center items-center mr-2 mb-2" type=" button">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- end modal delete --}}


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 table-fixed">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3 font-black w-4">
                    No
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Images
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Maps
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Description
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Action
                </th>
            </tr>
        </thead>
        @php
            $a=1;
        @endphp
        <tbody>
            @if ($placem->count() > 0)
            @foreach ($placem as $item)
                            
            <tr class="bg-white border-b">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $a++ }}
                </td>
                <td class="px-6 py-4">
                    {{$item->image}}
                </td>
                <td class="px-6 py-4">
                    {{$item->title}}
                </td>
                <td class="px-6 py-4">
                    {{$item->maps}}
                </td>
                <td class="px-6 py-4 truncate">
                    {{$item->description}}
                </td>
                <td class="px-6 py-4">
                    {{$item->category->category}}
                </td>
                <td class="px-6 py-4">
                    <a href="#" data-modal-target="editModal" data-modal-toggle="editModal-{{$item->id_places}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                    <a href="#" data-modal-target="deleteModal" data-modal-toggle="deleteModal-{{$item->id_places}}" class="ml-4 font-medium text-red-600 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="4" style="text-align: center;"><small>No Data Found</small></td>
                </tr>  
            @endif
        </tbody>
    </table>
</div>


@endsection