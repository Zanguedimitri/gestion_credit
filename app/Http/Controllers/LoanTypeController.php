<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanTypes;

class LoanTypeController extends Controller
{
    //
    public function allLoan(){
        $loans = LoanTypes::all();
        return view("admin.loan_type.view",compact('loans'));
    }

    public function addLoan(Request $request){
        $validated = $request->validate([
            'loanType'=>'required|max:255'
        ]);
    $loan = new LoanTypes();
    $loan->name = $request->loanType;
    $loan->save();

    toastr()->success('Loan Type registered successfully!');
    return redirect()->back();
    }

    public function deleteLoan(string $id){
        $user = LoanTypes::find($id);
        $user->delete();

    toastr()->success('Loan Type has been delete successfully!');
    return redirect()->back();
    }

    public function editLoan(string $id){
        $loan = LoanTypes::find($id);
        return view('admin.loan_type.edit',compact('loan'));
    }
    public function updateLoan(Request $request,string $id){
        $user = LoanTypes::find($id);
        $user->name = $request->loanType;
        $user->save();
        toastr()->success('Loan Type has been update successfully!');
        return redirect()->route('admin.all.loan_type');
    }
}
