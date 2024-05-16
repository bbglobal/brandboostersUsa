<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view("admin.pages.login");
    }

    public function admin()
    {
        if (Auth::check()) {
            return view('admin.pages.dashboard');
        }
        return redirect('admin/login');
    }

    public function loggedIn(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');
        $password = $request->only('password');
        session()->put("userPass", $password);
        if (Auth::attempt($credentials)) {
            return redirect('admin');
        }
        return redirect('admin/login')->with('success', 'Incorrect! Username or Password');
    }

    function users()
    {
        return view('admin.pages.addUser');
    }

    function addUsers(Request $request)
    {
        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
        return redirect('admin/login')->with('success', 'User added successfully');
    }

    function addBlogs()
    {
        return view('admin.pages.addBlog');
    }

    function addBlog(Request $request)
    {
        $blog = new Blog;
        $filename = $request->file('featuredimg')->getClientOriginalName();
        $request->file('featuredimg')->storeAs('uploads', $filename);
        $blog->featuredimg = $filename;
        $blog->title = $request['title'];
        $blog->sub1 = $request['sub1'];
        $blog->para1 = $request['para1'];

        $blog->sub2 = $request['sub2'];
        $blog->para2 = $request['para2'];

        $blog->sub3 = $request['sub3'];
        $blog->para3 = $request['para3'];

        $blog->sub4 = $request['sub4'];
        $blog->para4 = $request['para4'];

        $blog->sub5 = $request['sub5'];
        $blog->para5 = $request['para5'];

        $blog->sub6 = $request['sub6'];
        $blog->para6 = $request['para6'];

        $blog->sub7 = $request['sub7'];
        $blog->para7 = $request['para7'];

        $blog->sub8 = $request['sub8'];
        $blog->para8 = $request['para8'];

        $blog->sub9 = $request['sub9'];
        $blog->para9 = $request['para9'];

        $blog->sub10 = $request['sub10'];
        $blog->para10 = $request['para10'];

        $blog->sub11 = $request['sub11'];
        $blog->para11 = $request['para11'];

        $blog->sub12 = $request['sub12'];
        $blog->para12 = $request['para12'];

        $blog->sub13 = $request['sub13'];
        $blog->para13 = $request['para13'];

        $blog->sub14 = $request['sub14'];
        $blog->para14 = $request['para14'];

        $blog->sub15 = $request['sub15'];
        $blog->para15 = $request['para15'];

        $blog->save();

        return redirect('admin/addBlog')->with('success', 'Blog Added Successfully');
    }

    function blogs()
    {
        $blogs = Blog::all();
        $data = compact('blogs');
        return view('admin.pages.blog')->with($data);
    }

    function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    function tables()
    {
        return view('admin.pages.tables');
    }
}
