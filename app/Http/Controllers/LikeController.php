<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function plus()
    {
        $like = Like::find(1);

        // Menambah nilai like_count
        $like->plus();

        // Simpan perubahan
        $like->save();

        return redirect('/');
    }

    public function like()
    {
        $like = Like::firstOrCreate([]);
        $like->increment('like_count');
        return response()->json(['like_count' => $like->like_count]);
    }
}
