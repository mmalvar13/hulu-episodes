<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Hulu Data Design</title>
	</head>

	<body>
		<h1>Hulu Episodes Data Design</h1>
		<h2>Persona</h2>
			<p>
				<strong>Name:</strong>Jessica<br>
				<strong>Age:</strong>25<br>
				<strong>Profession:</strong>Barista and Student<br>
				<strong>Technology:</strong>A Dell Inspiron 13, 13 inch 2-1 laptop/tablet for school and home. An iPhone6 with 4G data connection.<br>
			</p>
			<h4>Attitudes and Behaviors</h4>
				<p>
					Jessica is a full time student that works part time and has a busy social schedule. She doesn’t have time to watch tv and streaming services every day, but every so often she likes to catch up on an episode of her favorite shows before bed, or binge watches them on the weekends. She does have time during the day between classes where she uses her iphone for social media and web browsing.
				</p>
			<h4>Frustrations and Needs</h4>
				<p>Since she doesn’t have a ton of time to watch tv, she prefers to watch shows that she knows she will like. She resents wasting time on a show that doesn’t interest her. She prefers tv shows over movies because of the shorter time blocks. She just bought a new laptop that converts into a tablet, and is interested in using her new tablet features so it is convenient if the streaming service has an app for her laptop. She is also not making a lot of money as a student, so she needs her streaming options to be affordable.
				</p>
			<h4>Goals</h4>
				<p>
					Jessica doesn’t want to have to do any extra work regarding her streaming services. She does not want to be bothered with monthly bills. She wants to be able to login, find the show she wants, and watch it in the short time she has available.
				</p>
		<h2>Use Case</h2>
			<p>
				<strong>What:</strong> Windows 10 on Dell Laptop/Tablet<br>
				<strong>Who:</strong> hulu member wanting to watch an older episode of her favorite show<br>
				<strong>Why:</strong> she wants to use some time before bed to continue watching her favorite series<br>
				</p>
		<h2>User Story</h2>
			<p>
				As a registered user, I want to watch the next episode of The Mindy Project from where I left off.
			</p>
		<h2>Interaction Flow</h2>
			<p>
				<strong>Goal:</strong> as a registered user, I want watch the next episode of The Mindy Project from where I left off.<br>
				<strong>0)</strong> assume the user has already signed in<br>
				<strong>1)</strong>  User scrolls past the trailer for Hulu’s featured show at the home page, and finds the Mindy Project under the “Shows You Watch” section and clicks on it.<br>
				<strong>2)</strong>  the site displays The Mindy Project page<br>
				<strong>3)</strong> User clicks on “Resume Episode” to watch from where she left off.<br>
			</p>
		<h2>Conceptual Model</h2>
			<ol>
				<li><strong>Entity:</strong>User Account<br></li>
					<ul>
						<li>accountId</li>
						<li>accountEmail</li>
						<li>accountPassword</li>
						<li>username</li>
					</ul>
				<li><strong>Entity:</strong>Series<br></li>
					<ul>
						<li>seriesAccountId (foreign key)(bc it keeps track of what shows you have watched)</li>
						<li>seriesId</li>
						<li>seriesName</li>
					</ul>
				<li><strong>Entity:</strong>Episode<br></li>
					<ul>
						<li>episodeAccountId(foreign key)</li>
						<li>episodeSeriesId (foreign key)</li>
						<li>episodeId</li>
						<li>episodeName</li>
					</ul>
			</ol>
		<h3>Relationships</h3>
			<ul>
				<li>One user can have one account</li>
				<li>One <strong>account</strong> can view many <strong>series</strong></li>
				<li>Many <strong>series</strong> can be viewed by many <strong>accounts</strong></li>
				<li>One <strong>series</strong> can have many <strong>episodes</strong></li>
				<li>An <strong>episode</strong> can only belong to one <strong>series</strong></li>
				<li>One <strong>user</strong> can view many <strong>series</strong> with many <strong>episodes</strong></li>
			</ul>
	</body>
</html>