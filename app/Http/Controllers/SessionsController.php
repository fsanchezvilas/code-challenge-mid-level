<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class SessionsController extends Controller
{
// public function store(Request $request){
    
//     // $credentials = request()->validate([
//     //     'email' => ['required', 'email'],
//     //     'password' => ['required'],
//     // ]);
//     $2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
//     $credentials = array('email'=>'nagaxsh@gmail.com','password'=>'asdasdasd');
//    dd(Auth::attempt($credentials));
//     if (Auth::attempt($credentials)) {
//         $posts = Post::where('user_id','=',$this->email)->all();
//         dd($posts);
//         return view('components.posts',[ $posts ]);
//     }else{
//         abort(403);
//     }
// }
public function store(){

    $attributes = request()->validate([
        'email' => 'required|exists:users,email',
        'password' => 'required'
    ]);

    if(Auth::attempt($attributes)){
        session()->regenerate();
        return redirect('posts')
        ->with('success','Welcome back');
    }else{
        abort(403);
    }

}


    public function destroy($id)
    {
        Auth::logout();
        return redirect('/');
    }
}
