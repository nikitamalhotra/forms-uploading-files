<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        //$posts = Post::all();
	    //We will list Posts orderby Descending Order
	    //$posts = Post::orderBy('id', 'desc')->get();
	    //The above code will be replaced with 'Query Scope' latest(), which is defined in Post Model
	    $posts = Post::latest();        //latest() replace with   orderBy('id', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
	    return view('posts.create');
    }

    public function store(CreatePostRequest $request)
    {

    	/*Method 1 : Simple Validation
    	$this->validate($request, [
    		'title'     => 'required|min:10|max:50',
		    'content'   => 'required'
	    ]);
    	*/

	    //*Method 2 : Simple Validation - requires function parameter to be CreatePostRequest at the place of Request
		//Create CreatePostRequest.php file =>  php artisan make:request CreatePostRequest
	    //                                          It is inside root>app>http>Requests


		//return $request->all();

	    //return $request->title;   //Allowed - Using tag name as property
        //return $request->get('title'); //return $request->get('name');

	    //Method 1 - Storing to Database
	    //Post::create($request->all());

	    //Method 2 - Storing to Database
	    //$input = $request->all();
	    //$input['title'] = $request->title;
	    //Post::create($request->all());

	    //Method 3 - Storing to Database
	    //$post = new Post;
	    //$post->title = $request->title;
	    //$post->save();


	    //This section is also going to upload file
		$input = $request->all();
		if($file = $request->file('file')){
			$name = $file->getClientOriginalName();
			$file->move('images', $name);
			$input['path'] = $name;
		}
		Post::create($input);
		return redirect('/posts');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
	    $post = Post::findOrFail($id);
	    return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
		return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
              //Post::whereId($id)->delete();
	          //Post::where('id', $id)->delete();
        $post->delete();
        return redirect('/posts');
    }
}
