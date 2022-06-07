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


@foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>
@endforeach


<div class="card-header">

<!-- form strt -->
<form action="{{route('fixed_assets.save')}}" method="POST" enctype="multipart/form-data">
  @csrf
            
  <div class="container-fluid">
    <div class="row">

      <!-- 1st col strt --> 
        <div class="col-sm-4">                   
          <div class="form-group row col-md-12">                 
            <label for="input" class="col-sm-6 col-form-label">Accounts type</label>
               <div class="col-sm-6">
                 <!--   <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="account_type">--> 
                 <select class="custom-select mr-sm-2" name="account_type"  id="account_type"> 
                   <option value="">Select</option>              
                          @foreach($acc_type as $list)
                            <option value="{{$list->id}}">{{$list->name}}</option>
                          @endforeach
                  </select>
                </div>
           </div>

            <div class="form-group row col-md-12">
               <label for="input" class="col-sm-6 col-form-label">Category name</label>
                <div class="col-sm-6">
                  <select class="custom-select mr-sm-2" id="category_name" name="category_name">                           
                  <option value=""> </option>
                  </select>
                </div>
            </div>

          <div class="form-group row col-md-12">
            <label for="input" class="col-sm-6 col-form-label">Main accounts name </label>
              <div class="col-sm-6">
                 <select class="custom-select mr-sm-2" id="main_accouns_name" name="main_accouns_name">
                 <option value=""> </option>
                </select>
              </div>
          </div>

          <div class="form-group row col-md-12">
            <label for="input" class="col-sm-6 col-form-label">Ledger accounts name</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="legger_accouns_name">
              </div>
          </div>
        </div>
      <!-- 1st col end--> 

      <!-- 2nd col strt --> 
         <div class="col-sm-4">
           <div class="form-group row col-md-12">
             <label for="input" class="col-sm-6 col-form-label">Active</label>
               <div class="col-sm-6">
                 <input style="margin-left:auto; margin-right:auto;" class="form-check-input" type="checkbox" id="autoSizingCheck" name="active">
               </div>
            </div>

          <div class="form-group row col-md-12">
            <label for="input" class="col-sm-6 col-form-label">Category code</label>
              <div class="col-sm-6">
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="category_code">
                <option selected>Choose...</option>
                @foreach($categ_name as $list) <option >{{$list->code}}</option>  @endforeach
                </select>
              </div>
          </div> 

          <div class="form-group row col-md-12">
            <label for="input" class="col-sm-6 col-form-label">Main accouns code</label>
              <div class="col-sm-6">
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="main_accouns_code">
                 <option selected>Choose...</option>
                 @foreach($control_account as $list) <option >{{$list->code}}</option>  @endforeach 
                </select>
               </div>
          </div>

          <div class="form-group row col-md-12">
            <label for="input" class="col-sm-6 col-form-label">Ledger accouns code</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="" name="Legger_accouns_code">
              </div>
          </div>
        </div>
      <!-- 2nd col end --> 

      <!-- 3rd col start --> 

        <div class="col-sm-4">
          <div class="form-group row col-md-12">
            <label for="input" class="col-sm-6 col-form-label">Cost</label>
             <div class="col-sm-6">
              <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="" name="cost">
             </div>
          </div>

          <div class="form-group row col-md-12">
            <label for="input" class="col-sm-6 col-form-label">Life time</label>
              <div class="col-sm-6">
                 <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="" name="life_time">
              </div>
          </div>

          <div class="form-group row col-md-12">
            <label for="input" class="col-sm-6 col-form-label">Depreciation rate (%)</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="" name="depreciation_rate">
              </div>
          </div>

          <div class="form-group row col-md-12">
           <label for="input" class="col-sm-6 col-form-label">Depreciation method </label>
             <div class="col-sm-6">
               <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="depreciation_method">
                 <option selected>Choose...</option>
                 @foreach($depreMethods as $list) <option >{{$list->name}}</option>  @endforeach
               </select>
              </div>
          </div>

          <div class="form-group row col-md-12">
            <label for="input" class="col-sm-6 col-form-label">Date of depreciation</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="" name="date_of_depreciation">
              </div>
          </div>

           <div class="flex-parent jc-center">
             <button type="reset" class="btn btn-primary btn-sm" >Clear</button>
               &nbsp
             <button type="submit" class="btn btn-primary btn-sm" >Create</button>
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

                    <!-- card 2 start --> 

                    <div class="card bg-light mb-3" style="max-width: 70rem;"> 
                        <div class="card-header">

                        <table id="table_id" class="display">
                            <thead>
                            <tr>
                                <th>Accouns type</th>
                                <th>Category code</th>
                                <th>Category name</th>
                                <th>Main accouns code</th>
                                <th>Main accouns name </th>
                                <th>Legger accouns code</th>
                                <th>Legger accouns name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                        @foreach($fixeddata as $data)
                        <tbody> 
                            <tr>
                                <td>{{$data->accountType->name}}</td>
                                <td>{{$data->category_code}}</td>
                                <td>{{$data->categoryName->name}}</td>
                                <td>{{$data->main_account_code}}</td>
                                <td>{{$data->main_account_name}}</td>
                                <td>{{$data->ledger_account_code}}</td>
                                <td>{{$data->ledger_account_name}}</td>
                                <td>{{$data->status}}</td>
                                <td>   
                                    <div style="width:40px;">
                                        <div style="float: left; width: 10px"> 
                                           <a href="{{ route('fixed_assets.edit', $data->id) }}"><img src="/icons/pen.png" style="width:20px; height:20px;"></a>
                                        </div>
                                        <div style="float: right; width: 10px">                     
                                         <form method="GET" action="{{ route('fixed_assets.delete', $data->id) }}">
                                            <a  type="submit" class="show_confirm" data-toggle="tooltip" title='Delete'> <img src="/icons/remove.png" style="width:20px; height:20px;"></a>                   
                                         </form>
                                        </div>
                                    </div>              
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                        </table>
                     </div>
                    </div>
                        <!-- card 2 end --> 
                    </div>
                 </div>
              </body>



              <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
                    <script type="text/javascript">
                    
                        $('.show_confirm').click(function(event) {
                            var form =  $(this).closest("form");
                            var name = $(this).data("name");
                            event.preventDefault();
                            swal({
                                title: `Are you sure you want to delete this record?`,
                                text: "If you delete this, it will be gone forever.",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                form.submit();
                                }
                            });
                        });
                    
                    </script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
                    <script>
                            jQuery(document).ready(function(){
                              jQuery('#account_type').change(function(){
                                let id=jQuery(this).val();
                                jQuery('#main_accouns_name').html('<option value="">Select</option>')
                                jQuery.ajax({
                                  url:'/getCategoryName',
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
                                  url:'/getMainAccountsName',
                                  type:'post',
                                  data:'id='+id+'&_token={{csrf_token()}}',
                                  success:function(result){
                                    jQuery('#main_accouns_name').html(result)
                                  }
                                });
                              });
                              
                            });
  
                            </script>
                                     
   </div>
</div>
</body>


@endsection
