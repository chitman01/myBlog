<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = DB::select('select * from blogs');
        return view('blog')
            ->with(compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['title' => 'required' , 'detail' => 'required']);
        $blog = new Blog([
            'title' => $request->get('title'),
            'detail'=> $request->get('detail')
        ]);
        dd($blog);
        //$blog->save(); 
        return redirect()->route('blog.index')->with('success','บันทึกสำเร็จ');
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
        /*
        $this->validate($request, ['fname' => 'required', 'lname' => 'required']);
        $user = User::find($id);
        $user->fname = $request->get('fname');
        $user->lname = $request->get('lname');
        //$user->save();
        return redirect()->route('user.index')->with('success', 'อัพเดทสำเร็จ');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Blog::find($id);
        //$delete->delete();
        return redirect()->route('blog.index')->with('delete','ลบสำเร็จแล้ว');
    }
}
