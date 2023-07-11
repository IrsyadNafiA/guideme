@extends('layouts.admin')

@section('main')

<div class="flex gap-16 justify-start mx-7 my-7">
    <a href="/add_category" class="flex items-center justify-center w-48 h-16 rounded-2xl shadow-md bg-white border relative">
        <p>Category</p>
    </a>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 font-black">
                    No
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Images
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Category
                </th>
                <th scope="col" class="px-6 py-3 font-black">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    Gambar Kuliner
                </td>
                <td class="px-6 py-4">
                    Kuliner
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="ml-4 font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection