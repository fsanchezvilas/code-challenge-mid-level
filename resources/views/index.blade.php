<x-layout>
    <div class="container">
        <div class="user-container flex justify-center align-center bg-blue-500 w-64 h-64 flex-col p-9 rounded-2xl">
            <h1 class="text-center text-2xl text-white">Login</h1>
             <div class="user-form mt-1.5">
                 <form method="POST" action="/login" enctype="multipart/form-data">
                     @csrf
                    <div class="mb-4">
                        <label class="text-white mb-2" for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="email">
                    </div>
                    <div class="mb-2">
                     <label class="text-white mb-2" for="password">Password</label>
                     <input type="password" name="password" placeholder="Password">
                    </div>
                     <button class="rounded mt-2 p-2 text-white bg-blue-400 border-blue-600" type="submit">Login</button>
                 </form>
             </div>
        </div>
    </div>
</x-layout>