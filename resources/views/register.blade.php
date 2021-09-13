<x-layout>
    <section class="mt-10">
        <div class="user-container flex justify-center align-center bg-blue-500 w-64 h-64 flex-col p-9 rounded-2xl">
            <h1 class="text-center text-2xl text-white">Create a user</h1>
            <div class="user-form mt-1.5">
                <form method="POST" action="/register" enctype="multipart/form-data">
                    @csrf
                    <label class="text-white mb-2" for="name">Username</label>
                    <input type="text" name="name" id="name" placeholder="name">

                    <label class="text-white mb-2" for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">

                    <label class="text-white mb-2" for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">

                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>