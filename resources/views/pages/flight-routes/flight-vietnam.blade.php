@extends('layouts.master-secondary')

@section('header', 'Vietnam')
@section('title', 'Vietnam Route')

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
                        <th scope="row">Hanoi - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Hanoi - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Hanoi - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Hanoi - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Hanoi - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Hanoi - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Hanoi - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                    <h3>Beautiful Places in Vietnam</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                            <p>Vietnam is becoming one of the world’s top destinations owing to its endless natural beauty. 
                            White sand beaches, limestone mountains, terraced rice fields and more beckon travelers from around the globe. 
                            Here are some of the most beautiful places to visit in Vietnam such as:</p>                                                   
                    </div>

                    <h4>Da Nang</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/da-nang.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Da Nang is Vietnam’s third largest city and lies approximately 30 k.m. north of Hoi An. This is the city you’ll 
                            fly into before driving south into the colonial town, but Da Nang is also a great city to explore. 
                            Like any coastal Vietnamese town or city, Da Nang’s white sand and clear water beaches are a must for beach lovers and 
                            it has some fabulous nightlife as well. The Dragon Bridge is illuminated at night and the whole city looks incredible 
                            from the vantage point of one of its many rooftop bars.</p>  
                        </div>
                    </div>

                    <h4>Sa Pa</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/sa-pa.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Home to several ethnic groups, Sa Pa has grown substantially in the past few years. While some are put off by 
                            the tourism boom in this once-quiet mountain town, there are still many good reasons to visit. We recommend you seek out 
                            a homestay in one of the surrounding villages. Also, if the weather permits, you can climb Fansipan, the tallest mountain 
                            in Indochina.</p>  
                        </div>
                    </div>

                    <h4>Ha Long Bay</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/ha-long-bay.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>When it comes to Vietnamese tourism, you have to mention Hạ Long Bay. The rampant commercialisation of 
                            this natural wonder may detract from its raw, undeniable beauty, but you have to escape the crowds first. 
                            Try to get on a reputable tour boat, or stay on Cát Bà island. Another option is a trip to nearby Bai Tu Long Bay.</p>  
                        </div>
                    </div>

                    <h4>Hang Son Doong</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/son-doong-cave.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Located near Vietnam’s border with Laos in the north-central province of Quang Binh, 
                            Sơn Đoòng Cave is known as the largest cave passage in the world. Stretching more than 5 k.m. 
                            and large enough to house an entire block of New York City, Sơn Đoòng Cave is an unparalleled adventure.</p>  
                        </div>
                    </div>

                    <h4>Mũi Né Sand Dunes</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/mui-ne-sand-dunes.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Vietnam really has it all – you can even experience the desert. The red and white sand dunes 
                            of Mũi Né are very popular with tourists and locals on a weekend trip from Saigon. Quad bikes and dune 
                            buggies are abound, so don’t expect any peace and quiet.The sand dunes Mũi Né are strange places. 
                            If it weren’t for the deep blue waters and jungle forests surrounding these little quirks, you might 
                            think you were in Namibia or Saudi Arabia.</p>  
                        </div>
                    </div>

                    <h4>Hue</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/hue.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>A UNESCO World Heritage Site, Hue was Vietnam’s Imperial City and later the capital of the country’s Nguyen emperors. 
                            Although the town was devastated by wars with the French and the Americans in the 19th and 20th centuries, it’s still 
                            filled with enthralling tombs, temples, and palaces. The Perfume River (Song Huong) winds through the city, with 
                            the Forbidden City looming over its north bank. Dating back to the early 19th century, this citadel stretches for 
                            three miles along the town’s waterfront. The Perfume River itself is delightfully atmospheric, dotted with houseboats, 
                            long-tail vessels, and dragon boats.</p>  
                        </div>
                    </div>

                    <h4>Hà Giang</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/ha-giang.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Hà Giang is rugged, remote and spectacular. This area features some of the best views in the country, 
                            overlooking terraced rice paddies and deep valleys that have been carved into the limestone mountains over 
                            thousands of years. And if you love motorbike rides, be sure to check out either the Quản Bạ Pass or 
                            the Mã Pí Lèng Pass.</p>  
                        </div>
                    </div>

                    <h4>Ban Gioc Waterfall</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/ban-gioc-waterfall.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>If you could custom build a desirable waterfall, it would resemble that of Ban Gioc, one of the largest, 
                            most majestic cascades in Vietnam. The falls, which have three magnificent levels divided by rocks and trees, 
                            have two sides: one in Vietnam and the other in China.</p>  
                        </div>
                    </div>

                    <h4>Yang Bay Waterfall</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/yang-bay-waterfall.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>At Yang Bay, you are spoilt for choice, with hot springs, mud spas, and lagoon swims. It can be overwhelming with 
                            all of the activities on offer, but if you’re simply looking for natural pools in which to cool off, Yang Bay is 
                            a pleasant and relaxing choice.</p>  
                        </div>
                    </div>

                    <h4>Thuy Tien Waterfall</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/vietnam/tour-places/thuy-tien-waterfall.jpg') }}" alt="Vietnam">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>This area of gentle waters in a wild forested and rocky landscape is a serene retreat. 
                            Three levels of falls create stunning panoramic views for nature lovers.</p>  
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

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/vietnam" data-numposts="5"></div>
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
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-thailand.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/thailand">Thailand - Cambodia Flight</a>
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