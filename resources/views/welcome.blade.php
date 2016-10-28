<!DOCTYPE html>
<html>
<head>
    <title>Online Appointment System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!-- Javascript -->
    <script>
        $(function() {
            var dateToday = new Date();
            $( "#datepicker-13" ).datepicker({
                numberOfMonths: 1,
                minDate: dateToday,
                maxDate: "+1M"
            });
        });
    </script>
    <style>
        .active{
            border: none !important;
            border-radius: 0!important;
            background: white !important;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <img src="/images/online-oppintment-banner.jpg" class="img-responsive" style="width: 100%; height: 150px; padding: 0 25px; margin-bottom: 10px;">
        </div>
    </div>
</header>

<div class="container">
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">Selection Area</div>
            <div class="panel-body">
                <form method="post" action="">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="">	Date</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class='input-group' id=''>
                                        <!--  <input type='text' id="datepicker"/> -->
                                        <input class="form-control" type="text" id="datepicker-13">
                                        </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for=""> Branch</label>
                                </div>

                            </td>
                            <td>
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="true">
                                        @foreach($branches as $branche)
                                            <option value="{{ $branche->id }}">{{ $branche->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for=""> Speciality</label>
                                </div>

                            </td>
                            <td>
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="true" id="Speciality">
                                        <option value="0"><-- Select One --></option>
                                        @foreach($specialities as $speciality)
                                            <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for=""> Doctor</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select  id="Doctor" class="form-control">

                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>


                </form>
            </div>
            <div class="panel-footer">
                HIS Web Version 2.0 Design & Developed By SHL-ICT.
                © 2010 All rights reserved by      	SQUARE Hospitals Ltd.
            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">Available Slot</div>
            <div class="panel-body">
                <table class="table" id="slotTable">

                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Patient Info</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="{{ route('post-appointment') }}">
                    <div class="form-group">
                        <input type="text" id="timeSlot" name="slot" class="form-control" style="border: 0px solid #505050; background: #fffff;" readonly="">
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">
                            <input type="text" name="age" class="form-control" id="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" class="form-control" id="" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender" id="">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="Dr_id" name="doc_id">
                    <input type="hidden" id="date" name="date">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button id="SubmitBtn" type="submit" class="btn btn-default">Save Appointment</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <em>N.B : Appointment desk cancel your appointment with a short notice.
                    You can only appointment in current month & after 28th for next month.
                    For Further Query, please contact Square Hospital Appointment Desk
                    at 8141522, 8142431, 8144400, 8142333
                    01713141447 Extn. - 2001, 2002, 2018,2021, 2025, 2026, 8855-8
                </em>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#timeSlot').addClass('active');
            $('#Speciality').on('change', function () {
                $('#slotTable').empty();
                var specialityId = $('#Speciality').val();
                // Ajax request for Doctor List via Specilist Id

                var url = '{{ route('getDoctors') }}';
                var token = '{{ Session::token() }}';
                var date = $.datepicker.formatDate('yy-mm-dd', new Date($('#datepicker-13').val()));
                var strDate = new Date(date);
                var weekday = strDate.getDay() + 1;
                $.ajax({
                    method: 'POST',
                    url: url,
                    data: {_token: token, id: specialityId, dayId: weekday},
                    success: function (data) {
                        $('#Doctor').empty().append('<option value="0"><-- Select One --></option>');
                        if (data != null && data != '') {
                            var i;
                            for (i = 1; i <= data.length; i++) {
                                $('#Doctor').append('<option value="' + data[i - 1]['id'] + '">' + data[i - 1]['name'] + '</option>')
                            }
                        }
                    },
                });
                return false;
            });
            $('#Doctor').on('change', function () {
                var doctorId = $('#Doctor').val();
                var url = '{{ route('available-slot') }}';
                var token = '{{ Session::token() }}';
                var date = $.datepicker.formatDate('yy-mm-dd', new Date($('#datepicker-13').val()));
                var strDate = new Date(date);
                var weekday = strDate.getDay() + 1;
                var specialityId = $('#Speciality').val();

                if(doctorId && date && specialityId){
                    $.ajax({
                        method: 'POST',
                        url: url,
                        data: {_token: token, id: doctorId, dayId: weekday, date: date},
                        success: function (data) {
                            if (data != null && data != '') {
                                var i;
                                $('#slotTable').empty();
                                for (i = 1; i <= data.length; i++) {
                                    $('#slotTable').append('<tr><td>' + data[i - 1]['start_time'] +' - '+ data[i - 1]['end_time']+ '</td></tr>');
                                }
                            }
                        },
                    });
                }
            });
            $('#slotTable').on('click', 'tr td', function () {
                $(this).parent().parent().find('tr td').css('font-weight', 'normal');
                $(this).css('font-weight', 'bold');
                $('#timeSlot').val($(this).text());
            });
            $('#SubmitBtn').on('click', function () {
                $('#Dr_id').val($('#Doctor').val());
                var date = $.datepicker.formatDate('yy-mm-dd', new Date($('#datepicker-13').val()));
                $('#date').val(date);
                return true;
            });
            $('#datepicker-13').datepicker()
            .on("input change", function (e) {
                $('#slotTable').empty();
                $('#Doctor').empty();
                $('#timeSlot').val('');
                $("#Speciality").val('0').change();
            });
        });
    </script>
</body>
</html>