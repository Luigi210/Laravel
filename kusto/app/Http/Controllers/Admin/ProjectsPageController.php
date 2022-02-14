<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectsPage;
use Illuminate\Http\Request;

class ProjectsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = ProjectsPage::orderBy('created_at', 'desc')->get();
        return view('admin.pages.projects.index',
            [
                'projectspage' => $projects
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
        return view('admin.pages.projects.create');

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
        $new_project = new ProjectsPage();
        $new_project->title = $request->title;
        $new_project->description = $request->description;
        $new_project->image = '\\' . $request->image;
        $new_project->date = $request->date;
        $new_project->save();

        return redirect()->back()->withSucces('Проект добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectsPage  $projectsPage
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectsPage $projectsPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectsPage  $projectsPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectsPage $projectsPage)
    {
        //
        return view('admin.pages.projects.edit', [
            'projects' => $projectsPage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectsPage  $projectsPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectsPage $projectsPage)
    {
        //
        $projectsPage->title = $request->title;
        $projectsPage->description = $request->description;
        $projectsPage->image = $request->image;
        $projectsPage->save();
        return redirect()->back()->withSucces('Проект изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectsPage  $projectsPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectsPage $projectsPage)
    {
        //
        $projectsPage->delete();

        return redirect()->back()->withSucces('Проект был удалены!');
    }
}
