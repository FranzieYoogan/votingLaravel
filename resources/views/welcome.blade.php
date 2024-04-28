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
           
             

                  

           
                
       

          
          
                
               
    
        @if(isset($contestants))

        
  
              

                    <div >

                  
                        @foreach ($contestants as $data)
                        <form method="POST" action="/" style="display: flex; gap:1em; margin-bottom: 1em">
                            @csrf
          
               
            <h1 class="constestantName">{{$data->contestantName}}</h1>
            <input type="text" name="contestantName" style="display: none" value="{{$data->contestantId}}">
            <button type="submit" class="buttonStyle"><img  class="contestantPic" src="{{asset("$data->contestantPic")}}" alt=""></button>
                
                
                </form>
                @endforeach
    </div>

      
           
        
     
  

  
      

        @endif

    </div>
    </section>

    </body>
</html>
