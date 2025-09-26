@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       {{-- Sidebar --}}
<div class="col-md-3 col-lg-2 p-0 bg-dark text-white min-vh-100">
    <div class="d-flex flex-column flex-shrink-0 p-3">
        
        <ul class="nav nav-pills flex-column mb-auto">
            <li><a href="{{ route('banners.index') }}" class="nav-link text-white">🏠 Home Banner</a></li>
            <li><a href="" class="nav-link text-white">❓ Why Us</a></li>
            <li><a href="" class="nav-link text-white">📊 Stats</a></li>
            <li><a href="" class="nav-link text-white">🛠 Services</a></li>
            <li><a href="" class="nav-link text-white">⚙ Process</a></li>
            <li><a href="" class="nav-link text-white">🤝 Partners</a></li>
            <li><a href="" class="nav-link text-white">👨‍💼 CEO Section</a></li>
            <li><a href="" class="nav-link text-white">📰 Blogs</a></li>
            <li><a href="" class="nav-link text-white">👥 Team</a></li>
            <li><a href="" class="nav-link text-white">❓ FAQ</a></li>
            <li><a href="" class="nav-link text-white">📩 Contact</a></li>
            <li><a href="" class="nav-link text-white">📍 Location</a></li>
            <li><a href="" class="nav-link text-white">📑 Footer</a></li>
        </ul>
    </div>
</div>


        {{-- Main content --}}
      {{-- Main content --}}
<div class="col-md-9 col-lg-10">
    <div class="p-4">
        <h1 class="mb-4">Dashboard</h1>
        <p>Welcome to your CMS Dashboard. Choose a section from the sidebar to manage.</p>

        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5>Home Banner</h5>
                        <a href="" class="btn btn-sm btn-primary mt-2">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5>Services</h5>
                        <a href="" class="btn btn-sm btn-primary mt-2">Manage</a>
                    </div>
                </div>
            </div>
            {{-- repeat for other sections --}}
        </div>
    </div>
</div>

    </div>
</div>
@endsection
