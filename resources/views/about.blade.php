@extends('index_header')
@section('index_body')
<section class="content">
    <div class="row g-5 my-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 wow ">
            <center>
                <h3>About US </h3>
            </center>

        </div>
    </div>
    <div class="container">
        <div class="row pb-5">
            <div class="col-sm-6">
                <img src="/img/about1.jpg" height="350px" width=100%>
            </div>
            <div class="col-sm-6 py-3">
                <p>
                    Digital vehicle is based on web Application.
                    Nowadays increasing public used vehicle via road. But they
                     are not followed any Rules and Regulation.
                    So this project is used to public vehicle details are stored to database. 
                    Police can view and check that details like (License, RC Book) and the can 
                    enter their punishment also.

                    These databases are handled by admin. Admin can only enter this system 
                    updated public document details and verify punishment details. 
                    Digital Vehicle RC Book Application Once police enters public 
                    punishment those details are updated to license.
                     Police can only enter punishment details and check Insurance Expiry date
                      and RC book validation details.

                    So it will be reduced time consuming for police. It is fully
                     automated system using android application “DIGITAL VEHICLE”. 
                     Earlier systems are fully manually maintained by police records. 
                     At anywhere anytime police can view public documents.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection