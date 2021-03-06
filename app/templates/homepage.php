<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

	<title>Homepage - Text Summarization</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">

	<!-- Fa-icon CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!--	Flag icon-->
	<link href="flag-icon.css" rel="stylesheet">
	<link href="flag-icon.min.css" rel="stylesheet">
	
	<!--	Scroll to top css-->
	<link href="scroll-to-top.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<style>
		html {
			scroll-behavior: smooth;
		}
		
		.nav-item {
			margin-right: 1em;
		}
		
		body {
			padding-bottom: 20px;
		}
		
		.navbar {
			margin-bottom: 20px;
			background-color: cornflowerblue;
			color: white;
			box-shadow: 0 8px 6px -6px #999;
		}
		
		h1 {
			font-weight: 400;
			line-height: 1;
			letter-spacing: -.05rem;
		}
		.jumbotron {
			border-radius: 0;
		}
		
		

	</style>
</head>

<body data-spy="scroll" data-target="#myScrollspy">

		<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
	
	
	<nav id="myScrollspy" class="navbar navbar-expand-lg navbar-dark fixed-top">
		<div class="container" s>
			<a class="navbar-brand" href="#"><b>Summariz </b> <i class="fa fa-sun-o"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

			<div class="collapse navbar-collapse" id="navbarsExample07">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#project">Project<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#service">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#team">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
					<li>
						<span class="form-group">
							<select class="form-control" id="sel1">
								<option>English</option>
								<option>Mandarin</option>
							</select>
						</span>
					





					</li>


				</ul>
			</div>
		</div>
	</nav>
	

	
	

	<section>
		<div class="container" style="margin-top: 5em">
			<div class="row mb-2">
				<div class="col-md-6">
					<div class="card flex-md-row mb-4 box-shadow h-md-250">
						<div class="card-body d-flex flex-column align-items-start">
							<strong class="d-inline-block mb-2 text-primary">Original Text</strong>
							<div class="form-group" style="width: 100%; ">
								<textarea class="form-control" rows="14" style="overflow-y: scroll; resize: none;"></textarea>
							</div>
							<div class="ml-auto" style="height: 50px">
								<form>
									<input type="submit" class="btn btn-primary btn-lg" href="#" role="button">
								</form>
							</div>
						</div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="card flex-md-row mb-4 box-shadow h-md-250">
						<div class="card-body d-flex flex-column align-items-start">
							<strong class="d-inline-block mb-2 text-success" >Summarize Text</strong>
							<div class="form-group" style="width: 100%">
								<textarea class="form-control" rows="14" readonly="yes" style="resize: none;"></textarea>
							</div>

							<div class="row" style="width: 100%; height: 50px">
								<div class="col-md-6">
									Result: 0 sentences
								</div>
								<div class="ml-auto">
									<i class="fa fa-download fa-2x mr-3"></i>
									<i class="fa fa-copy fa-2x"></i>

								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="jumbotron" id="project">
			<div class="container">
				<div class="row">
					<div class="text-center col-md-8 col-12 mx-auto">
						<h1 class="display-5" >What is <i><u>Summariz</u></i>?</h1>
					</div>
				</div>
				<div class="row">
					<div class="text-center col-md-8 col-12 mx-auto mt-4">
						<p>
							SUMMARIZ is an educational tools that summarize and identify the most important passages of your texts. SUMMARIZ capable to help you condenses your articles, your scientific text, papers and other documents in only 1-click. This summarizing tool can be used with a multitude of sources. Whether you have a news article, a research paper, or even a confusing paragraph, SUMMARIZ will help you get the information that you need.
							
						</p>
					</div>
				</div>
				<div class="row">
					<div class="text-center col-md-8 col-12 mx-auto mt-4">
						<img src="128x128.png" alt="open-book">
					</div>
				</div>
			</div>
		</div>

		<div class="container" style="margin-bottom: 2rem;" id="service">
			<div class="row featurette">
				<div class="col-md-6 " style="margin-top: 4rem; margin-bottom: 1rem;">
					<h1 class="featurette-heading">What can you use <i><u>Summariz</u></i> for? </h1>
					<small>These are many ways this tools can be used in real-world application! </small>
				</div>

				<div class="col-md-6">

					<div class="lead"><span><i class="fa fa-check-circle fa-3x" aria-hidden="true" style="vertical-align: middle; color: rgb(074, 198, 148);"></i> Summarizing result of scientific studies</span> </div>
					<div class="lead"><span><i class="fa fa-check-circle fa-3x" aria-hidden="true" style="vertical-align: middle; color: rgb(074, 198, 148);"></i> Creating study notes</span> </div>
					<div class="lead"><span><i class="fa fa-check-circle fa-3x" aria-hidden="true" style="vertical-align: middle; color: rgb(074, 198, 148);"></i> Identify the most important passages in a text</span> </div>
					<div class="lead"><span><i class="fa fa-check-circle fa-3x" aria-hidden="true" style="vertical-align: middle; color: rgb(074, 198, 148);"></i> Make a literature review</span> </div>
					<div class="lead"><span><i class="fa fa-check-circle fa-3x" aria-hidden="true" style="vertical-align: middle; color: rgb(074, 198, 148);"></i> Simplifying long text of information</span> </div>



				</div>

			</div>
		</div>
		
		<hr id="about"> 
		
		<div class="container" >
			<div class="row featurette">
				<div class="col-md-8" style="margin-bottom: 1rem;">
					<h1 class="featurette-heading">How we done it? </h1>
					<div class="row">
						<div class="col-md-1">
							<h1>1</h1>
						</div>
						<div class="col-md-11">
							<i><b>Importing the Library.</b></i> We build a Text Summarization Python algorithm with the help of the spaCy library. SpaCy is a powerful NLP library for various text processing because it is very fast and has many useful features compared to NLTK. 
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-1">
							<h1>2</h1>
						</div>
						<div class="col-md-11">
							<i><b>Tokenization.</b></i> Next, we divided the text into multiple sentences. We create a dictionary that contains the extracted words and their respective frequencies. Stopwords are discard from the sentences.
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-1">
							<h1>3</h1>
						</div>
						<div class="col-md-11">
							<i><b>Rank sentences.</b></i> After that, we ranked the sentences based on the cumulative frequency of their words. Most important sentences come first and are chosen as part of the subset of sentences which will form the summary.
						</div>
					</div>
				</div>
				<div class="col-md-4" style="margin-top: 3rem;">
					<img class="featurette-image img-fluid mx-auto" src="python-snapshot.png" alt="Generic placeholder image">
				</div>
			</div>
		</div>

		<hr id="team">
		
		
		<div class="container" >
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h1>Meet our team members</h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="avatar.jpg" data-holder-rendered="true">
					<h3>Aainaa</h3>
					<p class="lead" style="margin: 0;">Back-end Developer</p>
					<small>Technical University of Malaysia Malacca (UTeM)</small>
				</div>
				<div class="col text-center">
					<img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="avatar.jpg" data-holder-rendered="true">
					<h3>Alis</h3>
					<p class="lead" style="margin: 0;">Front-end Developer</p>
					<small>Technical University of Malaysia Malacca (UTeM)</small>
				</div>
				<div class="col text-center">
					<img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="avatar.jpg" data-holder-rendered="true">
					<h3>Yi Wen </h3>
					<p class="lead" style="margin: 0;">Web Developer</p>
					<small>Technical University of Malaysia Malacca (UTeM)</small>
				</div>
				<div class="col text-center">
					<img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="avatar.jpg" data-holder-rendered="true">
					<h3>Yong Yeong</h3>
					<p class="lead" style="margin: 0;">Web Designer</p>
					<small>Technical University of Malaysia Malacca (UTeM)</small>
				</div>
			</div>
			<br>
		</div>

		<div class="jumbotron" style="background-color: rgb(074, 198, 148);" id="contact" >
		<div class="container" style="margin-bottom: 1rem;" >
			<div class="row">
				<div class="text-center col-md-8 col-12 mx-auto">
					<h1 class="display-5">Contact us</h1>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="card col-md-6" style="width: 100%; border-radius: 0; box-shadow: 6px 8px 6px -6px #999;">
					<div class="card-body">
						<form>
							<input type="text" id="inputName" name="fullname" class="form-control" placeholder="Full name" required>
							<br>
							<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
						</form>
						<br>
						<textarea class="form-control" placeholder="message" rows="4"></textarea>
						<br>
						<p class="text-center"><a class="btn btn-primary btn-lg" href="#why-some-might-question" role="button">Send</a> </p>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
		</div>

<!--
		<div class="jumbotron">
			<div class="container">
				<blockquote class="blockquote text-center">
					<p class="mb-0"><span class="fa fa-quote-left fa-2x">There are no incurable diseases - only the lack of will. There are no worthless herb - only the lack of knowledge</span>
					</p>
					<footer class="blockquote-footer">Ibn Sina (Avicenna)</footer>
				</blockquote>
			</div>
		</div>
-->
	</section>

	<footer class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>Copyright © 2020-2021 Universiti Teknikal Malaysia Melaka. All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write( '<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>' )
	</script>
	<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
	<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
	
</body>
</html>