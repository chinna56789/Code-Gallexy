<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $username = $_POST["username"];
    $course = $_POST["course"];
    $subtopic = $_POST["subtopic"];
    $totalques = $_POST["totalques"];
    $correctans = $_POST["correctans"];
    $per = $_POST["per"];
    //$exists=false;
    //if($password == $cpassword) {//&& $exists==false){
        $sql = "INSERT INTO `history` ( `username`,`course`,`subtopic`,`totalques`,`correctans`,`per`) VALUES ('$username','$course', '$subtopic', '$totalques', '$correctans', '$per')";
        $result = mysqli_query($conn, $sql);
        
}
?>

<html lang="en">
<head>
<title>Quiz</title>
<link rel="stylesheet" href="quiz.css">
<link rel="stylesheet" href="quiz_2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    <style>
                /* Reset default styles for margin and padding */
                * {
            margin: 0;
            padding: 0;
        }

        /* Style for the navigation bar */
        .navbar {
            background-color:#0a136b; /* Background color */
            overflow: hidden;
            padding:9px;
            height:8%; /* Ensure content doesn't overflow */
        }

        /* Style for the navigation bar links */
        .navbar a {
            float: left; /* Float the links to the left */
            display: block; /* Display as block elements */
            color: white; /* Text color */
            text-align: center; /* Center-align text */
            padding: 14px 16px; /* Padding for the links */
            text-decoration: none;
            padding-top: 10px;

        }
        .navbar #online {
            float: left; /* Float the links to the left */
            display: block; /* Display as block elements */
            color: white; /* Text color */
            text-align: center; /* Center-align text */
            padding: 14px 16px; /* Padding for the links */
            padding-left: 25%;
            font-size: 1.1em;
            text-decoration: none;

        }
        .navbar #online:hover {
       background-color:#0a136b;
        }
        /* Style for the navigation bar links on hover */
        .navbar a:hover {
            color:black;   /* Background color on hover */
            background-color: white;
        }
        .navbar #name:hover
        {
            background-color: #0a136b;
            color:white;
        }
    

        /* Style for the navigation bar logout button */
        .logout-button {
            float: right; /* Float the button to the right */
            display: block; /* Display as a block element */
            color: white; /* Text color */ 
            border-radius:10px; /* Remove button border */
            padding: 14px 16px; /* Padding for the button */
         /* Center-align text */
            text-decoration: none; /* Remove underlines from the button */
            cursor: pointer;
            margin-left: 92%;
            margin-top: -45px;
        }
        .logout-button a{
            padding-top: 10px;
        }

        /* Style for the navigation bar logout button on hover */
        .logout-button:hover {
            color: black; /* Button background color on hover */
        }
    </style>
<div class="main">
<div class="navbar">
        <a href="home.php"></i> Home</a>
        <a href="history.php"></i> Quiz History</a>
        <a id="name"><?php if(isset($_SESSION['loggedin'])){ echo 'welcome: ' . htmlentities($_SESSION['uname']) . '!' ;}?></a></li>
        <a id="online"></i>ONLINE QUIZ SYSTEM</a>
        <li><a class="logout-button" href="logout.php">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
 </div>
<div class="icon">
<h2 class="logo">QUIZ</h2>
</div>
<div class="menu">
<ul>
<li><a href="C.php">C</a>
<div class="submenu1">
<ul>
<li><a href="basic.php">Basic</a></li>	
<li><a href="c_formatted_output.php">FormattedOutput</a></li>
<li><a href="c_comments.php">Comments</a></li>
<li><a href="c_datatype.php">Datatypes</a></li>
<li><a href="c_variables.php">Variables</a></li>
<li><a href="c_formatted_input.php">FormattedInput</a></li>
<li><a href="c_operators.php">Operators</a></li>
<li><a href="c_conditional.php">ConditionalStatements</a></li>
<li><a href="c_looping.php">LoopingStatements</a></li>
<li><a href="c_switch.php">Switch,Break,Continue</a></li>
<li><a href="c_arrays.php">Arrays</a></li>
<li><a href="c_strings.php">Strings</a></li>
<li><a href="c_pointers.php">Pointers</a></li>
<li><a href="c_functions.php">Functions</a></li>
<li><a href="c_math.php">MathFunctions</a></li>
<li><a href="c_structures.php">Structures</a></li>
<li><a href="c_final.php">FinalQuiz</a></li>

</ul>
</div>	
</li>
<li><a href="C++.php">C++</a>
<div class="submenu1">
<ul>
<li><a href="c++_basic.php">Basic</a></li>
<li><a href="c++_formatted_output.php">FormattedOutput</a></li>
<li><a href="c++_comments.php">Comments</a></li>
<li><a href="c++_datatype.php">Datatypes</a></li>
<li><a href="c++_variables.php">Variables</a></li>
<li><a href="c++_formatted_input">FormattedInput</a></li>
<li><a href="c++_strings.php">Strings</a></li>
<li><a href="c++_conditional.php">ConditionalStatements</a></li>
<li><a href="c++_looping.php">LoopingStatements</a></li>
<li><a href="c++_switch.php">Switch,Break,Continue</a></li>
<li><a href="c++_arrays.php">Arrays</a></li>
<li><a href="c++_structures.php">Structures</a></li>
<li><a href="c++_pointers.php">Pointers</a></li>
<li><a href="c++_functions.php">Functions</a></li>
<li><a href="c++_class.php">Classess,Objects</a></li>
<li><a href="c++_constructors.php">Constructors</a></li>
<li><a href="c++_acess.php">AcessSpecifiers</a></li>
<li><a href="c++_encapsulation.php">Encapsulation</a></li>
<li><a href="c++_inheritence.php">Inheritence</a></li>
<li><a href="c++_polymorphism.php">Polymorphism</a></li>
<li><a href="c++_final.php">FinalQuiz</a></li>

</ul>
</div>
</li>

<li class="active"><a href="java.php">JAVA</a>
<div class="submenu1">
<ul>
<li><a href="java_basic.php">Basic</a></li>
<li><a href="java_FormattedInput.php">FormattedInput</a></li>
<li><a href="java_formattedoutput.php">FormattedOutput</a></li>
<li><a href="java_Comments.php">Comments</a></li>
<li><a href="java_Datatypes.php">Datatypes</a></li>
<li><a href="java_Variables.php">Variables</a></li>
<li><a href="java_Strings.php">Strings</a></li>
<li><a href="java_Operators.php">Operators</a></li>
<li><a href="java_Conditional.php">ConditinalStatements</a></li>
<li><a href="java_Functions.php">Functions</a></li>
<li><a href="java_Arrays.php">Arrays</a></li>
<li class="activ"><a href="java_constructors.php">Constructors</a></li>
<li><a href="java_Classes.php">Classes,Objects</a></li>
<li><a href="java_Inheritence.php">Inheritence</a></li>
<li><a href="java_final.php">FinalQuiz</a></li>

</ul>
</div>
</li>
<li><a href="python.php">PYTHON</a>
<div class="submenu1">
<ul>
<li><a href="python_basic.php">Basic</a></li>
<li><a href="python_output.php">FormattedInput</a></li>
<li><a href="python_comments.php">Comments</a></li>
<li><a href="python_datatypes.php">Datatypes</a></li>
<li><a href="python_variables.php">Variables</a></li>
<li><a href="python_variables.php">Typecasting</a></li>
<li><a href="python_strings.php">Strings</a></li>
<li><a href="python_operators.php">Operators</a></li>
<li><a href="python_conditional.php">ConditinalStatements</a></li>
<li><a href="python_looping.php">LoopingStatements</a></li>
<li><a href="python_transfer.php">TransferStatements</a></li>
<li><a href="python_functions.php">Functions</a></li>
<li><a href="python_arrays.php">Arrays</a></li>
<li><a href="python_class.php">Classes,Objects</a></li>
<li><a href="python_inheritence.php">Inheritence</a></li>
<li><a href="python_scope.php">Scope</a></li>
<li><a href="python_modules.php">Modules</a></li>
<li><a href="python_final.php">FinalQuiz</a></li>

</ul>
</div>
</li>

</ul>
</div><br><br>
<div class="quiz">
<h1>Constructors - Java</h1>
<div class="app">
<h2 id="question">Questions goes here</h2>
<div id="answer-buttons">
<button class="btn">Answer 1</button>
<button class="btn">Answer 2</button>
<button class="btn">Answer 3</button>
<button class="btn">Answer 4</button>
</div>
<button id="next-btn">Next</button>
</div>
      <span class="top"></span>
      <span class="right"></span>
      <span class="bottom"></span>
      <span class="left"></span> 
      
      <form id="history-form" method="post" action="java_constructors.php">
        <input type="hidden" name="username" value="<?php echo htmlentities($_SESSION['uname']); ?>">
        <input type="hidden" name="course" value="JAVA">   
        <input type="hidden" name="subtopic" value="Constructors">  
        <input type="hidden" name="totalques" value="5">
        <input type="hidden" name="correctans" id="correctans">
        <input type="hidden" name="per" id="percentage">
    </form>

<script>
const questions=[ 
{  
question:"Constuctor is used to ?", 
answers:[      
{ 
   text: "Initilaize the data members of the new object",correct:true
   },  
   {
   text: "Initilize the member functions of the class",correct:false
   },
   { 
   text: "both",correct:false
   },  
   {
   text: "none",correct:false
},] 
},
 
 
{
question:"The prototype of the constructors is ?",
answers:[     
{ 
     text: "<class_name>();",correct:false
	 },   
     { 
     text: "constructor_name(list_of_parameters);",correct:false
	 },  
     {
     text: "function_name(list_of_parameters);",correct:false
	 }, 
     {
     text: "<class_name>(list_of_parameters);",correct:true
},] 
}, 
 
 
{      
question:" student (int id, string name)<br>{<br>id=sid;<br>name=sname;<br>}<br>here student is known as",  
answers:[       
{ 
       text: "constructor name",correct:true
	   }, 	
       {
       text: "function name",correct:false
},
{
       text: "class name",correct:true
},
{
       text: "object name",correct:false
},

]
},


{ 
question:"Constructor is invoked at the time object creation.(TRUE of FALSE)", 
answers:[    
{
         text:"TRUE",correct:true
		 },   
         { 
         text:"FALSE",correct:false
		 },] 
 },
 

{        
question:" Which of the following constructors are used in Java ?", 
answers:[    
{
      text:"Default Constructor",correct:false
	  },     
      {
      text:"Parameterized constructors",correct:false
	  },  
      { 
      text:"Copy Constructor",correct:false
	  },     
      {
      text:"All the above",correct:true
	  }]
 }];
 const questionElement=document.getElementById("question");
 const answerButtons=document.getElementById("answer-buttons");
 const nextButton=document.getElementById("next-btn");
 let currentQuestionIndex=0;
 let score=0;
 let per =0;

 function startQuiz() 
 {      
   currentQuestionIndex=0;    
   score=0;      
   nextButton.innerHTML="Next"; 
   showQuestion();  
 }
 function showQuestion()
 {  
   resetState(); 
   let currentQuestion=questions[currentQuestionIndex];
   let questionNo=currentQuestionIndex+1;
   questionElement.innerHTML=questionNo+". "+currentQuestion.   question;  
   currentQuestion.answers.forEach(answer => { 
   const button=document.createElement("button");   
   button.innerHTML=answer.text;    
   button.classList.add("btn"); 
   answerButtons.appendChild(button); 
 
   if(answer.correct)      
   {      
      button.dataset.correct=answer.correct; 
   }   
   button.addEventListener("click",selectAnswer);
 });
}
 function resetState()
 {   
   nextButton.style.display="none"; 
   while(answerButtons.firstChild) 
   {     
   answerButtons.removeChild(answerButtons.firstChild);
   }}
 
 function selectAnswer(e)
 {   
  const selectedBtn=e.target;   
  const isCorrect=selectedBtn.dataset.correct === "true";
  
  if(isCorrect)  
   {   
     selectedBtn.classList.add("correct");     
     score++; 
     
   }    
  else
     {   
       selectedBtn.classList.add("incorrect");  
     }  
  
Array.from(answerButtons.children).forEach(button =>  
{
  if(button.dataset.correct==="true")   
     {   
       button.classList.add("correct");    
     } 
  button.disabled=true;   
}
); 
   nextButton.style.display="block";
}
 function showScore()
 {
 if(score===5)
{
   resetState();
 let  per=score/5*100; 
   questionElement.innerHTML =`You are OutStanding......You scored ${score} out of ${questions.length}! <br>PERCENTAGE :${per}% <br><br> <?php echo htmlentities($_SESSION['uname']);?> `; 
   nextButton.innerHTML="Submit";   
   nextButton.style.display="block";
   document.getElementById("correctans").value = score;
    document.getElementById("percentage").value = per;
}
else if(score==0)
{
   resetState(); 
  let per=score/5*100; 
   questionElement.innerHTML =`You are Very Poor......You scored ${score} out of ${questions.length}! <br>PERCENTAGE :${per}% <br><br> <?php echo htmlentities($_SESSION['uname']);?> `; 
   nextButton.innerHTML="Submit";   
   nextButton.style.display="block";
   document.getElementById("correctans").value = score;
    document.getElementById("percentage").value = per;
   } 
else if(score>2&&score<4)
{
   resetState(); 
  let per=score/5*100; 
   questionElement.innerHTML =`You are Average......You scored ${score} out of ${questions.length}!<br>PERCENTAGE :${per}% <br><br> <?php echo htmlentities($_SESSION['uname']);?> `;  
   nextButton.innerHTML="Submit";   
   nextButton.style.display="block";
   document.getElementById("correctans").value = score;
    document.getElementById("percentage").value = per;
 }
 else
{
   resetState(); 
  let per=score/5*100; 
   questionElement.innerHTML =`You are Average......You scored ${score} out of ${questions.length}!<br>PERCENTAGE :${per}% <br><br> <?php echo htmlentities($_SESSION['uname']);?> `; 
   nextButton.innerHTML="Submit";   
   nextButton.style.display="block";
   document.getElementById("correctans").value = score;
    document.getElementById("percentage").value = per;
 }

 }
 function handleNextButton()
 {    
   currentQuestionIndex++; 
   
   if(currentQuestionIndex < questions.length)  
   {    
     showQuestion(); 
   }   
   else 
   {     
   showScore();  
   }
 }
 nextButton.addEventListener("click", ()=>
{  
   if(currentQuestionIndex < questions.length)  
   {      
   handleNextButton(); 
   }   
   else  
   {   
    document.getElementById("history-form").submit();
     startQuiz();  
   }
 }
);
 startQuiz();
</script>

</body>
</html>