
<?php
use App\Http\Controllers\cardcontroller;
$total=0;
if (Session::has('user')){
$total=cardcontroller::carditem();
}
?>



<li><a href="#">cart{{$total}}</li>
    <li><a href="/logout">logout</li>
         <div class="container product">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->


            <!-- Wrapper for slides -->

            <div class="carousel-inner">
               @foreach ( $users as $user  )
               <div class="col-md-3">
               <div class="item {{ $user->id }}">
                <img src="{{ $user->pic }}" alt="Chania" style="height:30%">
                <div class="carousel-caption">
                  <h3>{{ $user->name }}</h3>
                 <p>{{ $user->price }}</p>
                 <form action="card" method="POST">
                    @csrf
                    <input type="hidden" name="pid" value="{{ $user->id }}">
                 <button name="add to card" >add to card</button>
                 </form>
                </div>
              </div>
            </div>
               @endforeach

         </div>

            <!-- Left and right controls -->

          </div>


