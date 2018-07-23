@extends('layouts.master-secondary')

@section('header', 'Taipei')
@section('title', 'Taipei Route')

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
                        <th scope="row">Taipei - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Taipei - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Taipei - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Taipei - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Taipei - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Taipei - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Taipei - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                    <h3>Beautiful Places in Taiwan</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                            <p>Planning what to explore in Taiwan? Here are the most beautiful sights and places in Taiwan, 
                            offering picturesque landscape and characteristic architecture, from the naturally formed volcano to 
                            the abandoned railway station embracing a stunning sea view such as:</p>                                                   
                    </div>

                    <h4>Lungteng Bridge</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/lungteng-bridge.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>As one of the old railways that connected citizens to other cities in the early 1900s, 
                            this bridge was left broken and deserted after a tremendous magnitude 7.1 earthquake in 1999, 
                            and was soon substituted by a new bridge built on its western side. Built only with bricks, 
                            Yuteng literally means a ‘fish-poisoning shrub’ that acts as a crescent blade to protect villagers 
                            against a legendary carp monster that lives inside the lake and brings hazardous events to the place. 
                            The magnificent remains of the bridge stand erect in Sanyi Town and are now the highest iron bridge in Taiwan. 
                            Every year in April, the bridge is embraced by White Tung flowers that construct a picturesque and stunning view.</p>  
                        </div>
                    </div>

                    <h4>Double Heart of Stacked Stones</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/double-heart-stack-stones.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>There are about 600 ancient stone fish traps in the world and Taiwan has 574 of them. The one in Qimri Township 
                            features a uniquely stacked pattern. Also known as the Twin-Heart Fish Strap, the Double Heart of Stacked Stones 
                            is located in Penghu County. It is notable for its well-preserved strap made of stacking stones that are structured 
                            in double-heart shape. The beautifully stacked rocky bank foils the clear and turquoise water, embodying the charm 
                            of nature.</p>  
                        </div>
                    </div>

                    <h4>Duo-liang Station</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/duo-liang-station.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div> 
                            <p>Managed by the Taiwan Railways Administration, Duo-liang Station is a now an obsolete elevated railway stop point 
                            in Taimali town. Overlooking the breathtaking landscape of the Pacific Ocean, and embraced by bushes and mountains 
                            that are naturally inviting, the abandoned railway station is regarded as the most beautiful in Taiwan, and 
                            the station with the most remarkable scenery. Duo-liang Station has officially ended its railway service and 
                            serves as a tourist spot with a roof terrace to enjoy to aerial view. Despite the end of its active service, 
                            the charm of the station still remains and trains will occasionally pass along the rail.</p>   
                        </div>
                    </div>

                    <h4>A Lang Yi Old Path</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/a-lang-yi.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>   
                            <p>A Lang Yi Old Path is an old trade route for indigenous people in the East with hundreds of years of history. 
                            The path stretches along streams, stunning coastal lines and sea cliffs. Watch out for the endangered Chelonia 
                            mydas turtles that reside in the rivers along the route. Strolling on the paved path, the azure sky heaves into sight, 
                            accompanied by the sound of waves lapping the shores. With the ocean on right of the path and mountain on the left, 
                            the fluctuating topography reflects the tectonic plate jams took place in the spot, and bears witness to 
                            the amazing power of nature. Plants with vibrant vitality, including phoenix hanceana, scolopia and the rare plant 
                            called Caecalpinia bonduc, flourish along the pavement.</p> 
                        </div>
                    </div>

                    <h4>Chishang</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/chishang.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>Abound with fruitful paddy fields, Chishang features fertile flatlands, turquoise lakes, and mountainous hills that 
                            make itself a must-go spot in Taitung County. The Daporiver in Chishang also has a long-history, and is 
                            a prestigious spot for cultivating rice and breeding fish, and contains ruins of Shauku old streams 
                            after they were blocked. The splendid paddy fields reflecting the setting sun add shining stained-glass-like colours 
                            to the farmland, while the rippling water in Dapo river is splendid, with rapeseed flowers growing alongside.</p>    
                        </div>
                    </div>

                    <h4>The Beitou Public Library</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/beitou-library.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>   
                            <p>Imbued with woods and trees, the Beitou Library (the Beitou branch of the Taipei Public Library) offers ‘forest bathing’ 
                            indulgence while reading good books in magnificently designed architecture. It received the diamond certificate of 
                            EEWH (ecology, energy saving, waste reduction, and health), as this green library was built entirely using 
                            recycled materials and woods from managed forests to create a eco-friendly reading space, with natural light adding to 
                            the relaxed atmosphere. Covered with photovoltaic cells, the roof converts sunlight into electricity, while rainfall 
                            is reserved to be used for toilet flushing. Displaying architectural distinctiveness, visitors will feel 
                            the joy of coexisting with nature.</p> 
                        </div>
                    </div>

                    <h4>Yangmingshan National Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/yangmingshan-national-park.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>Embrace the unique views of a sulfur cauldron and bathe your feet in the pools immersed with brimstones in 
                            Yangmingshan National Park. Noted for its total of 13 hot springs and sulfur deposits, where fumaroles are crusted with 
                            yellow-coloured crystals, the Mt Qixing volcano, with lava piling up and pyroclastic rocks scattered around the volcanic area, 
                            has an elevation of 1,120 meters above the sea level and features occasional eruption activities. With 20 or more volcanoes, 
                            the National Park covers a huge mountainous areas in Taipei, with a total area of 11,338 hectares, allowing visitors to enjoy 
                            the spectacles of nature free from distractions and noise.</p>    
                        </div>
                    </div>

                    <h4>Taroko National Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/taroko-national-park.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>    
                            <p>Featuring majestic waterscapes, Taroko National Park also boasts the Baiyang Trail which consists of distinctive waterfalls, 
                            and the Shakadang Trail with its verdant stream waters. The trails, characterized by tunnels with complete darkness, 
                            allow visitors to retreat from the hustle and bustle of the city to savour the picturesque view of water flowing from 
                            the brink to its base in an awe-inspiring way. Nature lovers will be impressed by the obvious climate difference in 
                            the boundaries of Taroko, between the mouth of Liwu River and the peak of Mount Nanhu, that are cut through by 
                            the Tropic of Cancer which separates the tropical and temperate zones.</p>
                        </div>
                    </div>

                    <h4>Ho Ping Island</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/ho-ping-island.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Blue skies, white clouds, well-maintained ecosystem and the clear ocean are what constitute Ho Ping Island. 
                            Ho Ping Island is connected to the off-the-coast Keelung City by Ho Ping Bridge, which might possibly be the first 
                            reinforced concrete bridge built in Taiwan. With precious geological landscapes, the shores of Ho Ping Island 
                            are abundant with wave-cut platforms, sea cliffs, wine erosion pillars, and chessboard rocks formed by alluvial flooding. 
                            Strolling along the shores, visitors can savour the picturesque beauty of the islet and capture the orange sun as it 
                            disappears behind the sparkling turquoise ocean.</p>  
                        </div>
                    </div>

                    <h4>Yehliu Geo Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/taiwan/tour-places/yehliu-geo-park.jpg') }}" alt="Taiwan">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>The rocks at Yehliu Geo Park are acclaimed as one of the world’s renowned natural wonders. The coast in Yehliu 
                            underwent multiple geological processes, including wave erosion, rock weathering, and crustal movement, to form such 
                            a peculiar yet rare landscape. The Geo Park is separated into three areas: the first area is the important 
                            congregation area of mushroom rocks and ginger rocks; the second one is prestigious of dragonite and diamond, 
                            including the 24-filial piety hill; and the third zone consists of a sea-erosion landscape, ranging from wave-cut platforms, 
                            torrent waves, to rocks in grotesque shapes. The famous Queen’s Head is an erosion pillar that resembles a lady wearing 
                            a crown crusted with jewels and diamonds, while the rose-like stones contain the traces left by fairies.</p>    
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

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/taipei" data-numposts="5"></div>
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