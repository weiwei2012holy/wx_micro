<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOKIN摩静招贤纳士</title>
</head>
<link rel="stylesheet" href="{{URL::asset('css/index.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/swiper.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
<body>

<div class="swiper-container">
    <div class="swiper-wrapper">
        {{--<div class="swiper-slide main">--}}
        {{--<div class="top-image-box">--}}
        {{--<img src="{{URL::asset('img/bg-header.png')}}" class="bg-header animated pulse">--}}
        {{--<img src="{{URL::asset('img/want-you.png')}}" class="want-you animated rotateInDownLeft">--}}
        {{--<img src="{{URL::asset('img/join-us.png')}}" class="join-us animated rotateInUpRight">--}}
        {{--<img src="{{URL::asset('img/index-girls.png')}}" alt="" class='index-girls animated fadeInUp'>--}}
        {{--<img src="{{URL::asset('img/mk.png')}}" alt="" class='index-mk animated-3s flipInX'>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="swiper-slide">--}}
        {{--<div class='has-border'>--}}
        {{--<img src="{{URL::asset('img/top-girls.png')}}" style='width: 60%;left: 20%;'>--}}
        {{--<h2 class='second-left-text'>想拥有一个工资突破如火箭的方法吗？</h2>--}}

        {{--<img src="{{URL::asset('img/we-have.png')}}" alt="" style='width: 80%;'>--}}
        {{--<div class='second-footer-box'>--}}
        {{--<img src="{{URL::asset('img/roket.png')}}"--}}
        {{--style='width: 50px;float: left;margin-left: 30px;margin-top: 10px;'>--}}

        {{--<div class='second-right-text'>无需你多才多艺</div>--}}
        {{--<div class='second-right-text'>只要你热爱销售行业</div>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="swiper-slide trird-box" style='background: #FED732'>--}}
        {{--<div class='has-border'>--}}
        {{--<img src="{{URL::asset('img/what-we-need.png')}}" style='width: 60%;left: 20%;margin-top: 5%;'>--}}
        {{--<div class='job-name'>导购</div>--}}
        {{--<p>平均工资4000-5000--}}
        {{--<small>(只限女同胞)</small>--}}
        {{--</p>--}}
        {{--<div class='job-name'>店助</div>--}}
        {{--<p>平均工资5000-6000--}}
        {{--<small>(只限女同胞)</small>--}}
        {{--</p>--}}
        {{--<div class='job-name'>店长</div>--}}
        {{--<p>平均工资7000-8000--}}
        {{--<small>(只限女同胞)</small>--}}
        {{--</p>--}}
        {{--<div class='job-name'>督导</div>--}}
        {{--<p>平均工资8000-12000--}}
        {{--<small>(只限女同胞)</small>--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="swiper-slide">--}}
        {{--<img src="{{URL::asset('img/fuli.png')}}" style='width: 80%;position: absolute;top: 10%;left: 10%;'>--}}
        {{--<h1>test</h1>--}}
        {{--</div>--}}
        <div class="swiper-slide mail">
            <div class="top-image-box col-sm-12">
                <img src="{{URL::asset('img/bg-header.png')}}" class="bg-header animated pulse">
                <img src="{{URL::asset('img/want-you.png')}}" class="want-you animated rotateInDownLeft">
                <img src="{{URL::asset('img/join-us.png')}}" class="join-us animated rotateInUpRight">
                <img src="{{URL::asset('img/mk.png')}}" alt="" class='index-mk animated-3s flipInX'>
                <div style="margin-top: 10px;">
                    <form action="{{url('hr')}}" role="form" method="post" id="job-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="请输入姓名">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="请输入手机号码" name="mobile">

                        </div>
                        <div class="form-group">
                            <select name="job" class="form-control">
                                <option value="">请选择应聘职位</option>
                                <option value="导购">导购</option>
                                <option value="店长">店长</option>
                                <option value="督导">督导</option>
                                <option value="店助">店助</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <select name="province" class="form-control" id="province">
                                    <option value="">--省--</option>
                                    @foreach($province as $p)
                                        <option value="{{$p->id}}">{{$p->short_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-4">
                                <select name="city" class="form-control" id="city">
                                    <option value="">--市--</option>

                                </select>
                            </div>
                            <div class="col-xs-4">
                                <select name="town" class="form-control" id="town">
                                    <option value="">--区--</option>

                                </select>
                            </div>

                        </div>


                        <div class="form-group">
                            {!!csrf_field()!!}
                            <input type="button" id="save" value="加我我们" class="btn btn-warning btn-block">
                        </div>


                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
<div class="maka-Arrow" style="display: block;">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAkCAMAAADip6m2AAAAolBMVEUAAAAAAAAAAAAAAAAAAAABAQEAAAAAAAAHBwcAAAD////9/f37+/vt7e25ubn39/cKCgrz8/Pe3t7c3Nz+/v729vbW1tZra2tKSkoAAABpaWlgYGD9/f38/Pz5+fn5+fn39/fz8/Px8fHu7u7q6urm5ubj4+Pd3d3y8vLX19fJycnAwMC4uLisrKyhoaGVlZWGhoajo6MpKSkxMTGAgID///9oDYyzAAAANXRSTlMAAwcLFR0SGRAO+efJbSOcIqBDQvLNbTEpGxEQ9e3h29XDvLOsnJOJiIFpYVlNRkE7MiwfDLl52bwAAAGFSURBVEjH3ZXZboMwFERbHAMhC6EFQtrs+777/3+t98bGjmwqy32plHmLPYfMiYTy9nJ5F/kb693j+O4h7Y567SZjzbYHuDv72WCQxgfSjixpReyRqEWAdmK/YyaTfAHtpivjIo6TUReTZYxxcZzupju/XufP4g660aYD2USmuF13sKeP7Ae6uF13fKZBDRLQ81gTt+rOCmD9MPSBLmaauEV3hWidQOqIr57FLbrpDllCPAghSO9SU7xad3QCNiRQgwAeAn0a6eLVutOC4mRk+SCcToupIW7qsmWnByw25B3Svc6SaeKGbn9LA8UqGsW3fVMc2VJ3eJS6apcUPw5LcVmAq1J30qWBL1mN9gPanZTiUBE3pe5C6cpo4gtRjXkJjtf8cbnSlTHEcz5yTTwBh00UOVToVogfGvibhQq+pCyr0q0Wz1h6kTDsyZObPvn36bckh6qA8YE1eIUEa6GxyyeKEzhC1MLy6byL3yNP4BNn7TSWVRffHYHaI7qq7PB3qMr/mh8s20b2bOZlXQAAAABJRU5ErkJggg=="
         alt="">
</div>
</body>
<script src="{{URL::asset('js/swiper.min.js')}}"></script>
<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    var area_url = "{{url('area')}}";
    $('#province').change(function (e) {
        var province = $(this).children('option:selected').val();

        $('#city').html('<option value="">--市--</option>');
        $('#town').html('<option value="">--区--</option>');
        if (!province) {
            return;
        }
        $.ajax({
            url: area_url + '/' + province,
            type: 'get',
            dataType: 'json',
        }).done(function (data) {
            var html = '';
            var area = data.area;
            for (var i in area) {
                html += '<option value="' + area[i].id + '">' + area[i].short_name + "</option>";
            }
            $('#city').append(html);
        })
    })

    $('#city').on('change', function (e) {
        var city = $(this).children('option:selected').val();
        $('#town').empty().html('<option value="">--区--</option>');
        if (!city) {
            return;
        }
        $.ajax({
            url: area_url + '/' + city,
            type: 'get',
            dataType: 'json',
        }).done(function (data) {
            var html = '';
            var area = data.area;
            for (var i in area) {
                html += '<option value="' + area[i].id + '">' + area[i].short_name + "</option>";
            }
            $('#town').append(html);
        })

    })
    $('#save').click(function () {
        var data = $('#job-form').serializeArray();
        var url = "{{url('hr')}}";
        var token = "{{csrf_token()}}";
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: {data: data, _token: token}
        }).done(function (data) {
            alert(data.msg)
            if(data.ok === 1){
                document.location.reload();
            }

        })
    })

</script>
</html>