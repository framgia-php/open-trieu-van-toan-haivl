<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use DB;
use Auth;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('id', 'DESC')->paginate(5);

        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.add');
    }

    public function store(VideoRequest $request)
    {
        $video = new Video();
        $video->title = $request->txtTitle;
        $video->alias = changeTitle($request->txtTitle);
        $video->link = $request->link;
        $video->view = 0;
        $video->source = $request->source;
        $video->user_id = Auth::user()->id;
        $video->save();

        return redirect()
            ->route('video.index')
            ->with([
                'flash_level' => 'success', 
                'flash_message' => 'Success !! Complete Add New Video'
            ]);
    }

    public function edit($id)
    {
        $video = Video::find($id);

        return view('admin.videos.edit', compact('video'));

    }

    public function update($id, Request $request)
    {
        $video = Video::find($id);
        $view = $video->view;
        $video->title = $request->txtTitle;
        $video->alias = changeTitle($request->txtTitle);
        $video->link = $request->link;
        $video->view = $view;
        $video->source = $request->source;
        $video->user_id = Auth::user()->id;
        $video->save();

        return redirect()
            ->route('video.index')
            ->with([
                'flash_level' => 'success', 
                'flash_message' => 'Success !! Complete Updated Video'
            ]);

    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect()
            ->route('video.index')
            ->with([
                'flash_level' => 'success', 
                'flash_message' => 'Success !! Complete Deleted Video'
            ]);
    }
}
