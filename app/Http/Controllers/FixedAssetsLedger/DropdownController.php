<?php

namespace App\Http\Controllers\FixedAssetsLedger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FixedLedgerAccount;
use App\Models\DepreciationMethod;
use App\Models\AccountType;
use App\Models\CategoryName;
use App\Models\ControllerAccount;

class DropdownController extends Controller
{
 
				//getCategoryNames function
				public function getCategoryName(Request $request){
					$acc_id=$request->post('id');
					$category_name=CategoryName::where('account_type_id',$acc_id)->get();
					$html='<option value="">Select</option>';
					foreach($category_name as $list){
						$html.='<option value="'.$list->id.'">'.$list->name.'</option>';
					
					}
					echo $html;
				}
				//getMainAccountsName function
				public function getMainAccountsName(Request $request){
					$categoryid=$request->post('id');
					$main_accouns_name=ControllerAccount::where('category_name_id',$categoryid)->get();
					$html='<option value="">Select</option>';
					foreach($main_accouns_name as $list){
						$html.='<option value="'.$list->id.'">'.$list->name.'</option>';
					}
					echo $html;
				}

				//updategetCategoryName function
				public function updategetCategoryName(Request $request){
					$acc_id=$request->post('id');
					$category_name=CategoryName::where('account_type_id',$acc_id)->get();
					$html='<option value="">select</option>';
					foreach($category_name as $list){
						$html.='<option value="'.$list->id.'">'.$list->name.'</option>';

					}    
					echo $html;
				}
				//updategetMainAccountsName function
				public function updategetMainAccountsName(Request $request){
					$categoryid=$request->post('id');
					$main_accouns_name=ControllerAccount::where('category_name_id',$categoryid)->get();
					$html='<option value="">Select</option>';
					foreach($main_accouns_name as $list){
						$html.='<option value="'.$list->name.'">'.$list->name.'</option>';
					}
					echo $html;
				}
}
