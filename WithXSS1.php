<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Without XSS</title>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
</style>
<?php
$form = "
<div style='display: flex; justify-content: center; align-items: center; flex-direction: column;width: 100vw; height: 100vh'>
<div style=''>
    <form>
        <input type='text' placeholder='Your name' name='name'/>
        <input type='submit'>
    </form>
";
echo $form;
$name = $_GET['name'];
if ($name == "") {
    $name = "guest";
}
echo "<p>Hello " . $name . "</p></div></div>";


