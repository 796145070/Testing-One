@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-3 "  >
            
             <img src="https://scontent-ams4-1.cdninstagram.com/vp/e7e2acae6b04810fca30360d764df90d/5DA14CC8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com" class="rounded-circle" style="width: 80px; ">

        </div>


       
        <div class="col-9 p5-5">
            <div> <h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-3"> <strong> 153K </strong> likes </div>
                <div class="pr-3"> <strong> 200K </strong> Followers </div>
                <div class="pr-3"><strong> 210K </strong> Following </div>
            </div>

            <div class="pt-4 font-weight-bold"> FreeLearning With AustadTotourials.org  </div>

            <div>   We are Providing different Netework and computer-based totourials and helps in English, Persian, Pashto, and German. </div>
            <div> <a href="#">Austadtotourials.com  </a> </div>
            <div class="pt-4"> </div>


         </div>
    </div>

    <div class="row">
        
        <div class="    col-4">
            <img src="https://scontent-ams4-1.cdninstagram.com/vp/e7e2acae6b04810fca30360d764df90d/5DA14CC8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com" class="w-100">
            
        </div>


        <div class="    col-4">
            <img src="https://scontent-ams4-1.cdninstagram.com/vp/e7e2acae6b04810fca30360d764df90d/5DA14CC8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com" class="w-100">
            
        </div>


        <div class="    col-4">
            <img src="https://scontent-ams4-1.cdninstagram.com/vp/e7e2acae6b04810fca30360d764df90d/5DA14CC8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com" class="w-100">
            
        </div>



    </div>








</div>
@endsection
