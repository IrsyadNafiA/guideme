@extends('layouts.main')

@section('main')
<div class='flex items-center justify-center pt-16'>
    <div class='flex flex-col items-center justify-center text-center lg:max-w-6xl gap-5'>
        @if(session('status'))
<<<<<<< HEAD
        <div class="bg-green-100 text-green-600 w-full p-4 mt-7 rounded-lg">
=======
        <div class="bg-green-100 text-green-600 w-full z-50 mt-7 rounded-lg">
>>>>>>> origin/main
            {{ session('status') }}
        </div>
        @endif
        <h1 class="text-center mt-5 lg:text-4xl text-2xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">CONTACT US</h1>
        <p class="px-3">Let’s connect We’re here to help, and we’d love to hear from you! Wheter you have a question, a comment, or just want to chat, you can reach out to us through the contact form on this page, or by phone, email, or social media.</p>
        <div class="flex flex-col gap-3">
            <div class="flex lg:flex-row flex-col lg:justify-between justify-center items-center text-center gap-2">
                <a href="https://api.whatsapp.com/send/?phone=08994087170&text&type=phone_number&app_absent=0" class="w-56 py-3 bg-black text-white rounded-lg hover:bg-white hover:text-black hover:outline hover:outline-2 hover:outline-black">Via support chat</a>
                <a href="https://api.whatsapp.com/send/?phone=08994087170&text&type=phone_number&app_absent=0" class="w-56 py-3 bg-black text-white rounded-lg hover:bg-white hover:text-black hover:outline hover:outline-2 hover:outline-black">Via call</a>
            </div>
            <a href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=karisaklaudia2003@gmail.com" class="w-full py-3 bg-white text-black rounded-lg hover:bg-black hover:text-white hover:outline-none outline outline-2 outline-black">Via email form</a>
            <form action="{{url('store_contact')}}" method="post" class="flex flex-col gap-3">
                @csrf
<<<<<<< HEAD
                <div class="flex justify-between">
                    <div class="flex flex-col items-start">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" class="w-56 py-2 px-2 rounded-lg outline outline-2 outline-black" method="post" required>
                    </div>
                    <div class="flex flex-col items-start">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="email@emal.com" class="w-56 py-2 px-2 rounded-lg outline outline-2 outline-black" required>
=======
                <div class="lg:flex flex:col justify-between">
                    <div class="flex flex-col my-3 lg:my-0">
                        <label class="text-start" for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" class="w-full py-2 px-2 rounded-lg outline outline-2 outline-black" method="post">
                    </div>
                    <div class="flex flex-col items-start">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="email@emal.com" class="w-full py-2 px-2 rounded-lg outline outline-2 outline-black">
>>>>>>> origin/main
                    </div>
                </div>
                <div class="flex flex-col items-start">
                    <label for="description">Description</label>
                    <textarea class="w-full py-2 px-2 rounded-lg outline outline-2 outline-black" name="description" id="description" cols="30" rows="10" placeholder="Enter your text" required></textarea>
                </div>
                <button type="submit" class="w-32 py-3 bg-black text-white rounded-lg hover:bg-white hover:text-black hover:outline hover:outline-2 hover:outline-black m-auto">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection