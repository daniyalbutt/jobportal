@extends('layouts.app')

@section('content')
<div class="page_title_section">
    <div class="page_header">
        <div class="container">
            <div class="row">
                <!-- section_heading start -->
                <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">
                    <h1>My Profile</h1>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                            <li>My Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="candidate_dashboard_wrapper jb_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="emp_dashboard_sidebar jb_cover">
                    @if(Auth::user()->profile != null)
                    @if(Auth::user()->profile->user_image != null)
                    <img src="{{ asset('users') }}/{{ Auth::user()->profile->user_image }}" alt="" class="img-responsive">
                    @else
                    <img src="{{ asset('images/profile.jpg') }}" alt="post_img" class="img-responsive">
                    @endif
                    @else
                    <img src="{{ asset('images/profile.jpg') }}" alt="post_img" class="img-responsive">
                    @endif
                    <div class="emp_web_profile candidate_web_profile jb_cover">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p>{{ Auth::user()->email }}</p>
                        <div class="skills jb_cover">
                            <div class="skill-item jb_cover">
                                <h6>profile<span>70%</span></h6>
                                <div class="skills-progress"><span data-value="70%"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="emp_follow_link jb_cover">
                        <ul class="feedlist">
                            <li><a href="{{ route('home') }}" class="link_active"><i class="fas fa-tachometer-alt"></i> dashboard </a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> log out  </a></li>
                        </ul>
                    </div>
                </div>
                <div class="modal fade delete_popup" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="delett_cntn jb_cover">
                                        <h1><i class="fas fa-trash-alt"></i> delete account</h1>
                                        <p>Are you sure! You want to delete your profile. This
                                            <br> can't be undone!
                                        </p>
                                        <div class="delete_jb_form">
                                            <input type="password" name="password" placeholder="Enter Password">
                                        </div>
                                        <div class="header_btn search_btn applt_pop_btn">
                                            <a href="#">save updates</a>
                                        </div>
                                        <div class="cancel_wrapper">
                                            <a href="#" class="" data-dismiss="modal">cancel</a>
                                        </div>
                                        <div class="login_remember_box jb_cover">
                                            <label class="control control--checkbox">You accepts our <a href="#">Terms and Conditions </a> and <a href="#">Privacy Policy</a>
                                            <input type="checkbox">
                                            <span class="control__indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                @if (count($errors) > 0)
                <div class = "alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
                @endif
                <form action="{{ route('user.upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover mt-0">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="jp_job_post_side_img">
                                            @if(Auth::user()->profile != null)
                                            @if(Auth::user()->profile->user_image != null)
                                            <img src="{{ asset('users') }}/{{ Auth::user()->profile->user_image }}" alt="">
                                            @else
                                            <img src="{{ asset('images/profile.jpg') }}" alt="post_img">
                                            @endif
                                            @else
                                            <img src="{{ asset('images/profile.jpg') }}" alt="post_img">
                                            @endif
                                        </div>
                                        <div class="jp_job_post_right_cont edit_profile_wrapper">
                                            <h4>JPEG or PNG 500x500px Thumbnail</h4>
                                            <div class="width_50">
                                                <input type="file" id="input-file-now-custom-233" class="dropify" data-height="90" name="user_image" /><span class="post_photo">browse image</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="browse_img_banner jb_cover">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Full Name</label>
                                            <input type="text" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{ Auth::user()->email }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Phone <span>*</span></label>
                                            <input type="text" name="phone" required value="{{ Auth::user()->profile != null ? Auth::user()->profile->phone : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Website</label>
                                            <input type="text" name="website" value="{{ Auth::user()->profile != null ? Auth::user()->profile->website : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>job description <span>*</span></label>
                                            <input type="text" name="job_description" required value="{{ Auth::user()->profile != null ? Auth::user()->profile->job_description : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>address <span>*</span></label>
                                            <input type="text" name="address" required value="{{ Auth::user()->profile != null ? Auth::user()->profile->address : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>country <span>*</span></label>
                                            <input type="text" name="country" required value="{{ Auth::user()->profile != null ? Auth::user()->profile->country : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>state <span>*</span></label>
                                            <input type="text" name="state" required value="{{ Auth::user()->profile != null ? Auth::user()->profile->state : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>city <span>*</span></label>
                                            <input type="text" name="city" required value="{{ Auth::user()->profile != null ? Auth::user()->profile->city : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>zip code <span>*</span></label>
                                            <input type="text" name="zip_code" required value="{{ Auth::user()->profile != null ? Auth::user()->profile->zip_code : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>about us <span>*</span></label>
                                            <textarea name="about_us" id="" cols="30" rows="10" required>{{ Auth::user()->profile != null ? Auth::user()->profile->about_us : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="browse jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_filter_category_sidebar jb_cover">
                                            <div class="job_filter_sidebar_heading jb_cover">
                                                <h1> social networks</h1>
                                            </div>
                                            <div class="job_overview_header jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>google</label>
                                                            <input type="text" name="google" value="{{ Auth::user()->profile != null ? Auth::user()->profile->google : '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>facebook</label>
                                                            <input type="text" name="facebook" value="{{ Auth::user()->profile != null ? Auth::user()->profile->facebook : '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>twitter</label>
                                                            <input type="text" name="twitter" value="{{ Auth::user()->profile != null ? Auth::user()->profile->twitter : '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>linkedin</label>
                                                            <input type="text" name="linkedin" value="{{ Auth::user()->profile != null ? Auth::user()->profile->linkedin : '' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover mt-0">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> education background<span><a href="#" data-toggle="modal" data-target="#myModal4"><i class="fas fa-plus-circle"></i></a></span></h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 education_backgrounds">
                                            @if(Auth::user()->education != null)
                                            @foreach (Auth::user()->education as $education)
                                            <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>{{ $education->period }}</li>
                                                        <li>{{ $education->title }} <a href="javascript:;"> at {{ $education->institute }}</a></li>
                                                    </ul>
                                                    <p>{{ $education->description }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover mt-0">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>work experience <span><a href="#" data-toggle="modal" data-target="#myModal6"><i class="fas fa-plus-circle"></i></a></span></h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 work_experiences">
                                            @if(Auth::user()->work != null)
                                            @foreach (Auth::user()->work as $work)
                                            <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-suitcase"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>{{ $work->period }}</li>
                                                        <li>{{ $work->title }} <a href="javascript:;"> at {{ $work->company }}</a></li>
                                                    </ul>
                                                    <p>{{ $work->description }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover mt-0">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> special qualification <span><a href="#" data-toggle="modal" data-target="#myModal7"><i class="fas fa-plus-circle"></i></a></span></h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <ul class="speical_qualification_wrapper special_qualifications">
                                                @if(Auth::user()->qualifications != null)
                                                @foreach (Auth::user()->qualifications as $qualifications)
                                                <li><i class="fas fa-check-square"></i>{{ $qualifications->name }}</li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="login_remember_box jb_cover">
                                <div class="header_btn search_btn jb_cover">
                                    <button type="submit">save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade delete_popup company_popup" id="myModal4" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <form method="post" class="update-cv">
                @csrf
                <input type="hidden" name="source" value="education_backgrounds">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="delett_cntn jb_cover">
                            <h1><i class="fas fa-edit"></i>Add education background</h1>
                            <div class="category_wrapper jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="delete_jb_form gallery_link">
                                            <input type="text" name="data[title]" placeholder="Title" required>
                                        </div>
                                        <div class="delete_jb_form gallery_link">
                                            <input type="text" name="data[institute]" placeholder="Institute" required>
                                        </div>
                                        <div class="delete_jb_form gallery_link">
                                            <input type="text" name="data[period]" placeholder="Period" required>
                                        </div>
                                        <div class="delete_jb_form gallery_link">
                                            <textarea name="data[description]" rows="2" placeholder="Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header_btn search_btn applt_pop_btn">
                                <button type="submit">save updates</button>
                            </div>
                            <div class="cancel_wrapper">
                                <a href="#" data-dismiss="modal">cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade delete_popup company_popup" id="myModal6" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <form method="post" class="update-cv">
                @csrf
                <input type="hidden" name="source" value="work_experiences">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="delett_cntn jb_cover">
                            <h1><i class="fas fa-edit"></i>add experience</h1>
                            <div class="category_wrapper jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="delete_jb_form gallery_link">
                                            <input type="text" name="data[title]" placeholder="Title" required>
                                        </div>
                                        <div class="delete_jb_form gallery_link">
                                            <input type="text" name="data[company]" placeholder="Company" required>
                                        </div>
                                        <div class="delete_jb_form gallery_link">
                                            <input type="text" name="data[period]" placeholder="Period" required>
                                        </div>
                                        <div class="delete_jb_form gallery_link">
                                            <textarea name="data[description]" rows="2" placeholder="Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header_btn search_btn applt_pop_btn">
                                <button type="submit">save updates</button>
                            </div>
                            <div class="cancel_wrapper">
                                <a href="#" data-dismiss="modal">cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade delete_popup company_popup" id="myModal7" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <form method="post" class="update-cv">
                @csrf
                <input type="hidden" name="source" value="special_qualifications">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="delett_cntn jb_cover">
                            <h1><i class="fas fa-edit"></i>add qualification</h1>
                            <div class="category_wrapper gallery_browse jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="delete_jb_form gallery_link">
                                            <input type="text" name="data[name]" placeholder="List Here">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header_btn search_btn applt_pop_btn">
                                <button>save updates</button>
                            </div>
                            <div class="cancel_wrapper">
                                <a href="#" data-dismiss="modal">cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
        $('.update-cv').submit(function(e){
            e.preventDefault();
            var form = $(this);
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('update.cv') }}",
                type: 'POST',
                dataType: "json",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    if(data.response){
                        var source = data.source;
                        if(source == 'education_backgrounds'){
                            $('.education_backgrounds').prepend('<div class="jp_listing_overview_list_main_wrapper education_board jb_cover">\
                                                <div class="jp_listing_list_icon">\
                                                    <i class="fas fa-graduation-cap"></i>\
                                                </div>\
                                                <div class="jp_listing_list_icon_cont_wrapper">\
                                                    <ul>\
                                                        <li>'+data.data.period+'</li>\
                                                        <li>'+data.data.title+' <a href="javascript:;"> at '+data.data.institute+'</a></li>\
                                                    </ul>\
                                                    <p>'+data.data.description+'</p>\
                                                </div>\
                                            </div>');
                        }
                        if(source == 'work_experiences'){
                            $('.work_experiences').prepend('<div class="jp_listing_overview_list_main_wrapper education_board jb_cover">\
                                                <div class="jp_listing_list_icon">\
                                                    <i class="fas fa-suitcase"></i>\
                                                </div>\
                                                <div class="jp_listing_list_icon_cont_wrapper">\
                                                    <ul>\
                                                        <li>'+data.data.period+'</li>\
                                                        <li>'+data.data.title+' <a href="javascript:;"> at '+data.data.company+'</a></li>\
                                                    </ul>\
                                                    <p>'+data.data.description+'</p>\
                                                </div>\
                                            </div>');
                        }
                        if(source == 'special_qualifications'){
                            $('.special_qualifications').prepend('<li><i class="fas fa-check-square"></i>'+data.data.name+'</li>');
                        }
                        form[0].reset();
                        $('.delete_popup').modal('hide');
                    }
                }
            });
        })
    });
</script>
@endpush