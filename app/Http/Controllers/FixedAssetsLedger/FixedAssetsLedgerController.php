<?php

namespace App\Http\Controllers\FixedAssetsLedger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FixedLedgerAccount;
use App\Models\DepreciationMethod;
use App\Models\AccountType;
use App\Models\CategoryName;
use App\Models\ControllerAccount;

class FixedAssetsLedgerController extends Controller
{
        // show dashboard
        function home()
        {

            $fixeddata = FixedLedgerAccount::all();
            $depreMethods = DepreciationMethod::all();
            $acc_type = AccountType::all();
            $categ_name = CategoryName::all();
            $control_account = ControllerAccount::all();          
            return View('home',compact(['fixeddata','depreMethods','acc_type','categ_name','control_account']));
            
        }
    
        //data Save function
        public function save(Request $request)
        {
             /* $this->validate($request,[
                'account_type'=>'required',
                'category_code'=>'required',
                'main_accouns_code'=>'required',
                'legger_accouns_name'=>'required',
                'active'=>'required',
                'category_name'=>'required',
                'main_accouns_name'=>'required',
                'Legger_accouns_code'=>'required',
                'cost'=>'required|numeric',
                'life_time'=>'required|numeric',
                'depreciation_rate'=>'required|numeric',
                'depreciation_method'=>'required',
                ]);*/
     
              $saveconform = new FixedLedgerAccount;
              $saveconform->account_type_id = $request->account_type;
              $saveconform->category_code = $request->category_code;
              $saveconform->main_account_code = $request->main_accouns_code;
              $saveconform->ledger_account_name = $request->legger_accouns_name;
              $saveconform->status=$request->active;
              $saveconform->category_name_id=$request->category_name;
              $saveconform->main_account_name=$request->main_accouns_name;
              $saveconform->ledger_account_code=$request->Legger_accouns_code;
              $saveconform->cost=$request->cost;
              $saveconform->life_time=$request->life_time;
              $saveconform->depreciation_rate=$request->depreciation_rate;
              $saveconform->depreciation_method=$request->depreciation_method;
              $saveconform->date_of_depreciation=$request->date_of_depreciation;
              $saveconform->save();
              return redirect()->back();
        }
    
        //data edit function
        function edit($id)
        {
             $fixeddata = FixedLedgerAccount::find($id);
             $depre_methods = DepreciationMethod::all();
             $acc_type = AccountType::all();
             $categ_name = CategoryName::all();
             $control_account = ControllerAccount::all();          
             return View('update-dashboard',compact(['fixeddata','depre_methods','acc_type','categ_name','control_account']));       
            }
    
        //data update function
        public function update($id, Request $request) 
        {
             //$saveconform=fixed_ledger_account::findOrFail($id)->update($request->all());
             $saveconform =  FixedLedgerAccount::findOrFail($id);
             $saveconform->account_type_id=$request->account_type;
             $saveconform->category_code=$request->category_code;
             $saveconform->main_account_code=$request->main_accouns_code;
             $saveconform->ledger_account_name=$request->legger_accouns_name;
             $saveconform->status=$request->active;
             $saveconform->category_name_id=$request->category_name;
             $saveconform->main_account_name=$request->main_accouns_name;
             $saveconform->ledger_account_code=$request->Legger_accouns_code;
             $saveconform->cost=$request->cost;
             $saveconform->life_time=$request->life_time;
             $saveconform->depreciation_rate=$request->depreciation_rate;
             $saveconform->depreciation_method=$request->depreciation_method;
             $saveconform->date_of_depreciation=$request->date_of_depreciation;
             $saveconform->save();
            //return redirect("home");
            return redirect()->route('home');
        }
    
            //data delete function
            function delete($id)
            {
                $deketeform = FixedLedgerAccount::find($id);
                $deketeform->delete();
                return redirect()->back();
            }
      
    
}
