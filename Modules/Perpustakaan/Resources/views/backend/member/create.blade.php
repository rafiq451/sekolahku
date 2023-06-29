@extends('layouts.backend.app')

@section('title')
    Tambah Member
@endsection

@section('content')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2>Tambah Member</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <section>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Form Tambah Member</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('member.store') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="user_id">User</label>
                                                        <select name="user_id" class="select2 form-control @error('user_id') is-invalid @enderror">
                                                            <option value="">-- Pilih --</option>
                                                            @foreach ($user as $users)
                                                                <option value="{{ $users->id }}">{{ $users->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('user_id')
                                                        <div class="invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
