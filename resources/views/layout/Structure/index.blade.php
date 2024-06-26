@extends('template.templatepage.index')
<style>
  .rightbar{
    margin-left: 250px;
  }
  body {
    background-color: #f2f4fb;
}
  @media only screen and (max-width: 992px) {
        .rightbar {
            margin-left: 0px;
        }
    }
</style>
@section('content')
    <!-- SideBar -->
    @include('components.sidebar.index')
    <!-- Left Content -->
    <div class="rightbar">
      @yield('homeContent')
    </div>
@endsection
