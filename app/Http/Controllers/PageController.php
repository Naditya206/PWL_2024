<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat datang';
    }

    public function about()
    {
        return '244107023008 Naditya Prastia Andino';
    }

    public function user($name = 'John')
    {
        return 'Nama saya ' . $name;
    }

    public function article($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }

    public function postComment($postId, $commentId)
    {
        return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
    }
}
