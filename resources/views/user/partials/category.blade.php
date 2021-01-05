

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
              <ul class="main-nav nav navbar-nav"> 
                     <li class="cat_design"> <a  class="cathome" href="{{route('index')}}">Home</a></li>

                      
                    @foreach(App\Models\Category::orderBy('id','asc') -> get() as $categ)


                     <li><a class="hello" href="{{route('show',$categ->id)}}" id="myBtn">{{ $categ  ->name}}</a></li>
                     
                           
                     @endforeach

                   
                      








                     <!-- <script>
                        document.getElementById("myBtn").addEventListener("click", function() {
                        this.style.backgroundColor = "red";
                              });
                     </script> -->

                   
                <!-- </ul>  --> 
                <!-- /NAV -->


             
                        






            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

