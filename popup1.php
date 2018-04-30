<!DOCTYPE html>
<html>
<head>
<style>
dialog {  
    width: 500px;  
    background-color: white; /* Fallback color */
    background-color: rgba(170,170,170,0.4); /* Black w/ opacity */
    border: 1px solid #dadada;
    font-family:sans-serif;
    padding: 5px 10px 20px 20px;
	margin-top:70px;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}

</style>
</head>
<body>  
<dialog id="window">  
    <h3>Submitted!</h3>  
    <p>you have submitted your form.</p>  
    <button id="exit">Close Dialog</button>  
</dialog>  
<button id="show">Show Dialog</button>  
<script>
(function() {  
    var dialog = document.getElementById('window');  
    document.getElementById('show').onclick = function() {  
        dialog.show();  
    };  
    document.getElementById('exit').onclick = function() {  
        dialog.close();  
    };  
})();
</script>
</body>
</html>