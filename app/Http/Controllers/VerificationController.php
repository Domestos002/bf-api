<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verification;
use App\Http\Resources\VerificationResourse;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VerificationResourse::collection(Verification::with('coordinator')->paginate(8));
    }

    /**
     * Display the specified resource.
     *
     * @param Verification $verification
     * @return VerificationResourse
     */
    public function show(Verification $verification)
    {
        return new VerificationResourse($verification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Verification $verification
     * @return VerificationResourse
     */
    public function update(Request $request, Verification $verification)
    {
        $data = $request->only(['coordinator', 'status']);

        $verification->update(['coordinator_id' => $data['coordinator']['id'], 'status' => $data['status']]);

        return new VerificationResourse($verification);
    }
}
