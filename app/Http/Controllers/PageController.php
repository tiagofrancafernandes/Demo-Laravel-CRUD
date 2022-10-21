<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * function index
     *
     * @param Request $request
     * @return
     */
    public function index(Request $request)
    {
        $pages = Page::latest()->paginate(20);

        return view('pages.index', [
            'pages' => $pages
        ]);
    }

    /**
     * function show
     *
     * @param Request $request,
     * @param int $pageId
     * @return
     */
    public function show(Request $request, int $pageId)
    {
        $page = Page::where('id', $pageId)->first();

        if (!$page) {
            return redirect()
                ->route('pages.index')
                ->with('error', __('Page not found'));
        }

        return view('pages.show', [
            'page' => $page,
        ]);
    }

    /**
     * function edit
     *
     * @param Request $request,
     * @param int $pageId
     * @return
     */
    public function edit(Request $request, int $pageId)
    {
        $page = Page::where('id', $pageId)->first();

        if (!$page) {
            return redirect()
                ->route('pages.index')
                ->with('error', __('Page not found'));
        }

        return view('pages.edit', [
            'page' => $page,
        ]);
    }

    /**
     * function create
     *
     * @param Request $request,
     * @param int $pageId
     * @return
     */
    public function create(Request $request)
    {
        return view('pages.create');
    }

    /**
     * function confirmDelete
     *
     * @param Request $request,
     * @param int $pageId
     * @return
     */
    public function confirmDelete(Request $request, int $pageId)
    {
        $page = Page::where('id', $pageId)->first();

        if (!$page) {
            return redirect()
                ->route('pages.index')
                ->with('error', __('Page not found'));
        }

        return view('pages.confirm_delete', [
            'page' => $page,
        ]);
    }

    /**
     * function update
     *
     * @param Request $request,
     * @param int $pageId
     * @return
     */
    public function update(Request $request, int $pageId)
    {
        $request->validate([
            'title'      => 'nullable|string|min:5',
            'slug'     => 'nullable|email|min:5',
            'content'  => 'nullable|string|min:5',
        ]);

        $page = Page::where('id', $pageId)->first();

        if (!$page) {
            return redirect()
                ->route('pages.index')
                ->with('error', __('Page not found'));
        }

        $data = $request->only([
            'title',
            'slug',
            'content',
        ]);

        $page->update($data);

        return redirect()
                ->route('pages.index')
                ->with('success', __('Updated Page'));
    }

    /**
     * function store
     *
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|min:5',
            'email'     => 'required|email|min:5',
            'password'  => 'required|string|min:5',
        ]);

        $data = $request->only([
            'name',
            'email',
            'password',
        ]);

        $data['password'] = \Hash::make($request->input('password'));

        $page = Page::create($data);

        if (!$page) {
            return redirect()
                ->route('pages.index')
                ->with('error', __('Failed to register page'));
        }

        return redirect()
                ->route('pages.index')
                ->with('success', __('Page created successfully'));
    }

    /**
     * function delete
     *
     * @param Request $request,
     * @param int $userId
     * @return
     */
    public function delete(Request $request, int $pageId)
    {
        $page = Page::where('id', $pageId)->first();

        if (!$page) {
            return redirect()
                ->route('pages.index')
                ->with('error', __('Page updated successfully'));
        }

        $page->delete();

        return redirect()
                ->route('pages.index')
                ->with('success', __('Page deleted successfully'));
    }
}
