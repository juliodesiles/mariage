<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="UTF-8">
<title>Delphine & Julien</title>



<!-- styles -->
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/jquery.fullPage.css"/>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

</head>
<body>



<div id="fullpage"> 
	<div class="section">
		<div class="titre-nous">
			<span id="titre-delphine">Delphine</span>
			<span id="titre-et"> & </span>
			<span id="titre-julien">Julien</span>
		</div>
		<img id="img-accueil" src="img/accueil.jpg" width="100%" height="100%" >
		
		
		
	</div>
	
	<div class="section">
		Imformations
	</div>
	
</div>

<!-- JS -->
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/jquery.fullPage.js"></script>
<script type="text/javascript" src="js/jquery.imagefit-0.2.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
            anchors: ['firstPage', 'secondPage',],
            menu: '#menu',
            css3: true,
            scrollingSpeed: 1000
        });

        $('#img-accueil').imagefit();
        
        
    });
</script>

</body>
</html>

