@extends('layouts.master-secondary')

@section('header', 'Myanmar')
@section('title', 'Myanmar Route')

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
                        <th scope="row">Yangon - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Yangon - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Yangon - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Yangon - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Yangon - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Yangon - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Yangon - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                    <h3>Beautiful Places in Myanmar</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                        <p>Oftentimes referred to as the Land of the Pagodas, the country of Myanmar has seemingly more of 
                        these religious structures than there are tourists actually visiting them. From the most neglected of temples 
                        in the heart of Bagan to the most frequented pagodas in the center of Yangon, here are the most unbelievable temples 
                        and pagodas to visit in Myanmar.</p>                                                   
                    </div>

                    <h4>Shwedagon Pagoda</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/myanmar/tour-places/shwedagon-pagoda.jpg') }}" alt="Myanmar">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>No visit to Yangon is complete without a visit to one of the most famous pagodas in the world. 
                            It is like the Eiffel Tower of Yangon—Yangon being the main commercial city of Myanmar. 
                            It is over 2,500 years old and is one of the holiest relics in the country, as it apparently 
                            enshrines strands of Buddha’s hair. The Buddhist pagoda’s grounds are made up of hundreds of towering 
                            stupas and sculptures. In addition to tourists meandering the grounds, the majority of visitors are 
                            locals who come here to worship.</p>  
                        </div>
                    </div>

                    <h4>Shwesandaw Pagoda</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/myanmar/tour-places/shwesandaw-pagoda.jpg') }}" alt="Myanmar">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Made up of five terraces, the Shwesandaw Pagoda stands at almost 100 meters tall and is one of these most memorable 
                            Buddhist pagodas in the city of Bagan. Found in Old Bagan, it was constructed in 1057 by King Anawrahta. 
                            It is white in color and used to house hair relics of the Buddha. Entrance into the Bagan Archeological Zone is 25,000 kyat, 
                            but this allows visitors entrance into both Old and New Bagan for five days from the date of issue. Be sure to carry 
                            this card at all times, as officials are known to come check for these cards, especially at sunset.</p>  
                        </div>
                    </div>

                    <h4>Ananda Temple</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/myanmar/tour-places/ananda-temple.jpg') }}" alt="Myanmar">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The thousands of temples and pagodas in Bagan took some 250 years to construct in total. One of the most phenomenal 
                            of them all is the Ananda Temple, one of the largest and oldest temples in the entire city. Unfortunately, 
                            past earthquakes have left the temple in need of some major restorations and destroyed the temple’s golden spire, 
                            however, the temple is still stunning regardless. The revered Buddhist temple was constructed by King Kyanzittha, and 
                            its construction was majorly influenced by the Mon. The grounds of the actual temple is shaped like a Greek cross, and 
                            visitors can meander the curved ceiling corridors and view the four golden Buddhas housed inside the structure.</p>  
                        </div>
                    </div>

                    <h4>Sule Pagoda</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/myanmar/tour-places/sule-pagoda.jpg') }}" alt="Myanmar">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Located in the city center of historic Yangon is the Sule Pagoda, thought to be some 2,000 years old. 
                            It is one of the first structures visitors lay eyes on as they approach the city; the pointed form shimmers under 
                            the sunlight at midday and lights up after dark. It was rebuilt in the 1880s and stands at about 48 meters tall. 
                            The pagoda now sits in the center of the roundabout at Sule Pagoda Road and Mahabandoola Road, with a flow of traffic 
                            consistently circling its exterior. The spire is actually octagonal in shape and apparently houses a hair of the Buddha. 
                            There is a 3,000 kyat entrance fee.</p>  
                        </div>
                    </div>

                    <h4>Hsinbyume Pagoda</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/myanmar/tour-places/hsinbyume-pagoda.jpg') }}" alt="Myanmar">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Nestled along the western bank of the Irrawaddy River is the Hsinbyume Pagoda. This structure is so white visitors 
                            will find themselves not wanting to climb on it, as the pristine structure seemingly gleams from afar. No pagoda is more 
                            photogenic than this pagoda, found in the Sagaing region in Mingun. It was built in 1816 during the reign of 
                            King Bagyidaw of the Konbaung dynasty. There is no entrance fee into the pagoda.</p>  
                        </div>
                    </div>

                    <h4>Shwezigon Pagoda</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/myanmar/tour-places/shwezigon-pagoda.jpg') }}" alt="Myanmar">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Located on the outskirts of Nyaung-U is the Shwezigon Pagoda. It was constructed during the reign of King Anawrahta, 
                            who was also the founder of the Bagan Empire. The pagoda was completed, however, by his son, King Kyanzittha. 
                            The main stupa is 49 meters tall and 49 meters wide at its base with four smaller additional stupas around 
                            the pagoda’s edges.</p>  
                        </div>
                    </div>

                    <h4>Dhammayangyi Temple</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/myanmar/tour-places/dhammayangyi-temple.jpg') }}" alt="Myanmar">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>The Dhammayangyi Temple is one of the largest and quite possibly the widest in Bagan. It was built in the 12th century 
                            during the reign of King Narathu, who apparently built the temple to make up for the many atrocities he committed 
                            during his lifetime, which included the murder of three of his family members. The temple has a gruesome past, 
                            as visitors can see small grooves in the exterior of the structure where workers apparently had fingers and 
                            limbs amputated if their work was not satisfactory.</p>  
                        </div>
                    </div>

                    <h4>Golden Rock</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/myanmar/tour-places/golden-rock.jpg') }}" alt="Myanmar">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Myanmar’s gigantic Golden Rock in Mon State is an absolute stunner at all times of the day as 
                            it looks as though it could roll off the side of Mount Kyaiktiyo any minute. And above this balancing 
                            gold-covered boulder perches Kyaiktiyo Pagoda – one of Myanmar’s most visited pagodas. Mount Kyaiktyio is 
                            nestled within lush, hilly terrain, offering a picturesque view not to be missed at sundown. 
                            The entire complex has several restaurants and overnight lodging options to take full advantage of 
                            allowing the horizon turn from dusky to darker.</p>  
                        </div>
                    </div>

                    <h4>Balloons over Bagan</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/myanmar/tour-places/balloons-over-bagan.jpg') }}" alt="Myanmar">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Though cycling around the thousands of temples and pagodas of Bagan is certainly a memorable experience, 
                            one of the most awe-worthy (yet expensive) ways to view the temples is by hot air balloon. Catch a glimpse of 
                            the Bagan Archaeological Zone from one too many meters high in the air in one of these balloons, which apparently 
                            began in 1999.</p>  
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

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/myanmar" data-numposts="5"></div>
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