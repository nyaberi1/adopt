<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('pages.home');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Adopt List';
        
        $pages = Page::get();

        return view('pages.create')->with(compact('title', 'pages'));

       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'aname' => 'required',
            'address' => 'required',
            'email'=>'required|email',
            'pno' => 'required',
            //'choice' => 'required',
            'textarea' => 'required',
          
        ]);
        
        
        $page = new Page($incomingFields);
        $page->save();

       

        return redirect('/')->with('message', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        $title = 'Adopt List';
        $pages = Page::latest()->paginate();
        return view('pages.show', ['pages' => $pages])->with(compact('title', 'pages'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return view('pages.edit', ['enroll' => $page]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'aname' => 'required',
            'address' => 'required',
            'email'=>'required|email',
            'pno' => 'required',
            //'choice' => 'required',
            'textarea' => 'required',
          
        ]);
        
        
        $page->update($incomingFields);
        $page->save();
        return redirect()->route('update', ['page' => $page])->with('message', 'Post update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
         $page->delete();

        return redirect()->route('show')->with('message', 'Post delete');
    }
}