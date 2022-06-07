@extends('layouts.app')

@section('content')
<div class="container">
                        <!-- main app container -->
                        <div class="readersack">
                        <div class="container">
                            <div class="row">
                            <div class="col-md-6 offset-md-3">                               

                                <!-- Check user is logged in -->
                                @if(\Auth::check())
                                
                                @else
                                <div class='dash '>
                                    <div class='error'> You are not logged in  </div>
                                    <div>  <a href="{{url('login')}}">Login</a> | <a href="{{url('register')}}">Register</a> </div>
                                </div>
                                
                                @endif
                            <!-- Check user is logged in --> 
                            </div>
                            </div>
                        </div>
                    </div>

<br>
                        
<!-- crd 1 srrt -->
 <div class="card bg-light mb-3" style="max-width: 70rem;"> 
   <div class="card-header">

     <!-- form strt -->
   
      <form action="{{route('fixed_assets.update',$fixeddata->id)}}" method="POST">
          @csrf                    
          <div class="container-fluid">
            <div class="row">

              <!-- 1st col strt --> 
                <div class="col-sm-4">                   
                  <div class="form-group row col-md-12">                 
                    <label for="input" class="col-sm-6 col-form-label">Accounts type</label>
                       <div class="col-sm-6">
                          <select class="custom-select mr-sm-2" name="account_type"  id="account_type">           
                             @foreach($acc_type as $list)
				                      <option value="{{$list->id}}" {{($list->id == $fixeddata->account_type_id ) ? "selected" : ""}} >{{$list->name}}</option>
		                      	 @endforeach
                          </select>
                        </div>
                  </div>
 
                    <div class="form-group row col-md-12">
                       <label for="input" class="col-sm-6 col-form-label">Category name</label>
                        <div class="col-sm-6">
                          <select class="custom-select mr-sm-2" id="category_name" name="category_name"> 
                             @foreach($categ_name as $list)
				                       <option value="{{$list->id}}" {{($list->id == $fixeddata->category_name_id ) ? "selected" : ""}} >{{$list->name}}</option>
		                      	 @endforeach
                          </select>
                        </div>
                    </div>

                  <div class="form-group row col-md-12">
                    <label for="input" class="col-sm-6 col-form-label">Main accounts name </label>
                      <div class="col-sm-6">
                       <select class="custom-select mr-sm-2" id="main_accouns_name" name="main_accouns_name">
                         <option selected>{{$fixeddata->main_account_name}}</option> 
                         <option value=""></option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group row col-md-12">
                    <label for="input" class="col-sm-6 col-form-label">Ledger accounts name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="formGroupExampleInput" value="{{$fixeddata->ledger_account_name}}" name="legger_accouns_name">
                      </div>
                  </div>
                </div>
              <!-- 1st col end--> 

              <!-- 2nd col strt --> 
                 <div class="col-sm-4">
                   <div class="form-group row col-md-12">
                     <label for="input" class="col-sm-6 col-form-label">Active</label>
                       <div class="col-sm-6">
                         <input style="margin-left:auto; margin-right:auto;" class="form-check-input" type="checkbox" id="autoSizingCheck"   name="active" checked>
                       </div>
                    </div>


                  <div class="form-group row col-md-12">
                    <label for="input" class="col-sm-6 col-form-label">Category code</label>
                      <div class="col-sm-6">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="category_code">
                            @foreach($categ_name as $list)
				                    <option value="{{$list->code}}" {{($list->id == $fixeddata->category_name_id ) ? "selected" : ""}} >{{$list->code}}</option>

                            @endforeach
                        </select>
                      </div>
                  </div> 

                  <div class="form-group row col-md-12">
                    <label for="input" class="col-sm-6 col-form-label">Main accounts code</label>
                      <div class="col-sm-6">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="main_accouns_code">
                            @foreach($control_account as $list)
				                    <option value="{{$list->code}}" {{($list->id == $fixeddata->category_name_id  ) ? "selected" : ""}} >{{$list->code}}</option>
		                      	@endforeach
                        </select>
                       </div>
                  </div>

                  <div class="form-group row col-md-12">
                    <label for="input" class="col-sm-6 col-form-label">Ledger accounts code</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="formGroupExampleInput1" value="{{$fixeddata->ledger_account_code}}" name="Legger_accouns_code">
                      </div>
                  </div>
              </div>
              <!-- 2nd col end --> 

              <!-- 3rd col strt --> 

                <div class="col-sm-4">
                  <div class="form-group row col-md-12">
                    <label for="input" class="col-sm-6 col-form-label">Cost</label>
                     <div class="col-sm-6">
                       <input type="text" class="form-control" id="formGroupExampleInput1" value="{{$fixeddata->cost}}" name="cost">
                     </div>
                  </div>

                  <div class="form-group row col-md-12">
                    <label for="input" class="col-sm-6 col-form-label">Life time</label>
                      <div class="col-sm-6">
                         <input type="text" class="form-control" id="formGroupExampleInput1" value="{{$fixeddata->life_time}}" name="life_time">
                      </div>
                  </div>

                  <div class="form-group row col-md-12">
                    <label for="input" class="col-sm-6 col-form-label">Depreciation rate (%)</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="formGroupExampleInput1" value="{{$fixeddata->depreciation_rate}}" name="depreciation_rate">
                      </div>
                  </div>
     
                  <div class="form-group row col-md-12">
                   <label for="input" class="col-sm-6 col-form-label">Depreciation method </label>
                     <div class="col-sm-6">
                       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="depreciation_method">
                            @foreach($depre_methods as $list)
				                    <option value="{{$list->name}}" {{($list->id == $fixeddata->category_name_id ) ? "selected" : ""}} >{{$list->name}}</option>
		                      	@endforeach
                       </select>
                      </div>
                  </div>
  
                  <div class="form-group row col-md-12">
                    <label for="input" class="col-sm-6 col-form-label">Date of depreciation</label>
                      <div class="col-sm-6">
                        <input type="date" class="form-control" id="formGroupExampleInput" value="{{$fixeddata->date_of_depreciation}}" name="date_of_depreciation">
                      </div>
                  </div>

                   <div class="flex-parent jc-center">
                     <button type="submit" class="btn btn-primary btn-sm" >Update</button>
                   </div> 
                </div>
              <!-- 3nd col end --> 
            </div>
          </div>
        </div>
      </form>
     <!-- form end -->
   </div>
   <!-- card 1 end -->   

   </div>
 </div>
   
  </body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
      jQuery(document).ready(function(){
        jQuery('#account_type').change(function(){
          let id=jQuery(this).val();
          jQuery('#main_accouns_name').html('<option value=""></option>')
          jQuery.ajax({
            url:'/updategetCategoryName',
            type:'post',
            data:'id='+id+'&_token={{csrf_token()}}',
            success:function(result){
              jQuery('#category_name').html(result)
            }
          });
        });
        
      jQuery('#category_name').change(function(){
        let id=jQuery(this).val();
        jQuery.ajax({
          url:'/updategetMainAccountsName',
          type:'post',
          data:'id='+id+'&_token={{csrf_token()}}',
          success:function(result){
            jQuery('#main_accouns_name').html(result)
          }
        });
      });
      
    });
  
</script>
@endsection
