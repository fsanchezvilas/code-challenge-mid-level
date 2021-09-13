<x-layout>
    <div class="container">
        <div class="user-container flex justify-center align-center bg-blue-500 w-64 h-64 flex-col p-9 rounded-2xl">
            <h1 class="text-center text-2xl text-white">Login</h1>
             <div class="user-form mt-1.5">
                 <form method="GET" action="/login" enctype="multipart/form-data">
                     @csrf
                     <label class="text-white mb-2" for="name">Username</label>
                     <input type="text" name="name" id="name" placeholder="name">
    
                     <label class="text-white mb-2" for="password">Password</label>
                     <input type="password" name="password" placeholder="Password">
    
                     <button type="submit">Login</button>
                 </form>
             </div>
        </div>
    </div>
</x-layout>