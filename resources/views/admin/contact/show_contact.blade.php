@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Message Details </h4>

                            <form method="" action="" >
                                @csrf

                                <input type="hidden" name="id" value="{{ $contact->id }}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <h3>{{ $contact->name }}</h3>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <h4>{{ $contact->email }}</h4>
                                    </div>
                                </div>

                                <!-- end row -->



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Subject
                                    </label>
                                    <div class="col-sm-10">
                                        <p> {!! $contact->subject !!} </p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <h4>{{ $contact->phone }}</h4>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Message</label>
                                    <div class="col-sm-10">
                                        <h4>{{ $contact->message }}</h4>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Message</label>
                                    <div class="col-sm-10">
                                        <h4>{{ $contact->created_at }}</h4>
                                    </div>
                                </div>



                                <!-- end row -->
                                <a href="{{ route('contact.message') }}">
                                    <button type="button"
                                        class="btn btn-primary w-xs waves-effect waves-light">Back</button>
                                </a>

                            </form>



                        </div>
                    </div>
                </div> <!-- end col -->
            </div>



        </div>
    </div>
@endsection
