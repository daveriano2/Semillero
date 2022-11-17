<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;

/**
 * Class ExtraController
 * @package App\Http\Controllers
 */
class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Extra::paginate();

        return view('extra.index', compact('extras'))
            ->with('i', (request()->input('page', 1) - 1) * $extras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $extra = new Extra();
        return view('extra.create', compact('extra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Extra::$rules);

        $extra = Extra::create($request->all());

        return redirect()->route('extras.index')
            ->with('success', 'Extra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extra = Extra::find($id);

        return view('extra.show', compact('extra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $extra = Extra::find($id);

        return view('extra.edit', compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Extra $extra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extra $extra)
    {
        request()->validate(Extra::$rules);

        $extra->update($request->all());

        return redirect()->route('extras.index')
            ->with('success', 'Extra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $extra = Extra::find($id)->delete();

        return redirect()->route('extras.index')
            ->with('success', 'Extra deleted successfully');
    }
}
