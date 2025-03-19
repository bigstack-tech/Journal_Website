@extends('layouts.dashboard')
@section('dash')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Listed Journal</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Organisation</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($journals as $journal)
                        <tr>
                            <td class="align-middle text-center">
                                <a href="" target="_blank">
                                    <p class="text-xs font-weight-bold mb-0">{{ $journal->title }}</p>
                                    <p class="text-xs text-secondary mb-0">{{ $journal->author_name }}</p>
                                </a>
                            </td>
                    
                            <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $journal->email }}</span>
                            </td>
                            <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $journal->institute_organization}}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                            @if($journal->status === 'Success')
                                <span class="badge badge-sm bg-gradient-success">Success</span>
                            @elseif($journal->status === 'Pending')
                                <span class="badge badge-sm bg-gradient-warning">Pending</span>
                            @elseif($journal->status === 'Rejected')
                                <span class="badge badge-sm bg-gradient-danger">Rejected</span>
                            @endif
                              
                            
                         </td>

                            <td class="align-middle text-center">
                            <a href="{{ route('reviews.index', ['id' => $journal->id]) }}" class="btn btn-success">Review</a>

                            <a href="{{ route('journals.edit', $journal->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('journals.destroy', $journal->id) }}" method="POST" class="d-inline">
                             @csrf
                            @method('DELETE')
                           <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                            </td>
                           
                        </tr>
                        
                  @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     @endsection