{{-- menampilkan layout yang didefinisikan di file layouts/app.blade.php --}}
@extends('layouts.app')

{{-- menentukan bagian content --}}
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    {{-- terdapat tombol "Create Employee" yang akan mengarahkan ke halaman pembuatan karyawan baru --}}
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Create Employee</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white ">
                <thead>
                    <tr class="text-center">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- melakukan perulangan (looping) untuk setiap elemen dalam$employees, dimana setiap elemen tersebut akan disimpan dalam variabel $employee. --}}
                    @foreach ($employees as $employee)
                    {{-- menampilkan data karyawan  --}}
                        <tr>
                            <td>{{ $employee->firstname }}</td>
                            <td>{{ $employee->lastname }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->age }}</td>
                            <td>{{ $employee->position->name }}</td>
                            <td>
                                {{-- action section --}}
                                @include('employee.actions')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection

