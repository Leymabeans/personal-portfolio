<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html>
  <head>
    <title>Nathan Ley | Professional Web Developer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/title.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="./css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="./js/index.js"></script>
  </head>


<!--Loader===========================================================-->
  <body onload="initial()">
    <div id="loader"></div>


<!--Greeting=========================================================-->
    <div class="greeting">
      <img src="./images/giddy_opening.jpg">
      <p id="message1_1">Hey there, glad you made it to Nathan's site. My name is Giddy, and I'll be your guide through this site. And before you say anything about my appearence...</p>
      <button id="button1_1" onclick="change1()">Go on</button>

      <p id="message1_2">I am proud of my body. It doesn't matter that my arms are squiggly or that I don't have a face: I love myself.</p>
      <button id="button1_2" onclick="change2()">Um, good to know</button>
      
      <p id="message1_3">But anyway, enough about me. You're here for the website anyway. Shall we begin?</p>
      <button id="button1_3">Let's Go</button>
    </div>



<!--Step Process====================================================-->  
    <div class="grid-container">
      <h1 class="section-header">Process</h1>
        <img class="img-left" src="./images/Step1.jpg">
        <div class="text-left">
          <h3>01. Strategize</h3>
          <p>Gather information for project by talking to real users and relaying data back to client to apply it to practical use </p>
        </div>

        <img class="img-right" src="./images/Step2.jpg">
        <div class="text-right">
          <h3>02. Design</h3>
          <p>Use collected data and client input to create layout that encaptures project outlines with correct UI/UX for the all parties</p>
        </div>

        <img class="img-left" src="./images/Step3.jpg">
        <div class="text-left">
          <h3>03. Develop</h3>
          <p>Using designs and wireframes as a guidline, carefully develop and test software to ensure quality of the product to every detail</p>
        </div>

        <img class="img-right" src="./images/Step4.jpg">
        <div class="text-right">
          <h3>04. Launch</h3>
          <p>Wrap up and deploy software, bringing the product to life and take it to the markets for the world</p>
        </div>
    </div>






      <!--Biography=======================================================-->
    <div class="biosection">
        <div id="biopic"></div>
      <div class="biography">
      
        <h2> Who am I?</h2>
        <p>Hello, my name is Nathan Ley and I am a 17 year old 
        professional web developer and designer based out of Paynesville,
        MN. </p>
        
        <p>A small group of languages that I focus on are HTML, CSS, JavaScript, PHP, SQL, and Python. Aside from programming, I offer services such as SEO and WordPress work, as well as database management.</p>
          
        <h2>Background</h2>
        <p>At the age of 16, I wanted to get into an area 
        that really encaptured all of my God given gifts. I 
        needed something with structure, creativity,
        and most importantly, helping people. An area 
        that did that for me was web development, and many clients later, I am growing my freelance web development business </p>
        
        <h2>My Specialty</h2>
        <p>I am dedicated to providing quality, “elastic” development. Elastic development is a solution I provide where I grow alongside you and your team. In other words, no matter the scale of the project, I can adjust and accommodate to your needs. I take pride in communication and my development process as it is intuitive and client friendly.</p>
      </div>
    </div>
    

    


<!--Client Review================================================-->
    <div class="grid-container">
      <h1 class="section-header title">Clients</h1>
      <div class="project">
          <h2>Blake Connally</h2>
          <h3 class="position">CEO of Modsi</h3><br>
          <p class="description">Nathan was awesome to work with. He went above and beyond what was required of him for the project. He is highly experienced in what he does and I would recommend him to anyone. My favorite part is he is self-managed, has great communication and delivers quality work at the end of the day. Someone like him is extremely hard to find on this platform. Highly recommended. </p>
      </div>
      <div class="project">
          <h2>Andrew Zweifel</h2>
          <h3 class="position">Student</h3><br>  
          <p class="description"> Detail oriented, intelligent, deadline oriented and broad-minded developer; has vast knowledge and is thorough. Thanks to interpersonal skills, Nathan has great relations with both company clients and potential customers. Is able to work in a fast-paced environment, and highly recommended.</p>  
      </div>
    </div>



    <!--Social Media==========================================================-->
      <div class="social">
          <a href="https://www.linkedin.com/in/nathan-ley-b31ab2175/" target="_blank">
            <i class="fab fa-linkedin fa-3x"></i>
          </a>
    
          <a href="https://www.instagram.com/_nathanley/" target="_blank">
            <i class="fab fa-instagram fa-3x"></i>
          </a>
          
          <a href="https://github.com/nathanleysgit" target="_blank">
            <i class="fab fa-github fa-3x"></i>
          </a>
    
          <a href="https://www.freelancer.com/hireme/NathanLey" target="_blank">
            <i class="free fas fa-tv fa-3x" ></i>
          </a>
        </div>
  </body>
</html>