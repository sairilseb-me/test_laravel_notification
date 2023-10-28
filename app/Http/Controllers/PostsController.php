<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Database\Seeders\PostSeeder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $posts)
    {
        //
    }

    /**
     * Mass creation of post
     */
    public function massCreation(): RedirectResponse
    {
        $post_seeder = new PostSeeder();
        $post_seeder->run(10);

        notify()->success('Successfully created posts.');
        return redirect()->back();
    }
}
