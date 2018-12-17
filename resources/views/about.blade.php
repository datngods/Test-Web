@extends('layouts.app')
<!-- header -->
@section('header')
  @include("layouts.login")
	@include('layouts.header')
	@include('layouts.nav')
@endsection
@section('content')

<!-- team -->
	<div class="team">
		<div class="container">
			<h3>Meet Our Team</h3>
			<div class="wthree_team_grids">
				<div class="col-md-3 wthree_team_grid">
					<img src="images/8.png" alt=" " class="img-responsive" />
					<h4>Smith Allen <span>Fashion Designer</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<img src="images/9.png" alt=" " class="img-responsive" />
					<h4>Laura James <span>Fashion Designer</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<img src="images/10.png" alt=" " class="img-responsive" />
					<h4>Crisp Doe <span>Fashion Designer</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<img src="images/11.png" alt=" " class="img-responsive" />
					<h4>Linda Rosy <span>Fashion Designer</span></h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
				<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
					voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
					repellat.</p>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- team-bottom -->
	<div class="team-bottom">
		<div class="container">
			<h3>Are You Ready For Awesomeness? Flat <span>50% Offer</span> For Women's</h3>
			<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
				voluptatibus maiores alias consequatur aut perferendis doloribus asperiores 
				repellat.</p>
			<a href="dresses.html">Shop Now</a>
		</div>
	</div>
<!-- //team-bottom -->
<!-- newsletter -->
<!-- //newsletter -->
@endsection
@section('footer')
	@include('layouts.footer')
@endsection