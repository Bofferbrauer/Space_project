<body>

    <ul>
        <h1>Account details:</h1>
        @auth
        <li>First name: {{$user->first_name}}</li>
        <li>Last name: {{$user->last_name}}</li>
        <li>Country: {{$user->country}}</li>
        <li>Email: {{$user->email}}</li>


        <button onclick="window.location.href='update/user'">Edit</button>
        <button onclick="window.location.href='logout'">Logout</button>

        @endauth

        @if (!$booking == null)
        <h1>Booking details:</h1>

        <li>Payment: {{ $booking->payment }}</li>
        <li>Date of creation: {{ $booking->created_at }}</li>
        <li>Last updated: {{ $booking->updated_at}}</li>

        <!--Hidden section for paid users-->
        @if ($booking->payment == 'done' )
        <h2>Flight Info</h2>

        <li>Depart: {{ $flight->depart_date}} at {{ $flight->depart_time}}</li>
        <li>Arrival: {{ $flight->arrival_date}} at {{ $flight->arrival_time}}</li>
        <li>Status :{{ $flight->status}}</li>
        <li>Itinerary :{{ $flight->itinerary}}</li>
        <li>Location :{{ $flight->location}}</li>
        <li>Flight ref. :{{ $flight->fly_ref}}</li>

        <div>
            <p>


            </p>
        </div>

        <!-- Google maps-->

        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $flight->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org">pirate bay</a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 600px;
                    }
                </style><a href="https://www.embedgooglemap.net">google map html generator</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 600px;
                    }
                </style>
            </div>
        </div>
        <div> @if( $flight->location == 'NASA Kennedy Space Center')
            <!-- weather widget start -->
            <a target="_blank" href="https://hotelmix.fr/weather/orlando-19887">
                <!-- weather widget start -->
                <a target="_blank" href="https://www.booked.net/weather/orlando-19887">
                    <img src="https://w.bookcdn.com/weather/picture/32_19887_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=&anc_id=48006" alt="booked.net" /></a>
                <!-- weather widget end -->
                @ifelse( $flight->location == 'Baikonur Cosmodrome')
                <!-- weather widget start -->
                <a target="_blank" href="https://www.booked.net/weather/ayteke-bi-w651588">
                    <img src="https://w.bookcdn.com/weather/picture/32_w651588_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=&anc_id=48006" alt="booked.net" /></a>
                <!-- weather widget end -->
                @else
                <!-- weather widget start --><a target="_blank" href="https://hotelmix.fr/weather/kourou-17000">
                    <img src="https://w.bookcdn.com/weather/picture/32_17000_1_3_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=581&anc_id=94940" alt="booked.net" /></a>
                <!-- weather widget end -->
                @endif
        </div>

        @endif
        @endif





    </ul>
</body>