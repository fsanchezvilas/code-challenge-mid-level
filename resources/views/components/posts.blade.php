<x-layout>
    <div class="post flex justify-center align-center">
        @if($posts)
        <div class="bg-blue-400 w-full flex-col mb-4 h-100 flex justify-center align-center p-4 rounded-2xl"">
            @foreach($posts as $post)
            <form class="mb-6" method="post" action="{{ route('post.destroy',$post->id) }}}">
                @csrf
                <div class="bg-white flex-col bg-blue-100 mb-2">
                    <input type="hidden" value="{{ $post->id }}">
                    <h2 class="text-center bg-blue-200 pb-2">{{ $post->title }}</h2>
                    <p class="h-10 pl-2">{{ $post->body }}</p>
                </div>
            <button class="bg-red-600 rounded p-2 text-white" type="submit">Delete</button>
            </form>
            @endforeach
        </div>
        @endif
        <div class="bg-blue-500 w-full h-100 flex justify-center align-center p-9 rounded-2xl">
            <form method="POST" action="/post" enctype="multipart/form-data">
                @csrf
                <div class="mb-6 flex justify-center ">
                    <label class="pr-2 block mb-2 text-xs font-bold text-gray-700 uppercase"
                        for="title">
                        {{ __('title') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        required>
                </div>
                <div class="w-full mb-6 flex justify-center ">
                    <label class="pr-2 block mb-2 text-xs font-bold text-gray-700 uppercase"
                        for="body">
                        {{ __('body') }}
                    </label>
                    <textarea class="w-full p-2 border border-gray-400 rounded"
                        type="text"
                        id="body"
                        name="body"
                        rows="7"
                        cols="50"
                        value="{{ old('body') }}"
                        required>
                    </textarea>
                </div>
                <div class="flex justify-center align-center">
                    <button class="p-4 bg-white " type="submit">Submit</button>
                </div>
               </form>
        </div>
    </div>
</x-layout>
<script>
 $(document).ready(function () {

$("body").on("click","#deletePost",function(e){
   e.preventDefault();
   var id = $(this).data("id");
   // var id = $(this).attr('data-id');
   var token = $("meta[name='csrf-token']").attr("content");
   var url = e.target;

   $.ajax(
       {
         url: url.href, //or you can use url: "company/"+id,
         type: 'DELETE',
         data: {
           _token: token,
               id: id
       }
    });
     return false;
  });
   

});
</script>