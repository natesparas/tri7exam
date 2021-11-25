    <!-- auto collapse -->
    <span id="mobile-collapse"></span>

    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <!-- <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" /> -->
                            Examination
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigation-label">Front-End</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active lis" id="ci_li">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Codeigniter</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Algorithm</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="lis" id="factorial_li">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Factorial</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="lis" id="iq_li">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                                        <span class="pcoded-mtext">IQ Test</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <!-- Start Codeigniter -->
                                        <div class="row cont" id="ci_div">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>User List</h5>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table" id="user_table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name</th>
                                                                        <th>Position</th>
                                                                        <th>Create Date</th>
                                                                        <th><button type="button" class="btn btn-success btn-sm btn_add">Add</button></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="6" class="text-center">No Data Available</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Codeigniter -->

                                        <!-- Start Factorial -->
                                        <div class="row cont" id="factorial_div" hidden>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Factorial</h5>
                                                        <div class="card-header-right">
                                                            <button type="button" class="btn btn-success btn-sm btn_calculate">Calcute</button>
                                                        </div>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="card-block">
                                                            <form class="form-material">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-default form-static-label">
                                                                            <input type="number" min="0.000001" name="factorial_number" class="form-control" placeholder="Enter Number" autocomplete="nope">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Number</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group form-default form-static-label">
                                                                            <input type="text" name="factorial_result" class="form-control" readonly>
                                                                                <span class="form-bar"></span>
                                                                            <label class="float-label">Result</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Code Snippet</h5>
                                                        <span class="label label-danger">I'm using javascript language</span>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="card-block">
                                                            <script src="https://gist.github.com/natesparas/341fbb82611fa6738b0bb83871ade239.js"></script>
                                                        </div>
                                                    </div>
                                                </div>      
                                            </div>
                                        </div>
                                        <!-- End Factorial -->

                                        <!-- Start IQ Test -->
                                        <div class="row cont" id="iq_div" hidden>
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>IQ Test</h5>
                                                        <span class="label label-danger">Hard to explain but my answers are abviously correct</span>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="card-block">
                                                            <script src="https://gist.github.com/natesparas/06938435d3c80720dd8a4aa76a1acb50.js"></script>
                                                        </div>
                                                    </div>
                                                </div>      
                                            </div>
                                        </div>
                                        <!-- End IQ Test -->

                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="action_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span id="action_title"></span> User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-block">
                            <form class="form-material" id="action_form">
                                <div class="form-group form-default form-static-label">
                                    <input type="text" name="first_name" class="form-control" placeholder="Enter First name" autocomplete="nope">
                                    <span class="form-bar"></span>
                                    <label class="float-label">First name</label>
                                </div>
                                <div class="form-group form-default form-static-label">
                                    <input type="text" name="last_name" class="form-control" placeholder="Enter Last name" autocomplete="nope">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Last name</label>
                                </div>
                                <div class="form-group form-default form-static-label">
                                    <input type="text" name="position" class="form-control" placeholder="Enter Position" autocomplete="nope">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Position</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary action_button">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function(){

            load_data()

            $('#action_modal').on('hidden.bs.modal', function () {
                $('#action_form').find("input[type=text]").val("");
            })

            $(document).on('click', '.btn_add', function(){
                $('#action_title').empty().text('Add')
                $('#action_modal').modal('show')
                $('.action_button').attr('id','btnAdd')
            })

            $(document).on('click', '#btnAdd', function(){
                swal({
                    title: 'Are you sure?',
                    text: "Your data will be save!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#0CC27E',
                    cancelButtonColor: '#FF586B',
                    confirmButtonText: 'Yes, save it!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-success mr-3',
                    cancelButtonClass: 'btn btn-danger',
                    // buttonsStyling: false
                    showLoaderOnConfirm: true,
                    preConfirm: function() {
                        return new Promise(function(resolve) {
                          setTimeout(function() {
                            resolve()
                          }, 1000)
                        })
                    },
                    allowOutsideClick: false
                }).then(function () {
                    $.post("<?= base_url('User_Controller/insert') ?>", $('#action_form').serialize(), function(data){
                        if (JSON.parse(data).code == '00') {
                            swal({
                                title: "Success!",
                                text: "Data has been successfully saved",
                                type: "success",
                                confirmButtonClass: "btn btn-success",
                                // buttonsStyling: !1,
                                allowOutsideClick: false
                            }).then(function(result) {
                                if (result == true) {
                                    load_data();
                                    $('#action_modal').modal('hide')
                                }
                            });
                        }else{
                            swal('Error!', JSON.parse(data).msg, 'error');
                        }
                    })
                }, function (dismiss) {
                    if (dismiss === 'cancel') {
                    }
                });
            })

            $(document).on('click', '.btn_edit', function(){
                var user_id = $(this).data('user_id')
                var first_name = $(this).closest('tr').find('td:eq(1)').text()
                var last_name = $(this).closest('tr').find('td:eq(2)').text()
                var position = $(this).closest('tr').find('td:eq(3)').text()

                $('input[name="first_name"]').empty().val(first_name)
                $('input[name="last_name"]').empty().val(last_name)
                $('input[name="position"]').empty().val(position)

                $('#action_title').empty().text('Edit')
                $('#action_modal').modal('show')
                $('.action_button').attr('id','btnEdit')

                $(document).on('click', '#btnEdit', function(){
                    swal({
                        title: 'Are you sure?',
                        text: "Your data will be save!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#0CC27E',
                        cancelButtonColor: '#FF586B',
                        confirmButtonText: 'Yes, save it!',
                        cancelButtonText: 'No, cancel!',
                        confirmButtonClass: 'btn btn-success mr-3',
                        cancelButtonClass: 'btn btn-danger',
                        // buttonsStyling: false
                        showLoaderOnConfirm: true,
                        preConfirm: function() {
                            return new Promise(function(resolve) {
                              setTimeout(function() {
                                resolve()
                              }, 1000)
                            })
                        },
                        allowOutsideClick: false
                    }).then(function () {

                        var input = $("<input>")
                                   .attr("type", "hidden")
                                   .attr("name", "id").val(user_id);
                        $('#action_form').append(input);


                        $.post("<?= base_url('User_Controller/update') ?>", $('#action_form').serialize(), function(data){
                            if (JSON.parse(data).code == '00') {
                                swal({
                                    title: "Success!",
                                    text: "Data has been successfully saved",
                                    type: "success",
                                    confirmButtonClass: "btn btn-success",
                                    // buttonsStyling: !1,
                                    allowOutsideClick: false
                                }).then(function(result) {
                                    if (result == true) {
                                        load_data();
                                        $('#action_modal').modal('hide')
                                    }
                                });
                            }else{
                                swal('Error!', JSON.parse(data).msg, 'error');
                            }
                        })
                    }, function (dismiss) {
                        if (dismiss === 'cancel') {
                        }
                    });
                    })
            })

            $(document).on('click', '.btn_delete', function(){
                var user_id = $(this).data('user_id')
                swal({
                    title: 'Are you sure?',
                    text: "Your data will be deleted!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#0CC27E',
                    cancelButtonColor: '#FF586B',
                    confirmButtonText: 'Yes, save it!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-success mr-3',
                    cancelButtonClass: 'btn btn-danger',
                    // buttonsStyling: false
                    showLoaderOnConfirm: true,
                    preConfirm: function() {
                        return new Promise(function(resolve) {
                          setTimeout(function() {
                            resolve()
                          }, 1000)
                        })
                    },
                    allowOutsideClick: false
                }).then(function () {

                    $.post("<?= base_url('User_Controller/delete') ?>", { id : user_id }, function(data){
                        if (JSON.parse(data).code == '00') {
                            swal({
                                title: "Success!",
                                text: "Data has been successfully deleted",
                                type: "success",
                                confirmButtonClass: "btn btn-success",
                                // buttonsStyling: !1,
                                allowOutsideClick: false
                            }).then(function(result) {
                                if (result == true) {
                                    load_data();
                                }
                            });
                        }else{
                            swal('Error!', JSON.parse(data).msg, 'error');
                        }
                    })
                }, function (dismiss) {
                    if (dismiss === 'cancel') {
                    }
                });
            })

            $(document).on('click', '.btn_calculate', function(){
                var n = $('input[name="factorial_number"]').val()
                if (n > 0 && n != '') {
                    $('input[name="factorial_result"]').val(factorial(n))
                }else{
                    swal('Warning!', 'Please input positive number', 'warning');
                }
            })

            $('#ci_li').on('click', function(){
                $('.lis').removeClass('active')
                $(this).addClass('active')

                $('.cont').attr('hidden', true)

                $('#ci_div').prop('hidden', false);
            })

            $('#factorial_li').on('click', function(){
                $('.lis').removeClass('active')
                $(this).addClass('active')

                $('.cont').attr('hidden', true)

                $('#factorial_div').prop('hidden', false);
            })

            $('#iq_li').on('click', function(){
                $('.lis').removeClass('active')
                $(this).addClass('active')

                $('.cont').attr('hidden', true)

                $('#iq_div').prop('hidden', false);
            })
        })

        function load_data(argument) {
            var tbody = ``;
            new Promise((resolve, reject) => {
                $.get("<?= base_url('User_Controller/get_user_list') ?>", function(data){
                    if (JSON.parse(data).code == '00') {
                        $.each(JSON.parse(data).data, function(i, val){
                            i = i + 1;
                            tbody += `
                                <tr>
                                    <td>`+i+`</td>
                                    <td>`+val.first_name+`</td>
                                    <td>`+val.last_name+`</td>
                                    <td>`+val.position+`</td>
                                    <td>`+val.create_date+`</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm btn_edit" data-user_id="`+val.id+`">
                                            Edit
                                        </button>

                                        <button type="button" class="btn btn-danger btn-sm btn_delete" data-user_id="`+val.id+`">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            `;
                        })

                        if (JSON.parse(data).data.length <= 0) {
                            tbody = `
                                <tr>
                                    <td colspan="6" class="text-center">No Data Available</td>
                                </tr>
                            `
                        }
                        
                        $('#user_table > tbody').empty().append(tbody)
                        resolve('success')
                    } else {
                        reject('error')
                    }
                });

            }).then(function(result){
                $(".theme-loader").animate({
                    opacity: "0"
                },500);
                setTimeout(function() {
                    $(".theme-loader").remove();
                }, 500);
            })           
        }

        function factorial(n) {
            if (n === 0) {
                return 1;
            }
            return n * factorial(n-1);
        }
    </script>