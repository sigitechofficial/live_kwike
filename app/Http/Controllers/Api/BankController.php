<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteBankRequest;
use App\Http\Requests\UpdateBankRequest;
use Illuminate\Http\Request;
use App\Repositories\BankRepository\BankRepositoryInterface;

class BankController extends Controller
{
    public $bank;

    public function __construct(BankRepositoryInterface $bank)
    {
        $this->bank = $bank;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->bank->getBanks();
        ResponseNow('1', 'Banks.!', $data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ResponseNow('1', 'Bank Added.!', $this->bank->addBank($request), 200);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankRequest $request)
    {
        //
        $data = $this->bank->update($request);
        ResponseNow('1', 'Bank Added.!', $data, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteBankRequest $request)
    {
        //
        $data = $this->bank->destroy($request->bank_id);
        ResponseNow('1', 'Bank Deleted!', $data, 200);
    }
}
