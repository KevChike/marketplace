@extends('superadminBE_layout.template')

@section('content')


 <div class="col-md-12">
                <!-- START PANEL -->
                <div class="panel panel-transparent">
                  <div class="panel-heading">
                    <div class="panel-title"> {{$query}} Appointments 
                    </div>
                    <div class="tools">
                      <a class="collapse" href="javascript:;"></a>
                      <a class="config" data-toggle="modal" href="#grid-config"></a>
                      <a class="reload" href="javascript:;"></a>
                      <a class="remove" href="javascript:;"></a>
                    </div>
                  </div>
                  <div class="panel-body">
                    <div class="table-responsive">
                      <div id="condensedTable_wrapper" class="dataTables_wrapper form-inline no-footer"><table class="table table-hover table-condensed dataTable no-footer" id="condensedTable" role="grid">
                        <thead>
                          <tr role="row"><th style="width:30%" class="sorting_asc" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending">user</th><th style="width: 118px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Key: activate to sort column ascending">therapist</th><th style="width: 158px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">status</th></tr>
                        </thead>
                        <tbody>
                          
                          
                          
                          
                          @forelse($appointments as $appointment)
                        <tr role="row" class="odd">
                            <td class="v-align-middle semi-bold sorting_1">{{$appointment->user->first_name}}  {{$appointment->user->last_name}}</td>
                            <td class="v-align-middle">
                              
                              {{$appointment->therapist->first_name}}  {{$appointment->therapist->last_name}}
                            </td>
                            <td class="v-align-middle semi-bold">
                              {{$appointment->status}}
                            </td>
                          </tr>
                          @empty
                          no {{$query}} appointment currently
                          @endforelse


                        </tbody>
                      </table></div>
                    </div>
                  </div>
                </div>
                <!-- END PANEL -->
              </div>


@endsection