<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsPage;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = NewsPage::orderBy('created_at', 'desc')->get();
        return view('admin.pages.news.index',
            [
                'newspage' => $news
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
        //
        return view('admin.pages.news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $new_news = new NewsPage();
        $new_news->title = $request->title;
        $new_news->description = $request->description;
        $new_news->image = '/' . $request->image;
        $new_news->date = $request->date;
        
        $new_news->save();
        return redirect()->back()->withSucces('Новости добавлены');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsPage  $newsPage
     * @return \Illuminate\Http\Response
     */
    public function show(NewsPage $newsPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsPage  $newsPage
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsPage $newsPage)
    {
        //
        return view('admin.pages.news.edit', [
            'news' => $newsPage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsPage  $newsPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsPage $newsPage)
    {
        //
        $newsPage->title = $request->title;
        $newsPage->description = $request->description;
        $newsPage->image = $request->image;
        $newsPage->date = $request->date;
        $newsPage->save();
        return redirect()->back()->withSucces('Новости изменены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsPage  $newsPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsPage $newsPage)
    {
        //
        $newsPage->delete();
        return redirect()->back()->withSucces('Новости были удалены!');
    }
}
