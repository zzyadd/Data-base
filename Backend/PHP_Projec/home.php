<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css"
		href="new.css" media="screen" />
</head>

<body>
	<div class=" header1">
		<div id="name" class="header1">
			Facebook
		</div>
		<div id="searcharea" class="header1">
			<input placeholder="search here...."
				type="text" id="searchbox" />
		</div>
		<div id="profilearea" class="header1">
        <a href="profile.php">Profile</a></div>
		<div id="profilearea1" class="header1">|</div>
		<div id="profilearea2" class="header1">Home</div>
	</div>
	<div class="sidenav">
		<div class="bodyn">
			<div id="side1" class="bodyn">Profile</div>
			<div id="side3" class="bodyn">News feed</div>
			<div id="side4" class="bodyn">Messages</div>
			<div id="side6" class="bodyn">PAGES</div>
			<div id="side7" class="bodyn">Pages feed</div>
			<div id="side8" class="bodyn">Like pages</div>
		    <div id="logout" class="bodyn"><a href="login.php">Log Out</a></div>
			<div id="side9" class="bodyn"><a href="page_create.php">Create a page</a></div>
			</div>
		</div>
	</div>
	<div class="post00"></div>
	<div class="post10"></div>

	<div class="header0001"></div>
	<div class="post">
		<div id="column-1" class="post">
			<hr><br><br><br><br><br><br>
			<hr>
		</div>
		</div>
		<div class="post00">
         <form id="post-form">
            <textarea name="post-text" placeholder="What's on your mind?"></textarea>
            <button type="submit" name="post-btn" id="btn" class="S">Post</button>
         </form>
        </div>

<div class="post-container">
  <!-- Display posts here -->
</div>

     <div class="post-container">
     <!-- Display posts here -->
     </div>

	</div>
</div>

</body>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    body{  background:
         linear-gradient(to bottom right, #1c1e21);
height:400px;

}
.header1{
position:fixed;
width :100%;
height:70px;
background :#1877f2;
top:0;
bottom:0;
color: white;
z-index:7;
}
#btn
{
top:230px;
left:850px;
position:fixed;
width:90px;
height:30px;
font-family:verdana;
}
#searcharea{top:17px;
left:400px;
height:50px;
}
#name{left:0px;
font-family: verdana sans-serif;
font-size:60px;}
#searcharea{top:17px;
left:400px;
height:50px;
}
#searchbox{width:500px;
height:30px;
background:white;
padding:5px;
outline:none;
border-radius: 15px/15px;
}
#profilearea{top:20px;
left:920px;
height:30px;
font-size:20px;
font-family:verdana  sans-serif;
}

#profilearea1{top:10px;
left:980px;
height:30px;
font-size:30px;
font-family:verdana  ;
}
#profilearea2{top:20px;
left:1000px;
height:30px;
font-size:20px;
font-family:verdana sans-serif ;
}
.bodyn{top:70px;
left:30px;
position:absolute;
width:200px;
height:740px;
font-family:verdana;
}

#side1{top:0px;
left:10px;
width:160px;
height:25px;
font-size:20px;
color:#868383;

}
#side9{
top:90px;
left:15px;
width:160px;
height:25px;
font-size:15px;
color:#000;
padding-top:5px;
padding-left:20px;
}
#side3{top:30px;
left:15px;
width:170px;
height:25px;
font-size:15px;
color:#363030;
padding-top:5px;
padding-left:20px;
}
#side4{top:65px;
left:15px;
width:160px;
height:25px;
font-size:15px;
color:#363030;
padding-top:5px;
padding-left:20px;
}

#side6{top:120px;
left:10px;
width:180px;
height:30px;
font-size:20px;
color:#868383;
padding-top:5px;
}
#side7{top:155px;
left:15px;
width:160px;
height:25px;
font-size:15px;
color:#363030;
padding-top:5px;
padding-left:20px;
}
#side8{top:185px;
left:15px;
width:160px;
height:25px;
font-size:15px;
color:#363030;
padding-top:5px;
padding-left:20px;
}
#side9{top:215px;
left:15px;
width:160px;
height:25px;
font-size:15px;
color:#363030;
padding-top:5px;
padding-left:20px;
}
#logout{
top:290px;
left:15px;
width:160px;
height:25px;
font-size:15px;
color:#000;
padding-top:5px;
padding-left:20px;
}
form .S {
  background: #1877f2;
  border-radius: 0.4rem;
  font-size: 1.1rem;
  color: #000;
}

#side1:hover{background:#e9f0f2;}
#side4:hover{background:#e9f0f2;}
#side6:hover{background:#e9f0f2;}
#side7:hover{background:#e9f0f2;}
#side8:hover{background:#e9f0f2;}
#side9:hover{background:#e9f0f2;}
#side12:hover{background:#e9f0f2;}
#side13:hover{background:#e9f0f2;}
#side14:hover{background:#e9f0f2;}
#side15:hover{background:#e9f0f2;}
#side16:hover{background:#e9f0f2;}
#side17:hover{background:#e9f0f2;}
#side18:hover{background:#e9f0f2;}
#side19:hover{background:#e9f0f2;}
#side20:hover{background:#e9f0f2;}

.post00
{
top:70px;
left:370px;
position:fixed;
width:600px;
height:210px;
}

.post10{top:290px;
left:370px;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
position:absolute;
background:white;
width:580px;
height:600px;
border-radius:3px/3px;
padding-left:10px;
padding-right:10px;
padding-top:10px;
}

#signout{
top:290px;
left:370px;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
position:absolute;
background:white;
width:580px;
height:600px;
border-radius:3px/3px;
padding-left:10px;
padding-right:10px;
padding-top:10px;
}

.header0001{
position:fixed;
width:100%;
height:60px;
background:#142170;
top:0;
left:0;
color:white;
z-index:6;

-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);

}
.sideboxxx{top:70px;
left:1000px;
width:220px;
height: 550;
position:absolute;
font-family:verdana;
color:#363030;

-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
font-size:15px;}
.post
{top:70px;
left:370px;
position:absolute;
width:600px;
height:210px;
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
}

#column-1{left:0px;
top:0px;
background:white;
width:580px;
height:200px;
border-radius:3px/3px;
font-size:15px;
font-family:verdana;
color:#1b6192;
padding-left:10px;
padding-right:10px;
padding-top:10px;
}
#postpos{left:450px;
top:170px;
width:85px;
height:30px;}
#postboxpos{top:45px;
left:10px;
height:105px;
width:580px;
z-index:5;}
#postbox {height:105px;
outline:none;

border:white;
background:#e9f0f2;

width:580px;}
.post1{top:290px;
left:370px;
position:absolute;
background:white;
width:580px;
height:600px;
border-radius:3px/3px;
padding-left:10px;
padding-right:10px;
padding-top:10px;
}
p1{color:#1b6192;
font-family:verdana;
font-size:15px;}
p2{color:#868383;
font-family:verdana;
font-size:15px;}
p3{color:#1b6192;
font-family:verdana;
font-size:15px;
font-weight:bold;}
p4{color:#868383;
font-family:verdana;
font-size:10px;}
p6{color:#1b6192;
font-family:verdana;
font-size:15px;
word-spacing:10px;}
p7{font-size:20px;
color:#868383;
font-family:verdana;}
#post2text{left:50px;
top:10px;
padding-top:0px;
height:20px;
width:400px;}
#commentprof2{top:550px;
left:0px;
width:25px;
height:25px;}
#commentboxpos2{top:550px;
left:40px;
width:500px;
height:30px;}
#commentbox{
height:30;
width:500;}
#sideboxx3{top:0;
left:0;
width:200px;
height:20px;
font-size:20;
color:#868383;
}#sideboxx4{top:0;
left:0;
width:200px;
height:20px;
font-size:20;
color: #868383;
}

.post-container {
  margin-top: 20px;
}

.post10 {
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 20px;
}

.post10 p:first-child {
  font-weight: bold;
  margin-bottom: 5px;
}

.post10 p.post-date {
  font-size: 0.8em;
  color: #999;
  margin-bottom: 10px;
}

.post10 button {
  background-color: #4CAF50;
  color: white;
 border: none;
  padding: 5px 10px;
  margin-right: 10px;
  cursor: pointer;
}

.post10 .comments {
  margin-top: 10px;
}

.post10 .comments p {
  margin-bottom: 5px;
}

#post1pos{ left:100px;
top:500;
width:100px;
height:30px;}
#sidebox2{top:0px;
left:0;
width:200px;
height:380px;
background:white;
border-radius:3px/3px;
padding:10px;}
#sideboxx21{
left:0px;
width:180px;
height:20px;
font-size:20px;
color:#868383;
}
#sideboxx22{
left:0px;
width:180px;
height:20px;
font-size:20px;
color:#868383;
}
#sideboxx23{
left:0px;
width:180px;
height:20px;
font-size:20px;
color:#868383;
}
</style>
<script>
	// Get the form, textarea, and post container elements
const postForm = document.getElementById('post-form');
const postTextarea = postForm.querySelector('textarea');
const postContainer = document.querySelector('.post-container');

// Add an event listener to the form submit event
postForm.addEventListener('submit', e => {
  e.preventDefault(); // Prevent the default form submission behavior

  const postText = postTextarea.value; // Get the post text
  const postDate = new Date(); // Get the current date and time
  const postLikes = 0; // Set the initial likes count
  const postComments = []; // Set the initial comments array

  // Create a new post element and add it to the post container
  const postElement = document.createElement('div');
  postElement.classList.add('post10');
  postElement.innerHTML = `
    <p>${postText}</p>
    <p class="post-date">${postDate}</p>
    <button class="like-btn">Like</button>
   <button class="comment-btn">Comment</button>
    <button class="share-btn">Share</button>
    <div class="comments"></div>
  `;
  postContainer.insertBefore(postElement, postContainer.firstChild);

  // Clear the post textarea
  postTextarea.value = '';
});
</script>
</html>