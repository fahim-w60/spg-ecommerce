<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('adminBackend/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('adminBackend/assets/images/favicon.png') }}" type="image/x-icon">
   
    <title>@yield('title')</title>

    <!--Toastr Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/toastr.css') }}" >
    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Data Table css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/datatables.css') }}">
    
    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{ asset('adminBackend/assets/css/linearicon.css') }}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/vendors/font-awesome.css') }}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/vendors/themify.css') }}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/ratio.css') }}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/remixicon.css') }}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/vendors/feather-icon.css') }}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/vendors/animate.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/vendors/bootstrap.css') }}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/vector-map.css') }}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{ asset('adminBackend/assets/css/vendors/slick.css') }}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/main.css') }}">

    @yield('page_level_css');
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('admin.home.header')
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('admin.home.sidebar')
            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            @yield('main')
            <!-- index body end -->

        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->




    
    <!-- latest js -->
    <script src="{{ asset('adminBackend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('adminBackend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    @yield('page_level_script');
    <!-- Data table js -->
    <script src="{{ asset('adminBackend/assets/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/js/custom-data-table.js') }}"></script>

    <script type="text/javascript" src="{{ asset('adminBackend/assets/js/toastr.min.js') }}"></script>
    <script>
    @if(Session::has('message'))

     var message = <?php echo json_encode(Session::get('message')); ?>;
        var type = <?php echo json_encode(Session::get('alert-type', 'info')); ?>;


    console.log((message));
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
    @endif 
    </script>

    //<!-- feather icon js -->
    <script src="{{ asset('adminBackend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>

    //<!-- scrollbar simplebar js -->
    <script src="{{ asset('adminBackend/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/js/scrollbar/custom.js') }}"></script>

    //<!-- Sidebar jquery -->
    <script src="{{ asset('adminBackend/assets/js/config.js') }}"></script>

    //<!-- tooltip init js -->
    <script src="{{ asset('adminBackend/assets/js/tooltip-init.js') }}"></script>

    //<!-- Plugins JS -->
    <script src="{{ asset('adminBackend/assets/js/sidebar-menu.js') }}"></script>

    //<!-- Apexchar js -->
    <script src="{{ asset('adminBackend/assets/js/chart/apex-chart/apex-chart1.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/js/chart/apex-chart/chart-custom1.js') }}"></script>

    <script src='{{ asset('adminBackend/assets/js/tinymce.min.js') }}' referrerpolicy="origin">
	</script>
	<script>
		tinymce.init({
		  selector: '#product_description'
		});
	</script>


     //slick slider js 
    <script src="{{ asset('adminBackend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/js/custom-slick.js') }}"></script>

    //<!-- customizer js -->
    <script src="{{ asset('adminBackend/assets/js/customizer.js') }}"></script>

    //<!-- ratio js -->
    <script src="{{ asset('adminBackend/assets/js/ratio.js') }}"></script>

    //<!-- sidebar effect -->
    <script src="{{ asset('adminBackend/assets/js/sidebareffect.js') }}"></script>

    //<!-- Theme js -->
    <script src="{{ asset('adminBackend/assets/js/script.js') }}"></script>
    
    <!-- Delete Modal Start -->
    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                            <input type="hidden" id="delete_url" value="" />
                            <input type="hidden" id="delete_cat_id" value="" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal" 
    
                        onclick="removeCategory()">Yes</button>
    
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <button type="button" class="btn-close doneCloseButton" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <div class="wrapper">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>
                        <h4 class="text-content deleteMessage">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary doneCloseButton" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
    
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.delete-list', function() {
                $('#exampleModalToggle').modal('show');
                var userURL = $(this).data('url');
                $(document).find("#delete_url").val(userURL);
    
            });
        });
       
      
        function removeCategory(){
                var userURL = $(document).find("#delete_url").val();
                $.ajax({
                        url: userURL,
                        type: 'DELETE',
                        dataType: 'json',
                        success: function(data) {
                            if(data?.status==200){
                               $(document).find(".deleteMessage").text(data?.message);
                            }
                            
                        }
                    });
            }
    
            $(document).on("click",".doneCloseButton",function(){
                location.reload();
            })
    
        
    </script>
    <!--Delete Modal End -->
    
    
</body>

</html>