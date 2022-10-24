@extends('layouts.template')

@section('title', 'Beranda')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Transaksi /</span> Transaksi Pengembalian</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Denda</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>
                            <a href="" class="btn btn-danger"><i class='bx bx-trash'></i></a>
                            <a href="" class="btn btn-primary"><i class='bx bx-edit-alt' ></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection