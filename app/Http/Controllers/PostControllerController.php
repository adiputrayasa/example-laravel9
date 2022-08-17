<?php

namespace App\Http\Controllers;

use App\Models\PostController;
use App\Http\Requests\StorePostControllerRequest;
use App\Http\Requests\UpdatePostControllerRequest;

class PostControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function show(PostController $postController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function edit(PostController $postController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostControllerRequest  $request
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostControllerRequest $request, PostController $postController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostController  $postController
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostController $postController)
    {
        //
    }
}
