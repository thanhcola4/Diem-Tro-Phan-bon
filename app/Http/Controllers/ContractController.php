<?php

namespace App\Http\Controllers;
use App\Models\Contract;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    
    public function create()
    {
        $contract = Contract::all();

        return view('laravel-examples/contract',compact('contract'));
    }
    public function destroy($id)
    {
        $contract = Contract::findOrFail($id);
        $contract->delete();

        return redirect()->back()->with('success', 'Xóa liên hệ thành công!');
    }
    
    
}
