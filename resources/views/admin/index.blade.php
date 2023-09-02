@extends('admin.layouts.master')

@section('content')
    <AdminApp />
@endsection

@section('scripts')
    <script>
        var token = localStorage.getItem("token");
        if (token) {
            var role = JSON.parse(localStorage.getItem("role"));
            if (role == "admin") {
            } else {
                window.location.replace("http://localhost:8000/");
            }
        } else {
            window.location.replace("http://localhost:8000/");
        }
    </script>
@endsection
