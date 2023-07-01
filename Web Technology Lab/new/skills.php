<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Skills</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="skill.css">
</head>

<body>
    <div >
        <input type="button" id="btn" value="HOME" onclick="home()">
    </div>
  <div class="container">
    <div class="skill">
      <h1 class="skill_name">Programming Languages</h1>
      <ul class="skill_list">
        <hr>
        <li>C</li>
        <li>Java</li>
        <li>Python</li>
      </ul>
    </div>
    <div class="skill">
      <h1 class="skill_name">Databases</h1>
      <hr>
      <ul class="skill_list">
        <li>MySQL</li>
        <li>MongoDB</li>
      </ul>
    </div>
    <div class="skill">
      <h1 class="skill_name">Markup Languages</h1>
      <hr>
      <ul class="skill_list">
        <li>HTML</li>
        <li>CSS</li>
        <li>XML</li>
      </ul>
    </div>
    <div class="skill">
      <h1 class="skill_name">Scripting Languages</h1>
      <hr>
      <ul class="skill_list">
        <li>JavaScript</li>
        <li>PHP</li>
      </ul>
    </div>
  </div>
  <script>
    function home(){
        window.location.href="index.php";
    }
  </script>
</body>

</html>