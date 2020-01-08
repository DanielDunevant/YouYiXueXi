<?php
echo <<<HEREDOC
					<h2>Cultural Context!</h2>
					<p> 	The phrase that  you  see along  the sides of the content in
					 the middle is, Mandarin "真正的智慧是知道你不知道是什麼,"	Pinyin "Zhēnzhèng de zhìhuì 
					 shì zhīdào nǐ bù zhīdào shì shénme," English "True wisdom comes with knowing what 
					 you don't know."	This quote Comes from confucious once more. Something that I want 
					 one to take away from this is that by verifying something this is in a sense the application
					 of knowing what  one does not know. </p>
					 <p>In programming this is a very important attribute that 
					 really comes in handy when attempting to solve a complex problem when brainstorming on paper,
					 or amidst the lines of code.</p>
				
				
					<p> With that  thought in mind let us continue on to learn about
					 page verification.</p>
					 <h1>Verification!</h1>
					<p>		
						The first question you may  have is,"Why would we have to verify that the  page has loaded?"
						This is a good question. The reason why we  want this is that we must control the  flow of 
						information through the javascript. If we don't  do this the  website will run less efficiently.
						In order to control the flow of the javascript resource we create an event listener which activates
						when the  page is fully loaded.
					</p>

					<img class="img-responsive" alt="" src="Images/CodePics/PageLoadFunc.png">
										<p>
					As you can  see once the event listener detects that the page has been 
					loaded it then  moves on to the setUpPage() function; of which we will see a
					lot of later on. For now we will do a little experiment to double verify that 
					the page loads. This will  be achieved by simply  using javascript to reference 
					an html element that is currently on this page.
					</p>
					<p>
					How do we reference an HTML element  from javascript though? It is simply done 
					using the  following  code: 
					</p>
					<p>document.getElementById("IdOfELement").innerHTML = "Text Value";</p>

				<p> This code must  be  placed  within our  setUpPage() function in order to serve 
					the purpose of on-page page-load verification.</p>
					<p>Now, obviously it does seem a bit useless at first to test this, fore how
					 does one know if the value has actually changed if the  page loads it will
					 always be true. Actually if you take a look at the HTML for the following
					  paragraph element you will see that  it's value is set to a very mysterious "something". 
					  This means that it  did  indeed pass through the  page  load  function. </p>
					<p id="test">Something</p>

				
					<h1>Up Next!</h1>
					<p>Now that  you have learned some basic control flow we  will delve into 
					some code that will  be useful for not only learning  but  also  for users doing
					things on your website! More specifically we will learn about dropdown lists!
					 Allowing the user to  have the tools to  move  across your website in a simple,
					 elegant, and efficient way  makes the user comfortable and therefore they are 
					 more likely to spend more time on the site. There's more to learn on the next page!
					</p>

HEREDOC;

?>				
