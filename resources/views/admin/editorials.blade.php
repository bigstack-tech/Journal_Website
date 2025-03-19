@extends('layouts.dashboard')
@section('dash')
    <div class="container-fluid py-4">
        
      <div class="row min-vh-80">
        <div class="col-12">
          <div class="card mt-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">View / Create Editorials</h6>
                </p>
              </div>
            </div>
            <div class="card-body px-5">
                <br>
                    <div>
                        <button type="button" class="btn btn-secondary"><a href="{{ route('create.editorials') }}" style="color:#fff;">Create new Editorial</a></button>
                    </div>
                    <br>
                <div class="table-responsive p-0">
                <table class="table mb-0">
                    <thead>
                        <tr>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Name</th>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Email</th>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Institution/Organization</th>
                          <th class="text-secondary text-uppercase font-weight-bolder opacity-7">Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    @foreach ($data as $editorial)
                        <tr>
                            <td>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-0 text-sm">{{ $editorial->name }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-0 text-sm">{{ $editorial->email }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-0 text-sm">{{ $editorial->institute }}</h6>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('remove.editorials', $editorial->id) }}" method="POST">
                                    @csrf
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Remove Editor</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-body">
                                            Are you sure you want to remove this editor?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Yes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </form>
                                    &nbsp;
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              
                <!--<div>-->
                <!--    <br>-->
                <!--    <div>-->
                <!--        <a href="{{ route('create.editorials') }}" style="background-color:lightgreen; padding:15px">Create new Editorial</a>-->
                <!--    </div>-->
                <!--    <br>-->
                <!--    <br>-->
                <!--    <div>-->
                <!--       <h3>List of Editorials</h3>-->
                <!--    </div>-->
                <!--    <div>-->
                <!--        @foreach ($data as $editorial)-->
                <!--        <div style="display:flex; border: 1px solid silver; margin-bottom:10px; padding 10px">-->
                <!--            <div style="flex-basis:60%">-->
                <!--                <h4>Name: {{ $editorial->name }}</h4>-->
                <!--                <p>Email: {{ $editorial->email }}</p>-->
                <!--                <p>Institute: {{ $editorial->institute }}</p>-->
                <!--            </div>-->
                <!--            <div style="display:flex">-->
                <!--                <a href="{{ route('remove.editorials', $editorial->id) }}" style="padding:10px; background-color: red">Remove Editorial</a>-->
                                
                <!--            </div>-->
                <!--        </div>-->
                <!--        @endforeach-->
                <!--    </div>-->
                <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    
    </div>

@endsection