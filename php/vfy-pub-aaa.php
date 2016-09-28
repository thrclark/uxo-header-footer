<?php 
$section = 'publishing';
$page_title = 'archived';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body class="view-admin" id="top">
<?php include ('includes/brand-header2.php') ?>
<?php include ('includes/pub-header.php') ?>
<div class="main-content container" role=main>
    <div id="main-content">
        <div class="row">
            <div class="col-md-3">
                <?php include ('includes/pub-nav.php') ?>
            </div>
            <div class="col-md-9">
                <div class="primary-content">
                    <section style="display:;" id="all_verifications">
                        <div class="row section-head">
                            <div class="col-sm-6 section-header">
                                <h3>Archived Verifications</h3>
                            </div>
                            <div class="col-sm-6 text-right" style="padding-top: 9px;">
                                <form class="form-inline" style="padding-bottom: 10px;">
                                    <div class="form-group">
                                        <label class="sr-only" for=filtertable>Filter</label>
                                        <input type=text id="filtertable" class="form-control input-sm" placeholder=Filter ng-model=searchstatus>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                            <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr title="Rotten Tomato Rating">Rating</abbr></th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/Avatar_(2009_film)">Avatar</a></td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/Titanic_(1997_film)">Titanic</a></td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/The_Avengers_(2012_film)">The Avengers</a></td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/Harry_Potter_and_the_Deathly_Hallows_%E2%80%93_Part_2">Harry Potter and the Deathly Hallows—Part 2</a></td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/Frozen_(2013_film)">Frozen</a></td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/Iron_Man_3">Iron Man 3</a></td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/Transformers:_Dark_of_the_Moon">Transformers: Dark of the Moon</a></td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/The_Lord_of_the_Rings:_The_Return_of_the_King">The Lord of the Rings: The Return of the King</a></td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/Skyfall">Skyfall</a></td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="http://en.wikipedia.org/wiki/Transformers:_Age_of_Extinction">Transformers: Age of Extinction</a></td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <!--        
                      
                     <table class="responsive1">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Job Title</th>
			<th>Favorite Color</th>
			<th>Wars or Trek?</th>
			<th>Porn Name</th>
			<th>Date of Birth</th>
			<th>Dream Vacation City</th>
			<th>GPA</th>
			<th>Arbitrary Data</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>James</td>
			<td>Matman</td>
			<td>Chief Sandwich Eater</td>
			<td>Lettuce Green</td>
			<td>Trek</td>
			<td>Digby Green</td>
			<td>January 13, 1979</td>
			<td>Gotham City</td>
			<td>3.1</td>
			<td>RBX-12</td>
		</tr>
		<tr>
		  <td>The</td>
		  <td>Tick</td>
		  <td>Crimefighter Sorta</td>
		  <td>Blue</td>
		  <td>Wars</td>
		  <td>John Smith</td>
		  <td>July 19, 1968</td>
		  <td>Athens</td>
		  <td>N/A</td>
		  <td>Edlund, Ben (July 1996).</td>
		</tr>
		<tr>
		  <td>Jokey</td>
		  <td>Smurf</td>
		  <td>Giving Exploding Presents</td>
		  <td>Smurflow</td>
		  <td>Smurf</td>
		  <td>Smurflane Smurfmutt</td>
		  <td>Smurfuary Smurfteenth, 1945</td>
		  <td>New Smurf City</td>
		  <td>4.Smurf</td>
		  <td>One</td>
		</tr>
		<tr>
		  <td>Cindy</td>
		  <td>Beyler</td>
		  <td>Sales Representative</td>
		  <td>Red</td>
		  <td>Wars</td>
		  <td>Lori Quivey</td>
		  <td>July 5, 1956</td>
		  <td>Paris</td>
		  <td>3.4</td>
		  <td>3451</td>
		</tr>
		<tr>
		  <td>Captain</td>
		  <td>Cool</td>
		  <td>Tree Crusher</td>
		  <td>Blue</td>
		  <td>Wars</td>
		  <td>Steve 42nd</td>
		  <td>December 13, 1982</td>
		  <td>Las Vegas</td>
		  <td>1.9</td>
		  <td>Under the couch</td>
		</tr>
		</tbody>
	</table>
                      
                      
                      
                      --> 
                        
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
</body>
</html>
