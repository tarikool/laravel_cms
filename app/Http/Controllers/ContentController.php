<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::get()->map(function ($item){
            $item->title = Str::limit($item->title, 15);
            $item->body = Str::limit($item->body, 30);
            return $item;
        })->groupBy('section');

//        return $contents['section_1'];

        return view('content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['section'] = Content::$arrSection;
        return view('content.create', compact('data'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:post,video',
            'title' => 'required|string|max:255|unique:contents,title',
            'body' => 'required|string|min:20',
            'section' => 'required|string',
            'youtube_link' => 'exclude_if:type,post|url',
            'image' => 'required_if:type,post|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input = $request->except('image');
        $input['slug'] = Str::slug( $request->title, '_');
        if ($request->type == 'post' && $request->has('image'))
            $input['image'] = $request->image->store('uploads', 'public');

        $request->user()->contents()->create( $input);
//        $content = Content::create($input);

        return redirect('contents')->with('success', 'Content Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
