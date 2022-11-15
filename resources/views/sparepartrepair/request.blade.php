@extends('layouts.app')


@section('content')
    <div class="container-fluid">

        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        <H3>
                            <b> SPAREPART REPAIR REQUEST FORM </b>
                        </H3>
                    </button>
                </h3>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">

                        {{-- form input --}}

                        <form action="{{ route('waitingtable.store') }}" method="POST">
                            @csrf
                            <div class="container-fluid justify-content-center py-0">
                                <div class="container-fluid">
                                    <div class="row gx-3">
                                        <div class="col">
                                            <div class="p-3 border">

                                                <div class="mb-3 row">
                                                    <label for="tanggal" class="col-sm-2 col-form-label">Create at</label>
                                                    <div class="col-sm-10">
                                                        <input type="datetime-local" class="form-control" id="tanggal"
                                                            value="{{ Carbon\Carbon::now() }}" required disabled>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            id="nama" name="nama" required>

                                                        <!-- error message untuk nama -->
                                                        @error('nama')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="mb-3 row">
                                                    <label for="reg" class="col-sm-2 col-form-label">Reg / SP</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('reg') is-invalid @enderror"
                                                            id="reg" name="reg" required>

                                                        <!-- error message untuk reg -->
                                                        @error('reg')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="machine_name" class="col-sm-2 col-form-label">Machine
                                                        Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('machine_name') is-invalid @enderror"
                                                            id="machine_name" name="machine_name" required>

                                                        <!-- error message untuk machine_name -->
                                                        @error('machine_name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="line_name" class="col-sm-2 col-form-label">Line Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('line_name') is-invalid @enderror"
                                                            id="line_name" name="line_name" required>

                                                        <!-- error message untuk line_name -->
                                                        @error('line_name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="part_name" class="col-sm-2 col-form-label">Part Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('part_name') is-invalid @enderror"
                                                            id="part_name" name="part_name" required>

                                                        <!-- error message untuk part_name -->
                                                        @error('part_name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="part_type" class="col-sm-2 col-form-label">Part Type</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('part_type') is-invalid @enderror"
                                                            id="part_type" name="part_type" required>

                                                        <!-- error message untuk part_type -->
                                                        @error('part_type')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="serial_no" class="col-sm-2 col-form-label">Serial No</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('serial_no') is-invalid @enderror"
                                                            id="serial_no" name="serial_no" required>

                                                        <!-- error message untuk serial_no -->
                                                        @error('serial_no')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="maker" class="col-sm-2 col-form-label">Maker</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('maker') is-invalid @enderror"
                                                            id="maker" name="maker" required>

                                                        <!-- error message untuk maker -->
                                                        @error('maker')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row invisible">
                                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('status') is-invalid @enderror"
                                                            id="status" name="status" value="Waiting" required>

                                                        <!-- error message untuk status -->
                                                        @error('status')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col">

                                            <div class="p-3 border bg-light">

                                                <div class="mb-3 row">
                                                    <label for="problem" class="col-sm-2 col-form-label">Problem</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control @error('status') is-invalid @enderror" id="problem" name="problem" rows="3"
                                                            required> </textarea>

                                                        <!-- error message untuk status -->
                                                        @error('status')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                    </div>
                                                </div>


                                                {{-- <div class="mb-0 row after-add-more">
                    
                                                    <label for="detail_standard" class="col-sm-2 col-form-label">Detail Standard</label>
                    
                                                    <div class="col-sm-4">
                                                        <select class="form-select" id="detail_standard" name="detail_standard[]">
                                                            <option selected disabled value="">Pilih</option>
                                                            <option>Ampere</option>
                                                            <option>Gaya</option>
                                                            <option>Dan lain lain</option>
                                                        </select>
                                                    </div>
                    
                                                    <label for="detail_standard" class="col-sm-1 col-form-label">Value</label>
                    
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="detail_standard"
                                                            name="detail_standard[]">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button class="btn btn-primary add-more" type="button">+</button>
                                                    </div>
                                                </div>
                                --}}
                                                {{-- COPY INISIBLE FORM --}}

                                                {{-- <div class="copy invisible">
                                                    <div class="control-group">
                                                        <div class="mb-0 row">
                    
                                                            <label for="detail_standard" class="col-sm-2 col-form-label">Detail
                                                                Standard</label>
                    
                                                            <div class="col-sm-4">
                                                                <select class="form-select" id="detail_standard" name="detail_standard[]">
                                                                    <option selected disabled value="">Pilih</option>
                                                                    <option>Ampere</option>
                                                                    <option>Gaya</option>
                                                                    <option>Dan lain lain</option>
                                                                </select>
                                                            </div>
                    
                                                            <label for="detail_standard" class="col-sm-1 col-form-label">Value</label>
                    
                                                            <div class="col-sm-3">
                                                                <input type="text" class="form-control" id="detail_standard"
                                                                    name="detail_standard[]">
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button class="btn btn-danger remove" type="button">-</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="row">
                                                    <center>
                                                        <h3>DETAIL STANDARD</h3>
                                                    </center>
                                                </div>
                                                <div class="row">
                                                    <div class="col">

                                                        {{-- DETAIL STANDARD KIRI 1 --}}
                                                        <div class="mb-3 row">
                                                            <label for="ampere"
                                                                class="col-sm-6 col-form-label">Ampere</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="ampere"
                                                                    name="ampere">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KIRI 2 --}}
                                                        <div class="mb-3 row">
                                                            <label for="meger"
                                                                class="col-sm-6 col-form-label">Meger</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="meger"
                                                                    name="meger">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KIRI 3 --}}
                                                        <div class="mb-3 row">
                                                            <label for="pressure"
                                                                class="col-sm-6 col-form-label">Pressure</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="pressure"
                                                                    name="pressure">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KIRI 4 --}}
                                                        <div class="mb-3 row">
                                                            <label for="flow"
                                                                class="col-sm-6 col-form-label">Flow</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="flow"
                                                                    name="flow">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KIRI 5 --}}
                                                        <div class="mb-3 row">
                                                            <label for="temperature"
                                                                class="col-sm-6 col-form-label">Temperature</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    id="temperature" name="temperature">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KIRI 6 --}}
                                                        <div class="mb-3 row">
                                                            <label for="rpm"
                                                                class="col-sm-6 col-form-label">Rpm</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="rpm"
                                                                    name="rpm">
                                                            </div>
                                                        </div>



                                                    </div>


                                                    <div class="col">

                                                        {{-- DETAIL STANDARD KANAN 1 --}}
                                                        <div class="mb-3 row">
                                                            <label for="ohm"
                                                                class="col-sm-6 col-form-label">Ohm</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="ohm"
                                                                    name="ohm">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KANAN 2 --}}
                                                        <div class="mb-3 row">
                                                            <label for="volt"
                                                                class="col-sm-6 col-form-label">Volt</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="volt"
                                                                    name="volt">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KANAN 3 --}}
                                                        <div class="mb-3 row">
                                                            <label for="flatness"
                                                                class="col-sm-6 col-form-label">Flatness</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="flatness"
                                                                    name="flatness">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KANAN 4 --}}
                                                        <div class="mb-3 row">
                                                            <label for="gather"
                                                                class="col-sm-6 col-form-label">Gather</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="gather"
                                                                    name="gather">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KANAN 5 --}}
                                                        <div class="mb-3 row">
                                                            <label for="load"
                                                                class="col-sm-6 col-form-label">Load</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="load"
                                                                    name="load">
                                                            </div>
                                                        </div>

                                                        {{-- DETAIL STANDARD KANAN 6 --}}
                                                        <div class="mb-3 row">
                                                            <label for="runout"
                                                                class="col-sm-6 col-form-label">Runout</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    name="runout">
                                                            </div>
                                                        </div>


                                                    </div>


                                                </div>

                                                <button type="submit" class="btn btn-md btn-primary">Save</button>
                                                <a href="{{ route('waitingtable.index') }}"
                                                    class="btn btn-md btn-secondary">back</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall
                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                        custom CSS or overriding our default variables. It's also worth noting that just about any HTML can
                        go
                        within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall
                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                        custom CSS or overriding our default variables. It's also worth noting that just about any HTML can
                        go
                        within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notifikasi menggunakan flash session data -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif





    <!-- fungsi javascript untuk menampilkan form dinamis  -->
    <!-- penjelasan : saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
    <script type="module">
        $(document).ready(function() {
            $(".add-more").click(function() {
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });

            // saat tombol remove dklik control group akan dihapus 
            $("body").on("click", ".remove", function() {
                $(this).parents(".control-group").remove();
            });
        });
    </script>
@endsection
