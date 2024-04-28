<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/result.css')}}">

</head>
<body>
    
    @include('header')

    <section class="containerAll">

    
        <div class="containerItems">
            <div class="containerStuff">

         
      
    @foreach ($astroPhysicist as $dataAstrophysicist)
            
    <div style="display: flex">
        <img class="contestantPic" src="{{$dataAstrophysicist->contestantPic}}" alt="">
        <h1 class="votes">Votes: {{$dataAstrophysicist->contestantVotes}}</h1>
    </div>



    @endforeach

    @foreach ($chemist as $datachemist)
            
    <div style="display: flex">
        <img class="contestantPic" src="{{$datachemist->contestantPic}}" alt="">
        <h1 class="votes">Votes: {{$datachemist->contestantVotes}}</h1>
    </div>



    @endforeach

    @foreach ($biologist as $databiologist)
            
    <div style="display: flex">
        <img class="contestantPic" src="{{$databiologist->contestantPic}}" alt="">
        <h1 class="votes">Votes: {{$databiologist->contestantVotes}}</h1>
    </div>



    @endforeach
</div>
</div>
</section>


</body>
</html>