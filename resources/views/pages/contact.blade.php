@extends('layouts.main')

@section('main')
<div class='flex items-center justify-center pt-16'>
    <div class='flex flex-col items-center justify-center text-center max-w-6xl gap-5'>
        <h1 class="text-center mt-7 text-4xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">CONTACT US</h1>
        <p>Let’s connect We’re here to help, and we’d love to hear from you! Wheter you have a question, a comment, or just want to chat, you can reach out to us through the contact form on this page, or by phone, email, or social media.</p>
        <div class="w-[460px] flex flex-col gap-3">
            <div class="flex justify-between gap-2">
                <a href="#" class="w-56 py-3 bg-black text-white rounded-lg hover:bg-white hover:text-black hover:outline hover:outline-2 hover:outline-black">Via support chat</a>
                <a href="#" class="w-56 py-3 bg-black text-white rounded-lg hover:bg-white hover:text-black hover:outline hover:outline-2 hover:outline-black">Via call</a>
            </div>
            <a href="#" class="w-full py-3 bg-white text-black rounded-lg hover:bg-black hover:text-white hover:outline-none outline outline-2 outline-black">Via email form</a>
            <form action="#" class="flex flex-col gap-3">
                <div class="flex justify-between">
                    <div class="flex flex-col items-start">
                        <label for="nama">Name</label>
                        <input type="text" name="nama" id="nama" placeholder="Your Name" class="w-56 py-2 px-2 rounded-lg outline outline-2 outline-black">
                    </div>
                    <div class="flex flex-col items-start">
                        <label for="nama">Name</label>
                        <input type="text" name="nama" id="nama" placeholder="Your Name" class="w-56 py-2 px-2 rounded-lg outline outline-2 outline-black">
                    </div>
                </div>
                <div class="flex flex-col items-start">
                    <label for="deskripsi">Description</label>
                    <textarea class="w-full py-2 px-2 rounded-lg outline outline-2 outline-black" name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Enter your text"></textarea>
                </div>
                <button type="submit" class="w-32 py-3 bg-black text-white rounded-lg hover:bg-white hover:text-black hover:outline hover:outline-2 hover:outline-black m-auto">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection