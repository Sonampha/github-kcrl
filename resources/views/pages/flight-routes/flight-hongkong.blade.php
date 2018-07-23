@extends('layouts.master-secondary')

@section('header', 'Hong Kong')
@section('title', 'Hong Kong Route')

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
                        <th scope="row">Hong Kong - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Hong Kong - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Hong Kong - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Hong Kong - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Hong Kong - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Hong Kong - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Hong Kong - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                    <h3>Beautiful Places in Hong Kong</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                            <p>With its countless waterfronts, high mountain peaks and dizzying skyscrapers, 
                            there’s no shortage of amazing scenic views in Hong Kong. Some of the best scenes 
                            combine the area’s natural beauty with its man-made skyline. Here, we’ve gathered 
                            the top places where you can enjoy the beauty of Hong Kong such as:</p>                                                   
                    </div>

                    <h4>The Peak</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/hongkong/tour-places/the-peak.jpg') }}" alt="Hongkong">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The Peak is Hong Kong’s most-visited attraction, and for good reason. The Sky Terrace 428 
                            (so named because it’s 428 meters above sea level) is on the roof of the Peak Tower, right at 
                            the summit of Victoria Peak. With a 360-degree panorama, including views of the harbor, 
                            skyline and surrounding mountainside, there’s no shortage of ‘wow’ factor at the city’s highest vantage point.</p>  
                        </div>
                    </div>

                    <h4>Lantau Peak</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/hongkong/tour-places/lantau-peak.jpg') }}" alt="Hongkong">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Lantau Peak is the second-highest peak in Hong Kong, and on clear days the view from this vantage point stretches 
                            as far as Macau. It can be accessed via a 25-minute cable car trip via the Ngong Ping 360, or alternatively, 
                            a two-hour hike along one of Hong Kong’s most famous scenic trails. It’s not uncommon for hikers to begin 
                            the journey at 4am to catch the stunning sunrise.</p>  
                        </div>
                    </div>

                    <h4>Ozone Bar</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/hongkong/tour-places/ozone-bar.jpg') }}" alt="Hongkong">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div> 
                            <p>Enjoy a glimmering night view of the harbor with a cocktail in hand on the terrace of the Ritz-Carlton Hotel’s Ozone bar. 
                            Located on the 118th floor of the International Commerce Center, Ozone is the highest bar in the world at almost half 
                            a kilometer above sea level. If it gets chilly on the terrace, you can always duck indoors for some quality Asian tapas and 
                            an excellent DJ.</p>   
                        </div>
                    </div>

                    <h4>Ma On Shan Promenade</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/hongkong/tour-places/ma_on_shan_waterfront.jpg') }}" alt="Hongkong">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>   
                            <p>Victoria Harbor may be Hong Kong’s most famous waterfront, but it’s by no means Hong Kong’s only waterfront. 
                            The 3.2km-long Ma On Shan Promenade in Sha Tin overlooks Tide Cove and Tolo Harbor, as well as the mountain range 
                            along the northeast New Territories. This beautiful walkway is rarely crowded and is adjacent to Ma On Shan Park and 
                            Wu Kai Sha Beach.</p> 
                        </div>
                    </div>

                    <h4>Tsim Sha Tsui Promenade</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/hongkong/tour-places/tsim-sha-tsui-promenade.jpg') }}" alt="Hongkong">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>Tsim Sha Tsui’s waterfront is spectacular at any time of day. From here, you can clearly see the Hong Kong Island 
                             and get an up-close look at the boats and ferries approaching the harbor. The Symphony of Lights is staged by 
                             the Hong Kong Tourism Board every night at 8pm. Lasting for around a quarter of an hour, the show consists of music, 
                             laser light displays and pyrotechnic fireworks.</p>    
                        </div>
                    </div>

                    <h4>Nan Lian Garden</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/hongkong/tour-places/nan-lian-garden.jpg') }}" alt="Hongkong">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>This public park is designed in the style of a Tang dynasty landscaped garden. Featuring lush gardens, pagodas, 
                            pavilions and lotus ponds, Nan Lian Garden is an oasis of beauty and calm amid bustling Hong Kong. The garden is 
                            managed by the adjacent Chi Lin Nunnery, which houses a popular vegetarian restaurant.</p>    
                        </div>
                    </div>

                    <h4>Ocean Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/hongkong/tour-places/ocean-park.jpg') }}" alt="Hongkong">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>Ocean Park is Hong Kong’s largest theme park and an absolute must if you have children with you. 
                            Highlights include the numerous amusement rides, the Grand Aquarium, the giant panda exhibit and 
                            the cable car that connects the park’s two main regions.</p>    
                        </div>
                    </div>

                    <h4>Disneyland</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/hongkong/tour-places/disney-land.jpg') }}" alt="Hongkong">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>Hong Kong Disneyland is the city’s other major theme park together with Ocean Park. 
                            Situated on reclaimed land on Lantau Island, it opened in 2005 and, despite being smaller than 
                            other Disney parks, still offers families plenty of fun and Disney sparkle.</p>    
                        </div>
                    </div>

                    <h4>Violet Hill</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/hongkong/tour-places/violet-hill.jpg') }}" alt="Hongkong">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>Nestling on the Wilson Trail are the peaks of Violet Hill and The Twins of Hong Kong Island. 
                            Skip the high intensity workout and opt for this hike. Even though this is one of the shortest hikes on 
                            this list, it is also a contender for the hardest with the track providing plenty of steep flights of stairs 
                            both downhill or uphill. Early summer mornings are the best time of year for hiking, when the southern waters of 
                            Hong Kong reflect the bright sky and you’ll even come across friendly trail runners who are starting their day early. 
                            Along the way, the path takes in views of Wong Nai Chung Reservoir, valleys and lilac flowers of 
                            the Tai Tam Country Trail.</p>    
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

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/hongkong" data-numposts="5"></div>
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