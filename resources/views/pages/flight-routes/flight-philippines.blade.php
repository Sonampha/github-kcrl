@extends('layouts.master-secondary')

@section('header', 'Philippines')
@section('title', 'Philippines Route')

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
                        <th scope="row">Manila - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Manila - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Manila - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Manila - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Manila - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Manila - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Manila - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                    <h3>Beautiful Places in Philippines</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                        <p>There’s no shortage of world-class dive sites among the Philippines‘ 7,107 islands. Divers will receive 
                        a warm welcome in this archipelago known for its marine biodiversity, dreamy beaches and music-loving locals. 
                        Many resorts have their own house reefs, and from almost any island, a remarkable dive is only a boat ride away. 
                        Culture Trip rounds up the most beautiful places to go scuba diving in the Philippines, above and below the surface.</p>                                                   
                    </div>

                    <h4>Matinloc Island</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/matinloc-island.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Home to some of Bacuit Bay’s most famous tourist attractions such as Matinloc Shrine, Secret Beach, 
                            and Hidden Beach, Matinloc Island is a must on anyone’s first trip to El Nido. The covert beaches are 
                            concealed by El Nido’s iconic limestone formations and Matinloc Shrine offers some of the best panoramic 
                            views in the area. These are all stops on El Nido’s Tour C package in addition to nearby Star Beach and 
                            Helicopter Island.</p>  
                        </div>
                    </div>

                    <h4>Miniloc Island</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/miniloc-island.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Just like Matinloc, Miniloc Island is not to be missed on your El Nido trip. While Matinloc is known for 
                            its obscure beaches, Miniloc is renowned for its breathtaking aquamarine lagoons: the Big Lagoon, Small Lagoon, 
                            and Secret Lagoon. Here, visitors can explore these stunning wonders of nature aboard kayaks which are also 
                            available for rent on site. Conveniently, these are all stops on El Nido’s famous Tour A package, along with 
                            Shimizu Island and Seven Commandos Beach.</p>  
                        </div>
                    </div>

                    <h4>Boracay</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/boracay.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Just like Palawan, Boracay has enjoyed the title “World’s Best Island” for its powdery 
                            white sand beaches and glorious sunset views. It has long attracted travellers from all over 
                            the world, and as such has taken some wear and tear through the years. Because of massive 
                            commercialization, the island is oversaturated with establishments and structures and is often 
                            crowded with more people than it can handle. Sewage and waste problems are also beginning to worsen.</p>  
                        </div>
                    </div>

                    <h4>Kayangan Lake</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/kayangan-lake.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Considered by many as the cleanest lake in the Philippines, and by some as even the cleanest in Asia, 
                            Kayangan Lake is one of the most popular tourist destinations in Coron. It’s a bit of a trek 
                            (a few hundred steps) to get to the lake itself from the docking point, but the gorgeous views more than 
                            make up for the effort. The lake is warm and inviting but can get especially crowded during peak season. 
                            Try to drop by during the least popular hours of the day to avoid too much company. Sights below 
                            the lake’s surface are just as spectacular as those above, with its striking jagged rock formations 
                            that just call to be explored.</p>  
                        </div>
                    </div>

                    <h4>El Nido Beaches</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/el-nido-beaches.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>El Nido’s dreamy beaches aren’t limited to the stops of the island-hopping tours that take you around Bacuit Bay. 
                            It also has some that are easily reached by tricycle — no boat rentals necessary. The most popular ones include Nacpan, 
                            Marimegmeg, Las Cabanas, and Corong-Corong. Aside from sunbathing, walking by the shore, and gloriously lazing the day 
                            away with a cocktail in hand, perhaps the best thing to do at these beaches is to wait for sunset and watch as everything 
                            takes on the soft, warm glow of golden hour.</p>  
                        </div>
                    </div>

                    <h4>Long Beach</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/long-beach.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Dubbed the longest white-sand beach in the country, Long Beach in San Vicente stretches an astounding 14 kilometers long. 
                            And unlike Palawan’s tourist hotspots, this beach has barely any traces of commercialization (yet). Pay this beach a visit 
                            and you’ll be treating yourself to the luxury of feeling like you have your very own tropical haven that goes on forever. 
                            No other tourist will likely be in sight — just pure, raw sand and sea goodness.</p>  
                        </div>
                    </div>

                    <h4>Lahos Island</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/lahos-lsland.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Another impressive Caramoan island is Lahos. A striking image, the island is characterized by two major rock 
                            formations opposite each other, allowing a small beach to stretch between them, creating shorelines on either end of 
                            the island. This untainted piece of paradise makes for a great place to simply lay back and bask in its raw beauty. 
                            It also goes without saying that Lahos is a perfect location for stunning new photos to add to your social media feeds.</p>  
                        </div>
                    </div>

                    <h4>Kalanggaman Island</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/kalanggaman-island.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>While the luxurious island of Pamalican may sound divine, a trip here does end with quite the hefty bill. 
                            For those seeking out a tropical escape with a more feasible price tag, the country has a remarkable lineup of 
                            undeveloped virgin islands too. One of these is Kalanggaman in Leyte. While the island itself isn’t all that large, 
                            two dazzling sandbars extend into the sea on either side. There are no hotels on the island, nor is there 
                            electricity—two enticing features to campers. There are basic facilities however, such as toilets and cottages for rent, 
                            so choosing to spend the night wouldn’t be too rough. Kalanggaman might not be the easiest to get to but 
                            its picturesque sandbar alone makes it a must for anyone travelling around the Visayas.</p>  
                        </div>
                    </div>

                    <h4>Apo Reef National Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/apo-reef-national-park.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>If Australia has the Great Barrier Reef, the Philippines takes pride in the Apo Reef, which is considered 
                            the world’s second largest contiguous reef system and the country’s largest reef system. It has two isolated coral reefs 
                            that are disconnected by a 30-meter deep channel. Beneath the crystal clear waters of the channel, you’d find about 
                            285 species of colourful marine life, which includes tropical aquarium fish, snappers and the crevice-dwelling moray. 
                            Apart from being one of the best dive spots in the country, visitors will also love camping, dolphin watching, snorkelling, 
                            beach bumming, and enjoying the beautiful sunset and sunrise views.</p>  
                        </div>
                    </div>

                    <h4>Banaue Rice Terraces</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/philippines/tour-places/banaue-rice-terraces.jpg') }}" alt="Philippines">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>While ancient rice terraces are a relatively common sight in Asia, the Ifugaos’ Banaue Rice Terraces is unique for 
                            its high altitude. The people of Banaue carved this marvelous feat out of necessity as there were very few stretches of 
                            flat land for farming in the mountainous region of Ifugao. The terraces are considered one of the greatest engineering 
                            feats of the native Filipinos and can be seen from different viewpoints. But the best way to enjoy the scenery is 
                            through hiking. And if you’d like to witness its natural beauty, visit the terraces during summertime when rice plants are 
                            ready for harvesting.</p>  
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

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/philippines" data-numposts="5"></div>
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
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-singapore.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/singapore">Singapore - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-taiwan.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/taipei">Taiwan - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-thailand.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/thailand">Thailand - Cambodia Flight</a>
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