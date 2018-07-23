@extends('layouts.master-secondary')

@section('header', 'Malaysia')
@section('title', 'Malaysia Route')

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
                        <th scope="row">Kuala Lumpur - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Kuala Lumpur - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Kuala Lumpur - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Kuala Lumpur - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Kuala Lumpur - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Kuala Lumpur - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Kuala Lumpur - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                    <h3>Beautiful Places in Malaysia</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                            <p>The rich cultural panorama of Malaysia is defined by its diversity. The country is home to an ethnic mix of Malays, 
                            Chinese and Indians, as well as several indigenous groups who maintain age-old cultural traditions. 
                            This diversity becomes apparent as you travel across the country and the abundance of cultural attractions and 
                            activities is revealed. We take you to the best sites in the country, and reveal the best ways to experience Malaysia.</p>                                                   
                    </div>

                    <h4>Kuala Lumpur</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/malaysia/tour-places/petronas-twin-towers.jpg') }}" alt="Malaysia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Kuala Lumpur is its architectural mixture, as it displays a unique combination of towering high rises, 
                            with the Petronas Twin Towers being the most obvious example, and colonial structures left over from 
                            the British Empire. Apart from the Petronas Towers, particular highlights are Istana Budaya, or 
                            the Palace of Culture , Malaysia’s main theatre venue, the National Visual Arts Gallery, 
                            Contemporary Arts Space MAP and the Islamic Arts Museum. The shopping districts of Bukit Bintang and 
                            Merdeka Square are also not to be missed, as are the many markets of the Golden Triangle, 
                            Chinatown and Little India. </p>  
                        </div>
                    </div>

                    <h4>Kuala Kangsar</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/malaysia/tour-places/kuala-kangsar.jpg') }}" alt="Malaysia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Seat of the sultan of Perak since the 15th century, Kuala Kangsar is one of Malaysia’s most stunning royal towns. 
                            This peaceful town with a rich Malay culture is home to superb colonial architecture and attractive gardens. 
                            Two of the town’s finest colonial structures are found in its center: an eye-catching clock tower and the District Office. 
                            Malay College, another delightful colonial building, can be found north of the town. Dating back to the early 20th century, 
                            this school was the first in the country to provide English education.</p>  
                        </div>
                    </div>

                    <h4>Alor Setar</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/malaysia/tour-places/alor-setar.jpg') }}" alt="Malaysia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Most tourists who visit the State of Kedah end up spending their time in Langkawi. But approximately 55 kilometres 
                            (34 miles) southeast of the popular island sits an attractive and unexplored city called Alor Setar. 
                            Alor Setar’s central square features the intricate Zahir Mosque, the Big Clock Building, the Royal Hall and 
                            the Sultan Museum, with a fountain as the centrepiece. A little further afield, tourists can visit the 218-metre (715-feet) 
                            and 250 million-year-old Gunung Keriang limestone hill. Head to nearby Kuala Kedah and walk through the ruins of 
                            a 17th-century Malay fort, the oldest in Northern Malaysia.</p>  
                        </div>
                    </div>

                    <h4>Kota Kinabalu</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/malaysia/tour-places/kota-kinabalu.jpg') }}" alt="Malaysia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Sabah’s capital, Kota Kinabalu, might not appear beautiful at first. But behind the malls and buildings lie stretches 
                            of gorgeous orange-sand coastline, islands reachable within 10 minutes and the iconic floating mosque. Head to 
                            Tanjung Aru Beach for one of Borneo’s most spectacular sunsets or stroll along Likas Bay and marvel at the coast and 
                            islands. The five islands, known as Tunku Abdul Rahman Marine Park, are a favourite day trip for snorkelling, beaches 
                            and relaxation. Drive a short distance from the city and find untouched jungle.</p>  
                        </div>
                    </div>

                    <h4>Kellie’s Castle</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/malaysia/tour-places/kellie-castle.jpg') }}" alt="Malaysia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Located approximately 21 kilometres (13 miles) south of Ipoh in Batu Gajah, Kellie’s Castle is Malaysia’s 
                            most mysterious colonial building. William Kellie Smith made his fortune from rubber and ordered the construction of 
                            a large estate for his family. But after his sudden death, the half-finished mansion was forgotten and lost to the jungle. 
                            Since it was rediscovered and became a tourist attraction, secret passageways and rumours of the supernatural deepen 
                            its mystery and allure.</p>  
                        </div>
                    </div>

                    <h4>The Perhentians</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/malaysia/tour-places/perhentians.jpg') }}" alt="Malaysia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The small archipelago called the Perhentians, located in the South China Sea off the coast of Terengganu, 
                            features as one of the most beautiful places to visit in Malaysia. The main coral-surrounded islands consist of 
                            the aptly named Besar and Kecil, or Big and Small. Picture white sand stretching around sparsely populated areas with 
                            crystal clear shallow water lapping against the shore. Favourite activities, apart from relaxing in 
                            this little-visited tropical paradise, include scuba diving, snorkelling and canoeing. Those planning to visit should 
                            avoid the area during the Eastern Monsoon between March and October, when most hotels and guesthouses close.</p>  
                        </div>
                    </div>

                    <h4>The Cameron Highlands</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/malaysia/tour-places/cameron-highlands.jpg') }}" alt="Malaysia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The Cameron Highlands has been among the favourite places to visit in Malaysia since the end of the 19th century. 
                            British surveyor, William Cameron, ‘discovered’ the region in 1885 and it has since then grown as a tourist hotspot. 
                            The highlands range in altitude from approximately 1100 metres (3609 feet) to 1800 metres (5906 feet), producing 
                            a cooler and fresher climate. It’s not surprising that the Cameron Highlands became British Malaya’s largest hill station. 
                            Today, emerald green tea plantations dominate the skyline, along with strawberry and vegetable farms. Tourists enjoy 
                            the cooler climate and opportunities to go hiking.</p>  
                        </div>
                    </div>

                    <h4>Danum Valley</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/malaysia/tour-places/danum-valley.jpg') }}" alt="Malaysia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Danum Valley is by far the best place to visit in Malaysia for ecotourism and to experience untouched jungle. 
                            Located deep inside the 130 million-year-old lowland dipterocarp forest, the conservation area boasts incredible 
                            biodiversity. Inside the 438 square kilometres, are hundreds, if not thousands, of species of fauna, and an even greater 
                            variety of flora, that call this area home. Lucky tourists might spot orangutans, pygmy elephants and the clouded leopard. 
                            But the biggest appeal at Danum Valley is the lack of human settlement, providing a purer environment. Logging and 
                            deforestation have devastated habitats throughout Sabah, but not inside this protected area. Activities include jungle treks 
                            with experienced guides, night safaris and visiting ancient Kadazan-Dusun burial sites.</p>  
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

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/malaysia" data-numposts="5"></div>
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