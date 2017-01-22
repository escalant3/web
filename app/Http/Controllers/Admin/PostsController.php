<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Auth;
use Illuminate\Http\Request;
use Validator;

class PostsController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(50);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'title'    => 'required|max:200',
            'slug'     => 'required',
            'category' => 'required',
            'body'     => 'required|max:20000',
        ]);

        if ($v->fails()) {
            flash($v->messages()->first(), 'error');

            return redirect()->back()->withInput()->withErrors($v);
        }

        Auth::user()->posts()->create($request->all());
        flash('Artículo creado correctamente');

        return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {
        return view('admin.posts.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        $v = Validator::make($request->all(), [
            'title'    => 'required|max:200',
            'slug'     => 'required',
            'category' => 'required',
            'body'     => 'required|max:20000',
        ]);

        if ($v->fails()) {
            flash($v->messages()->first(), 'error');

            return redirect()->back()->withInput()->withErrors($v);
        }

        Auth::user()->posts()->findOrFail($id)->update($request->all());
        flash('Artículo actualizado correctamente');

        return redirect()->route('admin.posts.edit', ['id' => $id]);
    }

    public function delete($id)
    {
        Auth::user()->posts()->findOrFail($id)->delete();

        flash('Artículo eliminado correctamente');

        return redirect()->route('admin.posts.index');
    }
}
