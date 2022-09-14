@extends('layout.admin')

@section('content')
     <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                    

                              <div class="row">
                        
                              <!-- Icon Cards-->
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                                    <div class="inforide">
                                      <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                            <h4>Total Workers</h4>
                                            <h2>{{ App\Models\Worker::count()}}</h2>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                        
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                                    <div class="inforide">
                                      <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                            <h4>Total Users</h4>
                                            <h2>{{ App\Models\User::count()}}</h2>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                                    <div class="inforide">
                                      <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                            <h4>Total Records</h4>
                                            <h2>{{ App\Models\Record::count()}}</h2>
                                        </div>
                                      </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                                    <div class="inforide">
                                      <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                            <h4>Vaccinated Records</h4>
                                            <h2>{{ App\Models\Record::where('vac_status',true)->count()}}</h2>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                                    <div class="inforide">
                                      <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                            <h6>Non Vaccinated Records</h6>
                                            <h2 style="margin-top: 9px!important;">{{ App\Models\Record::where('vac_status',false)->count()}}</h2>
                                        </div>
                                      </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                                    <div class="inforide">
                                      <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                            <h4>Total Compaigns</h4>
                                            <h2>{{ App\Models\Campaign::count()}}</h2>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                                    <div class="inforide">
                                      <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                            <h4>Active Compaigns</h4>
                                            <h2>    {{ App\Models\Campaign::where('start','<=',Carbon\Carbon::today())->where('end','>=',Carbon\Carbon::today())->count() }}
                                            </h2>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                                    <div class="inforide">
                                      <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                            <h6>Unactive Compaigns</h6>
                                            <h2>    {{ App\Models\Campaign::where('end','<=',Carbon\Carbon::today())->count() }}
                                            </h2>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>

                        
                    </div>
@endsection