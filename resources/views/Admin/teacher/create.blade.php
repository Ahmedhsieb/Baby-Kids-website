@include('Admin.assets.navbar')



<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">

        <div class="container">

            <div class="row layout-top-spacing">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <h4>{{$error}}</h4>
                    @endforeach
                @endif

                <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create New Teacher</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <form method="post" action="{{route('admin.teacher.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Name</span>
                                    </div>
                                    <textarea class="form-control" name="name" aria-label="With textarea"></textarea>
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Description</span>
                                    </div>
                                    <textarea class="form-control" name="description"
                                              aria-label="With textarea"></textarea>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Image</span>
                                    </div>
                                    <input type="file" class="form-control" name="image" aria-label="With textarea">
                                </div>
                                <div class="input-group mb-4">
                                    <select name="course_id" class="placeholder js-states form-control">
                                        <option>Choose...</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->
@include('Admin.assets.footer')
