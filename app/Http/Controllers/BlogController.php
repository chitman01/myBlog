<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\blog;

class BlogController extends Controller
{
    function navigation_blog(Request $data)
    {
        if ($data->ajax()) {
            $output = "";
            $get_data = DB::table('blogs')
                ->whereBetween('id', array($data->data2,$data->data1))->get();
            if ($get_data) {
                foreach ($get_data as $key => $raw) {
                    $output .= '<tr>' .
                        '<td>' . $raw->id . '</td>' .
                        '<td>' . substr($raw->title,1,10) . '</td>' .
                        '<td>' . substr($raw->detail,1,10) . '</td>' .
                        '<td>' . substr($raw->image_filename,1,10) . '</td>' .
                        '<td>' . substr($raw->original_image_filename,1,10) . '</td>' .
                        '<td>' . $raw->created_at . '</td>' .
                        '<td>' .'<button type="submit" class="btn btn-danger">Delete</button>'. '</td>'.
                        '</tr>';
                }
                return Response($output);
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$blog = DB::table('blogs')->paginate(5);
        $blog = DB::table('blogs')->take(3)->get();

        $count = DB::table('blogs')->count();
        return view(
            'blog.blog',
            [
                'blog' => $blog,
                'count' => $count
            ]
        );
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
        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',
            'image' => 'required',

        ]);
        /*
        $blog = new Blog([
            'title' => $request->get('title'),
            'detail' => $request->get('detail'),
            'image' => $request->get('image')
        ]);
        */
        //https://blog.hashvel.com/posts/laravel-image-upload/
        $cover = $request->file('image');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->detail = $request->detail;
        //$blog->image = $cover->getClientMimeType();
        $blog->original_image_filename = $cover->getClientOriginalName();
        $blog->image_filename = $cover->getFilename() . '.' . $extension;

        //dd($book);
        $blog->save();
        return redirect()->route('blog.index')->with('success', 'บันทึกสำเร็จ');
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
        */ }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Blog::find($id);
        dd($delete);

        //$delete->delete();
        //return redirect()->route('blog.index')->with('delete', 'ลบสำเร็จแล้ว');
    }
}
