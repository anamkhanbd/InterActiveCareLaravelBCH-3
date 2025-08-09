@extends('layout.core')

@section('title')
    Design Pages 
@endsection

 @section('content')
     <h1 class="text-center">Web Design</h1>
     <p class="text-justify">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non exercitationem ad temporibus debitis sint similique quisquam veritatis iste quam voluptatem, assumenda dolor explicabo libero quasi ea dicta, obcaecati optio incidunt. Suscipit quos iusto iste ipsum, magnam in praesentium reprehenderit dolorum adipisci assumenda veritatis maiores dolore impedit et laborum doloribus. Sit.
     </p>
     <div>
        @foreach ($colors as $color)
            <p>
                {{$color}}
            </p>
        @endforeach
     </div>

     <div class="fruits">
        <h1 class="text-center">Fruits:</h1>
        @foreach ($fruits as $fruit)
            <p>
                {{$fruit}}
            </p>
            
        @endforeach
     </div>
 @endsection