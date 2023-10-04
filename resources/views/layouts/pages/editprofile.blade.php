@extends('layouts.edit')

@section('title', 'Edit Profile')

@section('content')

<div class="col-md-10">
    <div class="card">
        <div class="card-body">
            <div class="title-card">
                <p>Profile Information</p>
                <p>Update your account's profile information and email address</p>
            </div>
            <div class="form-card">
                <form action="" method="post">
                    @csrf
                    <div class="form-profile">
                        <p>Username</p>
                        <input type="text" name="username" id="form-profile" placeholder="Silakan isi Username baru Anda di sini">
                    </div>
                    <div class="form-profile">
                        <p>Email</p>
                        <input type="text" name="email" id="form-profile" placeholder="Silakan isi Email baru Anda di sini">
                    </div>
                    <div class="form-profile">
                        <p>No. Telp</p>
                        <input type="text" name="notelp" id="form-profile" placeholder="Silakan isi No Telp baru Anda di sini">
                    </div>
                    <div class="form-profile">
                        <p>Alamat KTP</p>
                        <input type="text" name="alamat" id="form-profile" placeholder="Silakan isi Alamat KTP baru Anda di sini">
                    </div>
                    <button type="submit" class="button-submit">
                        <div class="button-icon">
                            <span class="material-symbols-outlined"> 
                                save
                            </span>
                        </div>
                            <div class="button-text">
                                <span class="button-text">Simpan</span>
                            </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

