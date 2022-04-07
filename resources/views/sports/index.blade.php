@extends('layouts.application')

@section('page-contents')
  <form method="GET" action="{{url('sports')}}">
    <div class="row d-flex justify-content-end">
      <div class="col-4">
        <input name="q" class="form-control" placeholder="Type Here ID or Name of sport..." />
      </div>
      <div class="col-auto">
        <button class="btn btn-primary">Search</button>
      </div>
    </div>
  </form>

  <div class="table-responsive mt-4">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th width="15%"></th>
        </tr>
      </thead>

      <tbody>
        @forelse ($sports as $sport)
            @include('sports._sport', [ 'sport' => $sport ])
        @empty
          <tr class="text-center">
            <td colspan="3" class="pt-5 pb-5">Empty Sports</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  @if ($paginatable)
    <div class="d-flex justify-content-end">
      {{ $sports->links() }}
    </div>
  @endif
@stop