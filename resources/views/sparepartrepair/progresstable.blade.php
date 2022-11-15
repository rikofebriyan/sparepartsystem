@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <H2>INVENTORY MANAGEMANT SYSTEMasdasd</H2>
    </div>

    <!-- error message untuk title -->
    @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <div class="card border-0 shadow rounded overflow-auto">
        <div class="card-body">
            <a href="{{ route('/') }}" class="btn btn-md btn-success mb-3 float-right">New
                Post</a>

            <table id="example" class="table table-striped nowrap overflow-auto display">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Reg / SP</th>
                        <th scope="col">Machine Name</th>
                        <th scope="col">Line Name</th>
                        <th scope="col">Part Name</th>
                        <th scope="col">Part Type</th>
                        <th scope="col">Serial No</th>
                        <th scope="col">Maker</th>
                        <th scope="col">Problem</th>
                        <th scope="col">ampere</th>
                        <th scope="col">meger</th>
                        <th scope="col">pressure</th>
                        <th scope="col">flow</th>
                        <th scope="col">temperature</th>
                        <th scope="col">rpm</th>
                        <th scope="col">ohm</th>
                        <th scope="col">volt</th>
                        <th scope="col">flatness</th>
                        <th scope="col">gather</th>
                        <th scope="col">load</th>
                        <th scope="col">runout</th>
                        <th scope="col">type_of_part</th>
                        <th scope="col">sparepart_ETA</th>
                        <th scope="col">part_price</th>
                        <th scope="col">stock_sparepart</th>
                        <th scope="col">urgency</th>
                        <th scope="col">Status</th>
                        <th scope="col">Create At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reqtzy as $req)
                        <tr>
                            <td>{{ $req->id }}</td>
                            <td>{{ $req->nama }}</td>
                            <td>{{ $req->reg }}</td>
                            <td>{{ $req->machine_name }}</td>
                            <td>{{ $req->line_name }}</td>
                            <td>{{ $req->part_name }}</td>
                            <td>{{ $req->part_type }}</td>
                            <td>{{ $req->serial_no }}</td>
                            <td>{{ $req->maker }}</td>
                            <td>{{ $req->problem }}</td>
                            <td>{{ $req->ampere }}</td>
                            <td>{{ $req->meger }}</td>
                            <td>{{ $req->pressure }}</td>
                            <td>{{ $req->flow }}</td>
                            <td>{{ $req->temperature }}</td>
                            <td>{{ $req->rpm }}</td>
                            <td>{{ $req->ohm }}</td>
                            <td>{{ $req->volt }}</td>
                            <td>{{ $req->flatness }}</td>
                            <td>{{ $req->gather }}</td>
                            <td>{{ $req->load }}</td>
                            <td>{{ $req->runout }}</td>
                            <td>{{ $req->type_of_part }}</td>
                            <td>{{ $req->sparepart_ETA }}</td>
                            <td>{{ $req->part_price }}</td>
                            <td>{{ $req->stock_sparepart }}</td>
                            <td>{{ $req->urgency }}</td>
                            <td>{{ $req->status }}</td>
                            <td>{{ $req->created_at->format('d-m-Y') }}</td>
                            <td class="text-center">

                                {{-- <a href="{{ route('progresstable.show', $req->id) }}" class="btn btn-sm btn-primary">EDIT</a> --}}
                                <div class="btn-group" role="group">

                                    <form action="{{ route('progresstable.show', $req->id) }}" method="get">
                                        <input type="hidden" name="id" id="id" value="{{ $req->id }}">
                                        <button type="submit" class="btn btn-sm btn-primary mx-1">EDIT</button>
                                    </form>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('progresstable.destroy', $req->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" id="id" value="{{ $req->id }}">
                                        <button type="submit" class="btn btn-sm btn-danger mx-1">HAPUS</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-mute" colspan="4">Data post tidak tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
