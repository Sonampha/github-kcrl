@extends('layouts.master-secondary')

@section('header', 'Thailand')
@section('title', 'Thailand Route')

@section('content')
<link rel="stylesheet" href="{{ url('/css/flight-table.css') }}">
     <!--BLOG AREA-->
     
     <section class="blog-area blog-page section-padding">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <div class="post-date"><i class="fa fa-calendar"></i>&nbsp;<span id="clock"></span></div>
                <h3 align="center">This Week Schedule</h3>
                <table class="responsive-table">                    
                    <thead>
                    <tr>
                        <th scope="col">Flight Route</th>
                        <th scope="col">Date</th>
                        <th scope="col">Estimated Time Departure</th>
                        <th scope="col">Estimated Time Arrival</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <th scope="row">Bangkok - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Bangkok - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Bangkok - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Bangkok - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Bangkok - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Bangkok - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Bangkok - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                    <h3>Beautiful Places in Thailand</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                        <p>As one of the world’s most popular tourist destinations, it’s no secret Thailand is home 
                        to some truly spectacular places. White sand beaches and palm trees are the first images that 
                        come to mind for many, but Thailand also encompasses tropical forests, mist-covered mountains 
                        and compelling ancient monuments. Here are some of the most beautiful places to see.</p>                                                   
                    </div>

                    <h4>Wat Phra Kaew</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/wat-phra-kaew.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Wat Phra Kaew, also known as the Temple of the Emerald Buddha is located inside of 
                            the Grand Palace in the heart of the Old City district of Bangkok. The palace grounds 
                            are split into three sections, otherwise known as courts: the inner, middle and outer court. 
                            It is in the outer court where visitors will find Wat Phra Kaew. This temple is one of 
                            the main reasons visitors flock to the Grand Palace. The entrance into this place is ฿400 (about $15).</p>  
                        </div>
                    </div>

                    <h4>Wat Rong Khun (White Temple)</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/wat-rong-khun.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Although Wat Rong Khun is a fairly new temple (completed in 1997), it is quickly establishing itself as one of 
                            Thailand’s must-sees. Found in Chiang Rai and also known as the White Temple, it is striking for 
                            its gleaming white designs and fairytale-like appearance. There is controversial artwork within 
                            the main temple building, reached by traversing a walkway with ghostly limbs reaching up from 
                            underneath.</p>  
                        </div>
                    </div>

                    <h4>PHANOM RUNG HISTORICAL PARK</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/phanom-rung.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Phanom Rung Historical Park is one of Thailand’s only Khmer architecture sites, resembling 
                            the famous Angkor Wat in Cambodia. This Buddhist site is striking, with a staircase leading to 
                            its elaborate architecture made of laterite and sandstone. This temple was believed to have been 
                            built during the 17th Buddhist century. It’s located about six hours northeast of Bangkok in 
                            the province of Buriram.</p>  
                        </div>
                    </div>

                    <h4>Thi Lo Su Waterfall</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/thi-lo-su.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The highest and largest waterfall in Thailand, Thi Lo Su towers 300 meters high and spans across 500 meters 
                            of naturally carved limestone ridge in the Mae Klong River. Tucked away in the remote Um Phang Wildlife Sanctuary 
                            of Tak Province, a UNESCO World Heritage site, Thi Lo Su is the mightiest of a collection of nearby waterfalls, 
                            each accessible by foot or boat depending on the season.</p>  
                        </div>
                    </div>

                    <h4>Railay Bay</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/railay-bay.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The Railay peninsula not only offers marvelous beaches but is also a true paradise for rock climbers, 
                            providing opportunities for different levels of experience. Located close to Krabi, in the Andaman Sea, 
                            Railay or Rai Leh has a more laid-back atmosphere to it than most places in the region. Numerous reggae bars and 
                            cozy beach huts are increasingly attracting a mixed crowd of backpackers and other tourists, all looking to 
                            while away the days on the lush beaches or to explore the tropical jungles. The dazzling mountain panorama of 
                            Railay makes it one of the most special islands in the country and it can be accessed only via boat or ferry. 
                            Additionally, the island is home to a number of lagoons and caves which are waiting to be explored.</p>  
                        </div>
                    </div>

                    <h4>Maya Bay</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/maya-bay.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The jury is out as to which is more beautiful: Leonardo DiCaprio or Maya Bay, the secluded beach in Thailand 
                            the actor made famous. In the book-to-movie drama, The Beach, DiCaprio escapes to Thailand hoping to find adventure. 
                            He certainly has an adventure, one bigger than he bargained for, on the island of Koh Phi Phi where this bay is found. 
                            When the movie was released in 2000, tourists’ curiosities were peaked: what is this bay that looks almost too pristine 
                            to be real? Since then, visitors flock to this stretch of white sand via boat to explore as DiCaprio did.</p>  
                        </div>
                    </div>

                    <h4>Khao Yai National Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/khao-yai.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Khao Yai National Park is one of the most frequented parks in Thailand because of its relatively close proximity to 
                            the capital. Regardless of convenience, however, this national park would surely continue to lure in visitors with 
                            its promise of wildlife, an abundance of hiking trails, and overall beauty. It was the first official national park 
                            to be established in Thailand, and was even declared a World Heritage Site by UNESCO.</p>  
                        </div>
                    </div>

                    <h4>Ayutthaya</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/ayutthaya.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>A UNESCO World Heritage site, Ayutthaya is another former capital of Thailand and home to several temples, 
                            Buddha statues and other ancient features. Raided and captured by the Burmese in 1569, much of it now lies in ruins, 
                            but there’s still plenty to see, including the poignant sight of Buddha’s head entwined in the roots of a fig tree. 
                            Comprising several sites, day trips from Bangkok are possible, and it’s advised to travel with a guide if you want 
                            to know as much as possible about the city’s history.</p>  
                        </div>
                    </div>

                    <h4>Chiang Mai</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/chiang-mai.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Chiang Mai is only a 75 minute flight from Bangkok. It’s considerably cooler than the scorching capital city as 
                            it’s located in the mountains, also meaning there’s an abundance of trekking options and mountain views to enjoy. 
                            With a fantastic night market and a number of great coffee shops to visit, this is a great place to recharge 
                            your batteries. If you want to do a little more exploring, Chiang Rai and Pai are just a few hours away.</p>  
                        </div>
                    </div>

                    <h4>Koh Tao</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/koh-tao.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>You can hardly find a more beautiful scenery than the spotless white shores and magnificent, turquoise waters 
                            around the island. If that weren’t enough, the color palette of the island’s sunsets can’t be described in words. 
                            Due to the easy accessibility of diving sites and the marvelous, diverse underwater world, Koh Tao is one of 
                            the best places to plunge yourself into the warm waters for snorkeling or to acquire your diving license. 
                            Hikers can explore the coastal jungles and marvel at the beauty of Koh Tao. End your evening here by enjoying 
                            the catch of the day alongside a fruity cocktail.</p>  
                        </div>
                    </div>

                    <h4>Koh Nangyuan</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/koh-nangyuan.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The islands themselves are carved out of ancient volcanic rock, tapering off into three distinct bays 
                            packed with marine life and incredible biodiversity of coral species for world-class snorkeling and 
                            scuba diving. After lazing around on the beach, a quick 15-minute walk brings visitors to its storied 
                            viewpoint, offering a panorama of the winding beach below and views of the north end of nearby Koh Tao.</p>  
                        </div>
                    </div>

                    <h4>Ko Ta Pu</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/thailand/tour-places/ko-ta-pu.jpg') }}" alt="Thailand">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>You might not know the name of Ko Ta Pu, but you will almost certainly recognise pictures of 
                            this iconic natural landmark. Located in the sublime and scenic Phang Nga Bay, the spire-like karst 
                            rises up from shimmering waters with other greenery-clad limestone rocks in the background. 
                            Located just off the coast of the small island of Khao Phing Kan.</p>  
                        </div>
                    </div>



                    <div class="comments-area">
                        <h4>Leave Comment</h4>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=761199857372171&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/thailand" data-numposts="5"></div>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="sidebar-area wow fadeIn">
                        <div class="single-sidebar-widget widget_recent_entries">
                        <h4>Other Flights</h4>
                            <ul>
                            <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-cambodia.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/cambodia">Cambodia Local Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-hongkong.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/hongkong">Hong Kong - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-indonesia.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/indonesia">Indonesia - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-lao.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/lao">Lao - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-malaysia.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/malaysia">Malaysia - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-myanmar.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/myanmar">Myanmar - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-philippines.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/philippines">Philippines - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-singapore.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/singapore">Singapore - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-taiwan.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/taipei">Taiwan - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-vietnam.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/vietnam">Vietnam - Cambodia Flight</a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-sidebar-widget widget_tag_cloud">
                            <h4>Our Facebook</h4>
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=761199857372171&autoLogAppEvents=1';
                                fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>

                                <div class="fb-page" data-href="https://www.facebook.com/KCAIRLINES/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/KCAIRLINES/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/KCAIRLINES/">KC International Airlines</a></blockquote>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>


<script>
/*    Live Date Script   */
    var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
    var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")

    function getthedate(){
    var mydate=new Date()
    var year=mydate.getYear()
    if (year < 1000)
    year+=1900
    var day=mydate.getDay()
    var month=mydate.getMonth()
    var daym=mydate.getDate()
    if (daym<10)
    daym="0"+daym
    var hours=mydate.getHours()
    var minutes=mydate.getMinutes()
    var seconds=mydate.getSeconds()
    var dn="AM"
    if (hours>=12)
    dn="PM"
    if (hours>12){
    hours=hours-12
    }
    if (hours==0)
    hours=12
    if (minutes<=9)
    minutes="0"+minutes
    if (seconds<=9)
    seconds="0"+seconds
    //change font size here
    var cdate="<small><font color='000000' face='Arial'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" "+hours+":"+minutes+":"+seconds+" "+dn
    +"</b></font></small>"
    if (document.all)
    document.all.clock.innerHTML=cdate
    else if (document.getElementById)
    document.getElementById("clock").innerHTML=cdate
    else
    document.write(cdate)
    }
    if (!document.all&&!document.getElementById)
    getthedate()
    function goforit(){
    if (document.all||document.getElementById)
    setInterval("getthedate()",1000)
    }
    </script>   
@endsection