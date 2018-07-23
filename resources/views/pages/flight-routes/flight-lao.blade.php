@extends('layouts.master-secondary')

@section('header', 'Lao')
@section('title', 'Lao Route')

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
                        <th scope="row">Vientiane - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Vientiane - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Vientiane - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Vientiane - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Vientiane - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Vientiane - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Vientiane - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                    <h3>Beautiful Places in Lao</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                            <p>Laos is a majority Buddhist country with many functional temples and sacred places. It also has some of 
                            least touched natural areas in southeast Asia. Laos is an up and coming destination on the South East Asian tourist 
                            trail with many travelers attracted to this landlocked country due to its laid back lifestyle and stunning mountainous 
                            landscapes</p>                                                   
                    </div>

                    <h4>Pha That Luang</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/lao/tour-places/that-luang.jpg') }}" alt="Lao">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The great golden stupa is a national symbol of Laos both of Buddhism and national sovereignty. 
                            Legend has it that part of Buddha’s breast bone is buried here. Originally dating back to 300 CE, 
                            the most recent restoration was completed in the 1930s. In November visitors can take part in 
                            the three-day Boun That Luang Festival, one of the biggest in Vientiane.</p>  
                        </div>
                    </div>

                    <h4>Vat Phou</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/lao/tour-places/wat-phou.jpg') }}" alt="Lao">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Vat Phou or Wat Phu is a ruined Khmer temple complex spread over the lower slopes of Phu Pasak in southern Laos. 
                            It is considered to be one of the oldest archaeological sites in Laos. One temple in the site was constructed around 
                            the 5th century but most buildings found in the complex are from the 11th to 13th centuries. Wat Phu is small in 
                            comparison with the monumental Angkor sites in Cambodia, but older, earning itself the title of a World Heritage Site 
                            by UNESCO in 2002.</p>  
                        </div>
                    </div>

                    <h4>Buddha Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/lao/tour-places/buddha-park.jpg') }}" alt="Lao">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Buddha Park, also known as Xieng Khuan is located about 16 miles (26 km) outside of Vientiane Capital. 
                            The riverside park contains more than 200 Buddhist and Hindu concrete statues. The statues were built in 1958 
                            by Luang Phu Bounleua Soulilat, who fled Laos in 1975 when the Communist party took over the government.</p>  
                        </div>
                    </div>

                    <h4>Khone Phapheng Falls</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/lao/tour-places/khone-phapheng-falls.jpg') }}" alt="Lao">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Bordering Cambodia, and located in Champasak of Southern Laos, Khone Phapheng Falls are the largest set of 
                            cascading waterfalls in Southeast Asia. They form part of the Mekong River and the islands of Si Phan Don, 
                            and although the drop here is not as high as that of Kuang Si Falls, the water has a strong flow and its fall 
                            can be over 9 kilometers long. As well as many different kinds of fish, Irrawaddy dolphins and the endangered 
                            Mekong giant catfish can be found swimming in the streams of Khone Phapheng Falls.</p>  
                        </div>
                    </div>

                    <h4>Tad Lo</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/lao/tour-places/tad-lo.jpg') }}" alt="Lao">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Tad Lo is 56 miles (90 kilometers) away from the southern town of Pakse. Soak in the visual and aural splendor of 
                            the falls or take a dip and cool off from heat. Three cascades make up the falls: Tad Hang, Tad Lo itself and Tad Suong. 
                            Accommodations are available to spend the night and enjoy the surrounding scenery. Tad Lo is an impressive 
                            three-tiered waterfall in Salavan Province. Several guesthouses and restaurants around the falls make it 
                            an ideal lunch spot or stopover for trekking, swimming, and tubing. Tad Lo is accessible by bus, motorbike, 
                            or as part of a group tour package of the Bolaven Plateau.</p>  
                        </div>
                    </div>

                    <h4>Nam Ngum Reservoir</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/lao/tour-places/nam-ngum-lake.jpg') }}" alt="Lao">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Nam Ngum means beautiful water and the reservoir created by the dam of the same name certainly fits the bill. 
                            Hydropower is one Laos’ top exports and Laos’ largest lake has the added bonus of attracting tourists for boat rides, 
                            fishing and swimming. Visit the dam itself, the salt factory or the nearby casino on your way to or from Vientiane Capital.</p>  
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

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/lao" data-numposts="5"></div>
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