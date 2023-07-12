@extends('common.main')
@push('title')
<title></title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap');
@import url(https://weloveiconfonts.com/api/?family=entypo);



.profile-banner{
  height:256px;
  width:auto;
  background-image:url('https://picsum.photos/seed/picsum/1000/520');
  background-size:100%;
  border-radius:10px;
}

.profile-picture{
  height:150px;
  width:150px;
  border-radius:50%;
  margin: 0 auto;
  position:relative;
  top:-90px;
  text-align:center;
  border:10px solid #fff;
}

.profile-picture span{
  font-size:20pt;
}

.profile-picture small{
  font-size:13pt;
  color:#cacaca;
}

.profile-picture img{
  border-radius:50%;
  height:100%;
  width:100%;
}

.add-frnd{
  width:90px;
  position:absolute;
  left:-130px;
  top:100px;
  background:#00A9FA;
  padding:5px;
  border-radius:10px;
  font-size:13pt;
  text-decoration:none;
  color:#fff;
  transition:0.5s;
}

.follow{
  width:70px;
  position:absolute;
  margin-left:180px;
  top:100px;
  background:#00A9FA;
  padding:5px;
  border-radius:10px;
  font-size:13pt;
  text-decoration:none;
  color:#fff;
  transition:0.5s;
}

.follow span{
  font-size:13pt;
}

.add-frnd span{
  font-size:13pt;
}

.follow:hover{
  transition:0.5s;
  background:#0079FA;
}

.add-frnd:hover{
  transition:0.5s;
  background:#0079FA;
}

.profile-content{
  height:60%;
  width:100%;
}

.profile-content div{
  float:left;
}

.content-left{
  height:300px;
  width:25%;
  border-radius:10px;
}

.content-middle{
  height:300px;
  width:65%;
}

.content-right{
  height:300px;
  width:10%;
}

.content-left ul{
  list-style:none;
  padding:0;
  border:1px solid #f8f8f8;
  border-radius: 10px;
}

.content-left ul li{
  padding:15px;
  /* margin-top:5px; */
  border-bottom:1px solid #f8f8f8;
}

.content-left ul li:hover{
  transition:0.5s;
  background:#f8f8f8;
}

.content-left ul li a{
  font-size:14pt;
  color:#cacaca;
}

.content-left ul li span{
  font-size:12pt;
  margin-right:5px;
}

.content-md-left{
  width:15%;
  height:100%;
  padding-top:20px;
  text-align:center;
}

.content-md-left img{
  height:85px;
  border-radius:50%;
}

.content-md-middle{
  width:85%;
  height:500px;
  padding-top:20px;
}

.post-title-name{
  height:10%;
  width:100%;
  line-height:30px;
  padding-left:10px;
}

.post-title-name a{
  text-decoration:none;
  color:#000;
  font-size:14pt;
  font-weight:bold;
}

.post-title-name a:hover{
  transition:0.5s;
  text-decoration:underline;
  color:#121212;
}

.post-title-time{
  height:5%;
  width:100%;
  font-size:10pt;
  padding-left:10px;
  transition:0.5s;
  text-decoration:none;
  margin-top:-20px;
}

.post-title-time a{
  color:#cacaca;
}

.post-title-time a:hover{
  transition:0.5s;
  text-decoration:underline;
}


.post-desc{
  width:100%;
  height:385px;
  padding-left:10px;
  padding-top:10px;
}

.post-desc img{
  margin-top:20px;
  border-radius:10px;
}

.post-desc a:hover{
  opacity:0.8;
  transition:0.5s;
}

.post-info{
  height:10%;
  width:100%;
  border-bottom:1px solid #f8f8f8;
  margin-top:-10px;
}

.post-info ul{
  list-style:none;
  padding:0;
}

.post-info ul li{
  float:left;
  margin-right:5px;
  border-right:1px solid #f8f8f8;
}

.post-info ul li a{
  font-size:12pt;
  text-decoration:none;
  color:#cacaca;
  /* border-right:1px solid #cacaca; */
  padding-left:10px;
  padding-right:10px;
}

.like:hover{
  transition:0.5s;
  color:#00A9FA;
}

.comment:hover{
  transition:0.5s;
  color:#121212;
}

.share:hover{
  transition:0.5s;
  color:#FAB35F;
}

.content-right ul{
  padding:0;
  list-style:none;
}

.content-right ul li{
  height:50px;
  width:50px;
  display:block;
  background:#f8f8f8;
  text-align:center;
  line-height:50px;
  border-radius:50%;
  margin-top:10px;
}

.content-right ul li a{
  text-decoration:none;
  color:#00A9FA;
}

.content-right ul li:hover{
  background:#ededed;
}
</style>
@endpush
@section('main-section')



<div class="profile">
  
  <div class="profile-banner">
    
  </div>
  <div class="profile-picture">
  
    <a href="" class="add-frnd">Add Friend <span class="entypo-user-add"></span></a>
    <a href="" class="follow">Follow <span class="entypo-plus"></span></a>
    
    <a href=""><img src="https://i.pravatar.cc/300?img=7"></a>
    <span>Daniel Jack</span>
    <br>
    <small>(Jack Daniel)</small>
  </div>
  
  <div class="profile-content">
  
    <div class="content-left">
    
      <ul>
        
        <li><a><span class="entypo-compass"></span> USA, California</a></li>
        <li><a><span class="entypo-graduation-cap "></span> California College of the Arts </a></li>
        <li><a><span class="entypo-suitcase"></span> Graphic Designer at Wicrosoft</a></li>
        <li><a><span class="entypo-lock-open"></span> Public</a></li>

      </ul>
      
    </div>
    
    <div class="content-middle">
    
      <div class="content-md-left">
        
        <img src="https://i.pravatar.cc/300?img=7">
        
      </div>
      
      <div class="content-md-middle">
        
        <div class="post-title-name">
          <a href="">Daniel Jack</a><br>
        </div>
        
        <div class="post-title-time">
          <a href="">Saturday 13:52</a>
        </div>
        
         <div class="post-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie eleifend orci non varius. Integer et mauris quis neque blandit sagittis.
           <br>
           <a href=""><img src="https://picsum.photos/seed/picsum/300/320"></a>
           
        </div>
        
        <div class="post-info">
        
          <ul>
          
            <li><a href="" class="like"><span class="entypo-thumbs-up"></span> Like</a></li>
            <li><a href="" class="comment"><span class="entypo-comment"></span> Comment</a></li>
            <li><a href="" class="share"><span class="entypo-share"></span> Share</a></li>
            
          </ul>
            
        </div>
      
      </div>
      
    </div>
    
    <div class="content-right">
      
      <ul>
        
        <li><a href=""><span class="entypo-chat"></span></a></li>
        <li><a href=""><span class="entypo-camera"></span></a></li>
        <li><a href=""><span class="entypo-export"></span></a></li>

        
      </ul>
      
      
    </div>
    
    
  </div>
  
    
</div>


<!-- <div class="bg-gray-100"> -->
<!-- <div class="container mx-auto py-8"> -->

<!-- <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
    <div class="col-span-4 sm:col-span-3">
        <div class="bg-white shadow rounded-lg p-6">
            <div class="flex flex-col items-center">
                <img src="https://randomuser.me/api/portraits/men/94.jpg" class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">

                </img>
                <h1 class="text-xl font-bold">John Doe</h1>
                <p class="text-gray-600">Software Developer</p>
                <div class="mt-6 flex flex-wrap gap-4 justify-center">
                    <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Contact</a>
                    <a href="#" class="bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 px-4 rounded">Resume</a>
                </div>
            </div>
            <hr class="my-6 border-t border-gray-300">
            <div class="flex flex-col">
                <span class="text-gray-600 uppercase font-bold tracking-wider mb-2">Skills</span>
                <ul>
                    <li class="mb-2">JavaScript</li>
                    <li class="mb-2">React</li>
                    <li class="mb-2">Node.js</li>
                    <li class="mb-2">HTML/CSS</li>
                    <li class="mb-2">Tailwind Css</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-span-4 sm:col-span-9">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-bold mb-4">About Me</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est
                vitae tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas
                suscipit. Nunc finibus vel ante id euismod. Vestibulum ante ipsum primis in faucibus orci luctus
                et ultrices posuere cubilia Curae; Aliquam erat volutpat. Nulla vulputate pharetra tellus, in
                luctus risus rhoncus id.
            </p>

            <h3 class="font-semibold text-center mt-3 -mb-2">
                Find me on
            </h3>
            <div class="flex justify-center items-center gap-6 my-6">
                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds LinkedIn" href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                        <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                        </path>
                    </svg>
                </a>
                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds YouTube" href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-6">
                        <path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                        </path>
                    </svg>
                </a>
                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Facebook" href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6">
                        <path fill="currentColor" d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                        </path>
                    </svg>
                </a>
                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Instagram" href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6">
                        <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                        </path>
                    </svg>
                </a>
                <a class="text-gray-700 hover:text-orange-600" aria-label="Visit TrendyMinds Twitter" href="" target="_blank"><svg class="h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                        </path>
                    </svg>
                </a>
            </div>


            <h2 class="text-xl font-bold mt-6 mb-4">Experience</h2>
            <div class="mb-6">
                <div class="flex justify-between">
                    <span class="text-gray-600 font-bold">Web Developer</span>
                    <p>
                        <span class="text-gray-600 mr-2">at ABC Company</span>
                        <span class="text-gray-600">2017 - 2019</span>
                    </p>
                </div>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae
                    tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas
                    suscipit.
                </p>
            </div>
            <div class="mb-6">
                <div class="flex justify-between">
                    <span class="text-gray-600 font-bold">Web Developer</span>
                    <p>
                        <span class="text-gray-600 mr-2">at ABC Company</span>
                        <span class="text-gray-600">2017 - 2019</span>
                    </p>
                </div>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae
                    tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas
                    suscipit.
                </p>
            </div>
            <div class="mb-6">
                <div class="flex justify-between">
                    <span class="text-gray-600 font-bold">Web Developer</span>
                    <p>
                        <span class="text-gray-600 mr-2">at ABC Company</span>
                        <span class="text-gray-600">2017 - 2019</span>
                    </p>
                </div>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus est vitae
                    tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit egestas
                    suscipit.
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div> -->


@endsection