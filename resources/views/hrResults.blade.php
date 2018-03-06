<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    <div class='container'>
        <table class="table table-bordered">
  <caption>报名记录</caption>
  <thead>
    <tr>
      <th>编号</th>
      <th>姓名</th>
      <th>电话</th>
      <th>职位</th>
      <th>地区</th>
      <th>报名日期</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($results as $job)
    <tr>
      <td>{{$job->id}}</td>
      <td>{{$job->name}}</td>
      <td>{{$job->mobile}}</td>
      <td>{{$job->job}}</td>
      <td>{{$job->merger_name}}</td>
      <td>{{date('Y-m-d H:i:s',$job->created)}}</td>
    </tr>
    @endforeach

  </tbody>
</table>

{{ $results->links() }}
    </div>
</body>
</html>
