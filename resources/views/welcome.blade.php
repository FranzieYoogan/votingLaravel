<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('/css/home.css')}}">

        <!-- Styles -->
       
    </head>
    <body class="antialiased">

        @include('header')




        <h1 class="Title">ASTROPHYSICISTS</h1>
        <section class="containerAll">

        
       
            <div class="containerItems">
           
                <div style="display: flex">

                  

           
                
       

          
          
                
               
    
        @if(isset($contestants))

        
        @foreach ($contestants as $data)

                    <form method="POST" action="/voted" class="formStyle">
                        @csrf
         
            
        <div >
          
            <h1 class="constestantName">{{$data->contestantName}}</h1>
            <input type="text" name="contestantName" style="display: none" value="{{$data->contestantName}}">
        
        </div>

        <div style="display: flex; justify-content: center">
            <img onclick="clickHidden()" class="contestantPic" src="{{asset("$data->contestantPic")}}" alt="">
            <input type="submit" id="click" style="display: none">
        </div>
    </form>

    <script>

        function clickHidden() {

            document.getElementById('click').click();
        }

    </script>
        
        @endforeach

        @endif

    </div>
    </section>

    </body>
</html>
