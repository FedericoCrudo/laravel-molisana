<header>
    <div class="logo">
        <img src="../../img/logo.png" alt="">
    </div>
    <div class="menu">
        <ul>
        <li><a href="{{route ('home-route')}}" class="{{(Request::route()->getName()=='home-route')? 'active' :''}}">Home</a></li>
        <li><a href="{{route ('product-route')}}"class="{{(Request::route()->getName()=='product-route')? 'active' :''}}">Product</a></li>
        <li><a href="{{route ('news-route')}}"class="{{(Request::route()->getName()=='news-route') ? 'active' :''}}">News</a></li>
        
        
        
        
        </ul>
    </div>
 </header>