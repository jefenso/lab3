<style>
		.gallery {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin: 20px;
		}
		
		.gallery img {
			margin: 10px;
			max-width: 300px;
			max-height: 300px;
			object-fit: cover;
			
		}
		
		.gallery img:hover {
			filter: brightness(110%);
            max-width: 1000px;
			max-height: 1000px;
		}
		
		.modal {
			display: none;
			position: fixed;
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgba(0, 0, 0, 0.9);
		}
		
		.modal-content {
			margin: auto;
			display: block;
			width: 80%;
			max-width: 700px;
			max-height: 80%;
			object-fit: contain;
			padding: 20px;
			background-color: #fefefe;
			border: 1px solid #888;
			box-shadow: 0 0 20px 5px rgba(0, 0, 0, 0.8);
			animation-name: zoom;
			animation-duration: 0.6s;
		}
		
		@keyframes zoom {
			from {transform: scale(0);}
			to {transform: scale(1);}
		}
		
		.close {
			position: absolute;
			top: 10px;
			right: 25px;
			color: #f1f1f1;
			font-size: 35px;
			font-weight: bold;
			cursor: pointer;
		}
		
		.close:hover,
		.close:focus {
			color: #bbb;
			text-decoration: none;
			cursor: pointer;
		}
		
		.mySlides {
			display: none;
		}
		
		.cursor {
			cursor: pointer;
		}
		
		.prev,
		.next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			width: auto;
			padding: 16px;
			margin-top: -50px;
			color: white;
			font-weight: bold;
			font-size: 20px;
			transition: 0.6s ease;
			border-radius: 0 3px 3px 0;
			user-select: none;
			-webkit-user-select: none;
		}
		
		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}
		
		.prev:hover,
		.next:hover {
			background-color: rgba(0, 0, 0, 0.8);
		}
		
		.caption-container {
			text-align: center;
			background-color: rgba(0, 0, 0, 0.8);
			padding: 2px 16px;
			color: white;
		}
		
		img.demo {
			opacity: 0.6;
		}
		
		.active,
		.demo:hover {
			opacity: 1;
		}
		
		@media only screen and (max-width: 700px){
			.prev, .next,.modal-content {
				font-size: 11
            }
        }
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}
</style>
</head>
<div style="padding-top: 50px">
<h1 class="glow">INTERESTS</h1>


<img src="https://media.discordapp.net/attachments/1035071852567068732/1082233392399130684/01a2bec9215e87154bff235a9e4512c3_2439941607435755663.png?width=1200&height=670" class = "w3-round-large center">

<br>

<div  class="gallery">

    <img src="https://cdn.discordapp.com/attachments/1035071852567068732/1082225718462775346/Elysia_Stigmata_T.webp" alt="Picture 6">
    <img src="https://cdn.discordapp.com/attachments/745517051040497785/1082259409549398026/Elysia_Stigmata_M.webp" alt="Picture 7">
    <img src="https://media.discordapp.net/attachments/1035071852567068732/1082226209787740251/Elysia_Stigmata_B.webp?width=670&height=670" alt="Picture 8">
    
</div>

<img src="https://pbs.twimg.com/media/FamJwhTaMAcWDuq.jpg" class = "w3-round-large center">

<div  class="gallery">

    <img src="https://cdn.discordapp.com/attachments/745517051040497785/1082254658187305072/Elysia_-_Pristine_T.webp" alt="Picture 6">
    <img src="https://media.discordapp.net/attachments/745517051040497785/1082254812105687130/Elysia_-_Pristine_B-1.webp?width=670&height=670" alt="Picture 7">
    <img src="https://media.discordapp.net/attachments/745517051040497785/1082254709299085332/Elysia_-_Pristine_M.webp?width=670&height=670" alt="Picture 8">
    
</div>

<div style="padding-top: 30px">
<h2 class="glow4" style="text-align:center">OTHER STUFF I LIKE</h2>
</div>

<body>
	<div class="gallery">

		<img src="https://media.discordapp.net/attachments/1032851131803643924/1082221732955439156/Aru.jpg?width=395&height=670" alt="Picture 1">
        <img src="https://media.discordapp.net/attachments/1035071852567068732/1082222429088260186/20230304_175236.jpg?width=463&height=670" alt="Picture 2">
        <img src="https://media.discordapp.net/attachments/1035071852567068732/1082222430984085575/20230214_154524.jpg?width=473&height=670" alt="Picture 3">
        <img src="https://media.discordapp.net/attachments/1032851131803643924/1082223336693706752/himari_blue_archive_drawn_by_s2j00__sample-e6e775b43cd029e07c1b399b4502eb9e.png?width=536&height=668" alt="Picture 4">
        <img src="https://media.discordapp.net/attachments/1032851131803643924/1082223674221928478/Tsukatsuki.png?width=411&height=670" alt="Picture 4">
        <img src="https://media.discordapp.net/attachments/1035071852567068732/1082223440087502958/20221223_102156.jpg?width=401&height=670" alt="Picture 5">


      
        <img src="https://media.discordapp.net/attachments/713267240149057587/1082254280519585813/image.png?width=720&height=670" alt="Picture 9">
        <img src="https://media.discordapp.net/attachments/713267240149057587/1082255305821392977/334192618_959804038765563_1717746330716231365_n.jpg?width=310&height=670" alt="Picture 10">
        <img src="https://media.discordapp.net/attachments/713267240149057587/1082256010930028646/images_37.jpg?width=536&height=668" alt="Picture 11">
        <img src="https://media.discordapp.net/attachments/713267240149057587/1082256341793505390/FB_IMG_1677740379074.jpg?width=670&height=670" alt="Picture 12">
        <img src="https://media.discordapp.net/attachments/713267240149057587/1082256288567787520/mikkun.jpg?width=608&height=670" alt="Picture 13">
        <img src="https://media.discordapp.net/attachments/713267240149057587/1082256759399403540/image0.jpg?width=710&height=532" alt="Picture 14">
        <img src="https://cdn.discordapp.com/attachments/713267240149057587/1082257077428305920/1x1.jpg" alt="Picture 15">
        <img src="https://media.discordapp.net/attachments/713267240149057587/1082257242604191814/20230224_094819.jpg?width=693&height=670" alt="Picture 16">
        <img src="https://cdn.discordapp.com/attachments/713267240149057587/1082258606013026404/naotoselp.jpg" alt="Picture 17">
        
        
        
        
        
        


	</div>

    <div style="padding-top: 30px">
<h2 class="glow4" style="text-align:center">CUTE AND FUNNY </h2>
</div>

<div  class="gallery">
<img src="https://media.discordapp.net/attachments/713267240149057587/1082259853847834674/350.png?width=437&height=437" alt="Picture 18">
<img src="https://cdn.discordapp.com/attachments/799514529188675585/1082265767791317012/Hoshimachi_Suisei_-_Portrait_04.png" alt="Picture 23">
<img src="https://cdn.discordapp.com/attachments/799514529188675585/1082265811441438851/Moona_Hoshinova_-_Portrait_01.png" alt="Picture 23">
<img src="images/Miori_Celesta_-_Headshot.png" alt="Picture 22">
<img src="https://cdn.discordapp.com/attachments/799514529188675585/1082267464232083556/La_Darknesss_-_Portrait_01-1.png" alt="Picture 21">
<img src="https://cdn.discordapp.com/attachments/1035071852567068732/1082268671017230346/Hoshikawa_Sara_Portrait.png" alt="Picture 19">
<img src="https://cdn.discordapp.com/attachments/799514529188675585/1082267965975703552/Kaela_Kovalskia_-_Portrait_01.png" alt="Picture 20">

</div>

<div  class="gallery">

<img src="https://cdn.discordapp.com/attachments/1035071852567068732/1082269716179071026/Takane_Lui_-_Portrait_01.png" alt="Picture 17">



</div>

<div style="padding-top: 30px">
<h2 class="glow4" style="text-align:center">STUFF I EDITED</h2>
</div>


<div class="center" >
<video width="1200" height="800" controls >
  <source src="images/IMG_20230126_203723.mp4" type="video/mp4">

Your browser does not support the video tag.
</video> 
</div>
<div  class="gallery">


<img src="https://media.discordapp.net/attachments/713267240149057587/1082258766633898044/image.png?width=673&height=473" alt="Picture 6">

<img src="https://media.discordapp.net/attachments/1032851131803643924/1073977877151887500/IMG_20230211_224425.jpg?width=893&height=670" alt="Picture 8">


</div>
	
