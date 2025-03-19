@extends('layouts.dashboard')
@section('dash')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">View Pending Publications</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">View</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Posted</th>
                          <th class="text-secondary text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Action</th>
                        </tr>
                      </thead>
                  <tbody>
                  @foreach($pendingJournals as $journal)
                  
                    <tr>
                      
                            <td>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{ $journal->author_name }}</h6>
                                        <p class="text-xs text-secondary mb-0">{{ $journal->email }}</p>
                                </div>
                                </div>
                            </td>
                            <td>
                                <a href="/post/{{ $journal->file }}" target="_blank">
                                    <p class="text-xs font-weight-bold mb-0">{{ $journal->title }}</p>
                                    <!--<p class="text-xs text-secondary mb-0">{{ $journal->abstract }}</p>-->
                                </a>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">{{ $journal->status }}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{ $journal->created_at }}</span>
                            </td>
                            <td class="align-middle">

                            <a href="{{ route('reviews.index', ['id' => $journal->id]) }}" type="button" class="btn btn-primary set-this-display-show" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Review</a>
                            <a href="{{ route('journals.edit', $journal->id) }}" type="button" class="btn btn-primary set-this-display-show" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>


                            <form action="{{ route('update.journalStatus', $journal->id) }}" method="POST">
    @csrf
    <input type="hidden" name="status" value="Approved">

    <button type="button" class="btn btn-success set-this-display-show" data-bs-toggle="modal" data-bs-target="#approveModal{{ $journal->id }}" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Approve</button>

    <!-- Modal -->
    <div class="modal fade" id="approveModal{{ $journal->id }}"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    Are you sure you want to Approve this Journal?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" value="Approve Journal" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Approve</button>
                </div>
            </div>
        </div>
    </div>
</form>

                                <form action="{{ route('update.journalStatus', $journal->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="Rejected">
                                    <!--<input type="submit"  style="padding:10px; background-color: red">-->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $journal->id }}" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Reject</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="rejectModal{{ $journal->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-body">
                                            Are you sure you want to Reject this Journal? <br>This cannot be undone.
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" value="Reject Journal" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Reject</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
    
    </div>
@endsection