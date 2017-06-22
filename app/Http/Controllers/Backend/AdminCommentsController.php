<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend;
//use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;
use App\Models\Article;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Translate;
use App\Models\Text;
use App\Models\Comment;
use App;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\MessageBag;
use Storage;


class AdminCommentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		App::setLocale('ua');
		//$admin_comments = Article::find($id)->comments
		$admin_comments = Comment::all()
		//$admin_comments = Comment::where('article_id', '=', $article_id)->get()
		->sortByDesc("priority");
		if (isset($admin_comments['date']))
			$admin_comments['date'] = date('Y-m-d H:i:s',strtotime($admin_comments['date']));

			//dd($admin_comments);
		return view('backend.comments.list',[
			'admin_comments' => $admin_comments
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($article_id)
	{
		return view('backend.comments.edit', [
			'action_method' => 'post',
			'article_id' => $article_id
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, $article_id)
	{
		$this->validate($request, [
			'user_name' => 'required|max:20',
			'comment' => 'required|max:600',

		]);
		$all = $request->all();
		if (isset($all['date']))
			$all['date'] = date('Y-m-d H:i:s',strtotime($all['date']));
		Comment::create($all);
		return response()->json([
			"status" => 'success',
			"message" => 'Успішно збережено',
			"redirect" => URL::to('/admin30x5/comments/'.$article_id)
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit( $article_id = null, $id)
	{

		$admin_comment = Comment::where("id","=","$id")->first();
		if (isset($admin_comments['date']))
			$admin_comments['date'] = date('Y-m-d H:i:s',strtotime($admin_comments['date']));
		return view('backend.comments.edit',[
			'admin_comment'=> $admin_comment,
			'action_method' => 'put',
			'article_id' => $article_id
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $article_id, $id)
	{
		$admin_comment = Comment::where("id","=","$id")->first();
		$all = $request->all();
		if (isset($all['date']))
			$all['date'] = date('Y-m-d H:i:s',strtotime($all['date']));
		$admin_comment->update($all);
		$admin_comment->save();
		return response()->json([
			"status" => 'success',
			"message" => 'Успішно збережено',
			"redirect" => URL::to('/admin30x5/comments/'.$article_id)
		]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($article_id, $id)
	{
		$admin_comment = Comment::where('id', '=', $id)->first();
		if($admin_comment AND $admin_comment->delete()){

			return response()->json([
				"status" => 'success',
				"message" => 'Успішно видалено'
			]);
		}
		else{
			return response()->json([
				"status" => 'error',
				"message" => 'Виникла помилка при видаленні при удалении'
			]);
		}
	}


}
