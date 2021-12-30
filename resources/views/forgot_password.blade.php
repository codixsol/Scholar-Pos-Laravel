<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .modal.modal-wide{
            overflow: hidden;
        }

        .modal-wide .modal-body {
            overflow-y: auto;
        }

        @-webkit-keyframes custome-animate {
            0% {
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transform:  perspective(90%) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                -moz-transform: perspective(90%) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                -ms-transform: perspective(90%) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                transform: perspective(90%) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                opacity: 0;
            }
            68% {
                -webkit-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                -moz-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                -ms-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                opacity: 0.8;
            }
            100% {
                -webkit-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                -moz-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                -ms-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                opacity: 1;
            }
        }
        @keyframes custome-animate {
            0% {
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transform: perspective(90%) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                -moz-transform: perspective(90%) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                -ms-transform: perspective(90%) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                transform: perspective(90%) rotateY(-65deg) rotateX(-45deg) translateZ(-200px);
                opacity: 0;
            }
            68% {
                -webkit-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                -moz-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                -ms-transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                transform:  rotateY(10deg) rotateX(10deg) translateZ(20px);
                opacity: 0.8;
            }
            100% {
                -webkit-transform: rotateY(0deg) rotateX(0deg) translateZ(0px);
                -moz-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                -ms-transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                transform:  rotateY(0deg) rotateX(0deg) translateZ(0px);
                opacity: 1;
            }
        }
        .custome-animate {
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: custome-animate;
            animation-name: custome-animate;
        }



        /********Demo 2*******/

        .opacity-animate{
            animation:opt-animation 1s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;


        }
        img{
            width:100%;
        }




        @-webkit-keyframes opt-animation {
            0%   { opacity: 0; }
            100% { opacity: 1; }
        }
        @-moz-keyframes opt-animation {
            0%   { opacity: 0; }
            100% { opacity: 1; }
        }
        @-o-keyframes opt-animation {
            0%   { opacity: 0; }
            100% { opacity: 1; }
        }
        @keyframes opt-animation {
            0%   { opacity: 0;}
            100% { opacity: 1;}
        }

        /***** Demo 3 *********/
        .opacity-animate3{
            animation:opt-animation3 1s ;
            -moz-animation-fill-mode: forwards
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        @-webkit-keyframes opt-animation3 {
            0%   { opacity: 0; transform: scale(0.75);}
            100% { opacity: 1; transform: scale(1);}
        }
        @-moz-keyframes opt-animation3 {
            0%   { opacity: 0; transform: scale(0.75);}
            100% { opacity: 1; transform: scale(1);}
        }
        @-o-keyframes opt-animation3{
            0%   { opacity: 0; transform: scale(0.75);}
            100% { opacity: 1; transform: scale(1);}
        }
        @keyframes opt-animation3 {
            0%   { opacity: 0; transform: scale(0.75);}
            100% { opacity: 1; transform: scale(1);}
        }

        /* .hide-opacity{
           animation:scaleme 1s;
        }

        @-webkit-keyframes scaleme {
          0% { -webkit-transform: scale(1); opacity: 1; }
          100% { -webkit-transform: scale(0); opacity: 0;display:none;}
        }
         */



        /* .demo4
         &.fade {
          .modal-dialog {
           .translate(0, 0);
          }
         }
        }
        /* or */
        /* .demo4.fade .modal-dialog {
         .translate(0, 0);
        }
         */
        .opacity-animate4{
            animation:opt-animation4 1s;
            animation-fill-mode: forwards
        }


        @keyframes opt-animation4 {
            0% {
                transform: scale(0) rotate(360deg);
            }
            60% {
                transform: scale(0.8) rotate(-10deg);
            }
            100% {
                transform: scale(1) rotate(0deg);
            }
        }



    </style>
</head>
<body>

<div class="modal fade" id="ok" tabindex="-1" role="dialog1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md opacity-animate3" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Password Successfully Changed</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success">
                    <h5 id="m1" style="display: none"></h5>
                    <h5 id="m2" style="display: none"></h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Done</button>
            </div>


        </div>
    </div>
</div>

<div class="container">


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md opacity-animate3" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Forgot Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                        <div class="row mb-5">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="alert alert-danger" id="error" style="display: none"></div>
                            </div>
                        </div>
                    <div class="row mb-5">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="npassword" id="np" class="form-control" placeholder="New Password">
                            <div class="alert alert-danger" id="np_error" style="display: none"></div>
                        </div>
                    </div>
                    <div class="row mt-4" style="margin-top: 10px;">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="cpassword" id="cp" class="form-control" placeholder="Confirm Password">
                            <div class="alert alert-danger" id="cp_error" style="display: none"></div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>

                </form>

            </div>
</div>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>
        <script>

            $(document).on('submit',function (e){
                e.preventDefault();

                let cp = $('#cp').val();
                let np = $('#np').val();
                let is_error = "no";
                if (np==""){
                    $('#np_error').html("*Please Enter New Password");
                    $("#np_error").show("slow").delay(8000).hide("slow");
                    is_error = "yes";
                }
                if (cp==""){
                    $('#cp_error').html("*Please Enter Confirm Password");
                    $("#cp_error").show("slow").delay(8000).hide("slow");
                    is_error = "yes";

                }
                if (cp != np){
                    $('#error').html("*Please Enter Same Passwords");
                    $("#error").show("slow").delay(8000).hide("slow");
                    is_error = "yes";

                }
                if (is_error == "no") {

                    let data = $('#form').serializeArray()
                    $.ajax({
                        url: "{{ route('forgot.save')}}",
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': "<?= Session::token() ?>"
                        },
                        dataType: "json",
                        data: data,
                        cache: false,
                        success: function (response) {
                           if (response.success==201){

                               $('#myModal').modal('hide');
                               $('#m1').html(response.message);
                               $("#m1").show("slow");
                               $('#ok').modal('show');

                           }
                            if (response.error==202){

                                $('#myModal').modal('hide');
                                $('#m2').html(response.message);
                                $("#m2").show("slow");
                                $('#ok').modal('show');

                            }
                        }, error: function (result) {
                        },
                    })
                }
            });

        </script>
</body>
</html>
