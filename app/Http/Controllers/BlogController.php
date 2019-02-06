<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{

	public function Index(){

		$post=DB::table('post')
				->get();
		return view('index')->with('index',$post);
	}


    public function Login(){

		return view ('login');
	}

	public function post(){

		$ca_post=DB::table('categories')
				->get();
		return view('post')->with('categpry',$ca_post);
	}

	public function Category(){

		return view ('category');
	}

	public function Insert_post(Request $request){

		$data = array();
		$data['title']=$request->title; 
		$data['category']=$request->category; 
		$data['description']=$request->description; 

		// echo "<pre>";
		// print_r($data);

		

		$st=DB::table("post")
			->insert($data);

			//toastr alert messages
			if($st) {
				$notification= array(
					'messege'=>'Post save successfully',
					'alert-type'=>'success'
				);
				return Redirect()->back()->with($notification);
			}else{echo "error";}

	}


	public function Insert_category(Request $request){

		$data = array();
		$data['name']=$request->name; 

		$st_c=DB::table("categories")
			->insert($data);


			if($st_c) {
				$notification= array(
					'messege'=>'Category added successfully',
					'alert-type'=>'success'
				);
				return Redirect()->back()->with($notification);
			}else{echo "error";}

	}


	public function Details(){

		$post=DB::table('post')
				->get();
		return view('post_details')->with('index',$post);
	}


	public function DeletePost($id){
		$dlt=DB::table('post')
			->where('id',$id)
			->delete();

		if($dlt) {
				$notification= array(
					'messege'=>'Post deleted successfully',
					'alert-type'=>'success'
				);
				return Redirect()->back()->with($notification);
				//return route('Index')->with($notification);
			}else{echo "error";}
	}

	public function PostDetails($id){

		$con=DB::table('post')
			->where('id',$id)
			->first();

			return view('post_details')->with('postdetails',$con);
	}

	
	public function EditPost($id){

		$ed=DB::table('post')->where('id',$id)->first();
		return view('edit')->with('ed',$ed);
	}


	// Update post //
	public function UpdatePost(Request $request, $id){

		$data=array();
		$data['title']=$request->title;
		$data['category']=$request->category;
		$data['description']=$request->description;

		$post_update=DB::table('post')
					->where('id',$id)
					->update($data);
		if($post_update) {
				$notification= array(
					'messege'=>'Post Update successfully',
					'alert-type'=>'success'
				);

				return Redirect()->back()->with($notification);
			}else{echo "error";}
	}

	

}

