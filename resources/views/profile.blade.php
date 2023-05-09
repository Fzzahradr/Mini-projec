@extends('admin')

@section('content')
<style>
    .profile-container {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .profile-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .profile-info {
        margin-bottom: 20px;
    }

    .profile-info label {
        font-weight: bold;
    }
</style>

<div class="profile-container">
    <div class="profile-header">
    <img src="{{ asset('images/images.png') }}" alt="Image">
        <h2>User Profile</h2>
    </div>

    <div class="profile-info">
        <label>Name:</label>
        <span>{{ auth()->user()->name }}</span>
    </div>

    <div class="profile-info">
        <label>Email:</label>
        <span>{{ auth()->user()->email }}</span>
    </div>
    </div>
</div>
<!-- Ajoutez ici le contenu spécifique à la page de profil de l'administration -->
@endsection
