<html>
@include('partials.head')

<body>
  @include('partials.navbar')
  <div class="container mt-3">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    @yield('page-contents')
  </div>
</body>
@include('partials.footer')

</html>