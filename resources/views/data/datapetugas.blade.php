@extends('layouts.template')

@section('title', 'Beranda')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Data Petugas</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>NIP</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>
                            <a href="" class="btn btn-danger">Hapus</a>
                            <a href="" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection