<?php

namespace App\Http\Controllers;

use App\ShareSheet;
use Illuminate\Http\Request;
use App\Mail\ShareSheetShared;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ShareSheetRequest;

class ShareSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        exit('Not required.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('share.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ShareSheetRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ShareSheetRequest $request)
    {
        $shareSheet = $request->persist();

        Mail::to($shareSheet->friend_email)
            ->send(new ShareSheetShared($shareSheet));

        return redirect()->route('share.create');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ShareSheet $shareSheet
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ShareSheet $shareSheet)
    {
        exit('Not required.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ShareSheet $shareSheet
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(ShareSheet $shareSheet)
    {
        exit('Not required.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ShareSheet          $shareSheet
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShareSheet $shareSheet)
    {
        exit('Not required.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ShareSheet $shareSheet
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShareSheet $shareSheet)
    {
        exit('Not required.');
    }
}
