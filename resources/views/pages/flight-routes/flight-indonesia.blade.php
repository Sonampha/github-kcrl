@extends('layouts.master-secondary')

@section('header', 'Indonesia')
@section('title', 'Indonesia Route')

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
                        <th scope="row">Jakarta - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Jakarta - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Jakarta - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Jakarta - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Jakarta - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Jakarta - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Jakarta - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                    <h3>Beautiful Places in Indonesia</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                        <p>As the world’s biggest archipelago, it’s safe to say that no other country has as many island destinations as Indonesia. 
                        Among its 17,000 islands, each with its own allure and charm, these are the most beautiful islands in Indonesia. 
                        Incredible natural landscapes including stunning ocean views as well as volcanoes, mountains and hills can be found across 
                        the country.</p>                                                   
                    </div>

                    <h4>Raja Ampat</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/raja-ampat.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>With one of the liveliest underwater scenes on the planet, this world-famous tropical paradise 
                            is home to over 530 species of coral, 700 species of mollusk, and 1,300 types of fish. 
                            Despite the magnetism of exotic species and a breathtaking island view, Raja Ampat remains largely 
                            pristine because of its remote location and vast locality. More than just a divers’ paradise, 
                            Raja Ampat also makes an unforgettable destination for birdwatchers, photographers, adventurers, 
                            and even those who long for a luxury vacation with an amazing view in a faraway island.</p>  
                        </div>
                    </div>

                    <h4>Dieng Plateau</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/dieng-plateau.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Perched at 2,000 meters (6,562 feet) above sea level, Dieng Plateau is one of the coolest destinations 
                            in Indonesia, and not just weather-wise. Both a natural and cultural destination, there are many things to see 
                            and do in Dieng Plateau. Other than the sweeping mountain view of jungles and distant villages, this highland 
                            also has a multi-colored lake, hot spring, and ancient Hindu temples. Once a year, tourists flock to the spot for 
                            a much-anticipated festival that includes traditional rituals, performances, and jazz above the clouds.</p>  
                        </div>
                    </div>

                    <h4>Lake Toba</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/lake-toba.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Toba is not only Indonesia’s biggest lake, it is also one of its most beautiful; it is stunning from every angle. 
                            Almost twice the size of Singapore, there are many viewpoints to enjoy the sight of this volcanic lake, surrounded by 
                            hills and lush greenery. While in the nearby villages, tourists can also explore the fascinating Batak culture, 
                            with its captivating traditions and cultural objects. Tourists can also visit Samosir, the small charming island in 
                            the middle of Lake Toba.</p>  
                        </div>
                    </div>

                    <h4>Borobudur Temple</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/borobudur-temple.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The world’s biggest Buddhist sanctuary is a must-visit attraction, not only because of its religious significance 
                            but also for its beauty and charm. Built around the eighth century, this temple is a reflection of the country’s long 
                            and intricate history that covers religion, culture, customs, architecture, and more. Tourists can observe the ornate 
                            and mesmerizing stone carvings, gaze of the main grand structure, and immerse themselves in the surrounding scenic view 
                            that includes the sunrise, jungles, and faraway hills.</p>  
                        </div>
                    </div>

                    <h4>Bangka Belitung Islands</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/bangka-belitung-island.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Located off the coast of mainland Sumatra, Bangka Belitung Island is famed for its idyllic beaches 
                            with blissful white sand, iconic granite boulders, and palm trees. But beyond the translucent water 
                            and hypnotizing sunsets, the locality is also home to impressive cultural and historical landmarks—many of 
                            which are heritage buildings from the colonial era—that suit the charming natural view. From this archipelago, 
                            tourists can also venture to the surrounding smaller inhabited islands for even more pristine natural beauty.</p>  
                        </div>
                    </div>

                    <h4>Mount Bromo</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/mount-bromo.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>This volcano, often surrounded by smoke and a multi-colored sky, has become one of the most iconic sights from 
                            Indonesia. Watching the sunrise at Mount Bromo from Java Island is a popular excursion that offers and unforgettable 
                            experience. The volcano also shares the area with a vast desert, other lush mountains and hills, sweeping flower fields, 
                            and some waterfalls, most of which can be explored in a day or two.</p>  
                        </div>
                    </div>

                    <h4>Wakatobi National Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/wakatobi-national-park.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Declared a UNESCO World Heritage Site in 2005, this marine park sustains the life of hundreds of species, 
                            from coral reefs and fish to sea birds. It’s also a world-famous diving site. The park includes four main islands, 
                            with historical ruins, old villages and various ancient traditions.</p>  
                        </div>
                    </div>

                    <h4>Belitung</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/belitung.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Like so many of Indonesia’s islands, Belitung is rightly known for its beaches. These aren’t ordinary beaches 
                            though that have emerged off the coast of Sumatra. All around its famous northern shores, giant smooth white stones 
                            reminiscent of glaciers adorn the beaches and sea. A boat can be hired from the local fishermen for an entire day’s worth 
                            of snorkeling, swimming, exploring the rocks, and visiting all the other tiny unpopulated islands around Belitung.</p>  
                        </div>
                    </div>

                    <h4>Karimunjawa</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/karimunjawa.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Every year, a new travel destination in Indonesia seems to get discovered and hyped. This year, Karimunjawa is 
                            the latest group of islands to have garnered plenty of attention from local tourists especially. Still rather 
                            difficult to get to, Karimunjawa is the small archipelago that makes up a marine conservation area north of Central Java, 
                            boasting thick mangrove forests, bright white beaches, and virgin atolls and reefs full of all colors imaginable.</p>  
                        </div>
                    </div>

                    <h4>Komodo National Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/indonesia/tour-places/komodo-national-park.jpg') }}" alt="Indonesia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Whilst the island of Komodo and the endemic giant lizard of the same name is the main draw here, the National Park 
                            actually spans 29 diverse and unique islands. Best explored by chartered traditional wooden ships, the numerous highlights 
                            of this UNESCO heritage site include a trek up to the highest point of Padar Island, taking in the colors of Pink Beach, 
                            meeting schools of Manta-rays at Manta Point, and, of course, observing the enigmatic Komodo Dragons in their natural habitat.</p>  
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

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/indonesia" data-numposts="5"></div>
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