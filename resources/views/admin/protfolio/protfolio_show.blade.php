@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Protfolio Edit Page </h4>

                            <form method="" action="" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $portfolio->id }}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Name</label>
                                    <div class="col-sm-10">
                                        <h3>{{ $portfolio->portfolio_name }}</h3>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Title </label>
                                    <div class="col-sm-10">
                                         <h4>{{ $portfolio->portfolio_title }}</h4>
                                    </div>
                                </div>

                                <!-- end row -->



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Description
                                    </label>
                                    <div class="col-sm-10">
                                        <p> {!! $portfolio->portfolio_description !!} </p>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Image </label>

                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg " style="width:500px;height:600px;"
                                            src="{{ asset($portfolio->portfolio_image) }}" alt="Card image cap">
                                    </div>
                                </div>
                                <!-- end row -->
                                <a href="{{route('all.portfolio')}}">
                                    <button type="button" class="btn btn-primary w-xs waves-effect waves-light">Back</button>
                                </a>

                            </form>



                        </div>
                    </div>
                </div> <!-- end col -->
            </div>



        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
