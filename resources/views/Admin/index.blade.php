@include('Admin.assets.navbar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div id="tableLight" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-hover table-light mb-4">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                    <tr>
                                        <td class="text-center">{{++$key}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->password}}</td>
                                        <td class=" text-center"><a href="{{route('admin.delete',[$user->id])}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
