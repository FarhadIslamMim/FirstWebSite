@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">About Page </h4>

                            <form method="get" action="" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text"
                                            value="{{ $aboutShow->title }}" id="example-text-input" readonly>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                                    <div class="col-sm-10">
                                        <input name="short_title" class="form-control" type="text"
                                            value="{{ $aboutShow->short_title }}" id="example-text-input" readonly>
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Description
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea required="" name="short_description" class="form-control" rows="5" readonly>
                                      {{ $aboutShow->short_description }}
                                    </textarea>
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Long Description
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="long_description" readonly >
                                      {{ $aboutShow->long_description }}
                                     </textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
                                    {{-- <div class="col-sm-10">
                                        <input name="about_image" class="form-control" type="file" id="image">
                                    </div> --}}
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-10">
                                        <img style="width:500px;height:600px;" id="showImage" class="rounded avatar-lg"
                                            src="{{ !empty($aboutShow->about_image) ? url($aboutShow->about_image) : url('upload/nullimage.jpg') }}"
                                            alt="About Image">
                                    </div>
                                </div>
                                <!-- end row -->




                                <!--Education 1-->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Institute Name</label>
                                    <div class="col-sm-10">
                                        <input name="institute_name1" class="form-control" type="text"
                                            value="{{ $aboutShow->institute_name1 }}" id="example-text-input" readonly>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Year</label>
                                    <div class="col-sm-10">
                                        <input name="year1" class="form-control" type="text" value="{{ $aboutShow->year1 }}"
                                            id="example-text-input" readonly>
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">CGPA & Description
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea required="" name="cgpa_description1" class="form-control" rows="5" readonly >
                                      {{ $aboutShow->cgpa_description1 }}
                                    </textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <!--Education 2-->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Institute Name</label>
                                    <div class="col-sm-10">
                                        <input name="institute_name2" class="form-control" type="text" value="{{ $aboutShow->institute_name2}}"
                                            id="example-text-input" readonly>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Year</label>
                                    <div class="col-sm-10">
                                        <input name="year2" class="form-control" type="text" value="{{ $aboutShow->year2 }}"
                                            id="example-text-input" readonly>
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">CGPA & Description
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea required="" name="cgpa_description2" class="form-control" rows="5" readonly>
                                      {{ $aboutShow->cgpa_description2 }}
                                    </textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <!--Education 2-->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Institute Name</label>
                                    <div class="col-sm-10">
                                        <input name="institute_name3" class="form-control" type="text" value="{{ $aboutShow->institute_name3 }}"
                                            id="example-text-input" readonly>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Year</label>
                                    <div class="col-sm-10">
                                        <input name="year3" class="form-control" type="text" value="{{ $aboutShow->year3 }}"
                                            id="example-text-input" readonly>
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">CGPA & Description
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea required="" name="cgpa_description3" class="form-control" rows="5" readonly>
                                      {{ $aboutShow->cgpa_description3 }}
                                    </textarea>
                                    </div>
                                </div>
                                <!-- end row -->




                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Update About Page">
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
