
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title> Saran</title>
<body>
        
    <div class="wrapper">
        <form id="form">
            <div class="inputBox">
                <label  for="name">Name:</label>
                <br>
                <input type="text" id="name" placeholder="Enter your name" required>
            </div>
            <div class="inputBox">
                <label for="msg">Message:</label>
                <br>
                <textarea id="msg" placeholder="Enter your message" required></textarea>
            </div>
            <button id="btn"> Send </button>
            <center>
            <div class="icon-bar">
<a class="active" href="index1.php"><i class="fa fa-home"></i></a>
</center>
        </form>
        <hr>
        <div class="content" id="content">
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function(){
            function loadData(){
                $.ajax({
                    url: 'select-data.php',
                    type: 'POST',
                    success: function(data){
                        $("#content").html(data);
                    }
                });
            }

            loadData();

            $("#btn").on("click", function(e){
                e.preventDefault();
                var name = $("#name").val();
                var msg = $("#msg").val();

                $.ajax({
                    url: 'insert-data.php',
                    type: 'POST',
                    data: {name: name, msg: msg},
                    success: function(data){
                        if (data == 1) {
                            loadData();
                            alert('Comment Submitted Successfully.');
                            $("#form").trigger("reset");
                        }else {
                            alert("Comment Can't Submit.");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<style>
body {margin:0}

.icon-bar {
  width: 90px;
  background-color: #555;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}
</style>
</div>
</body>
</html> 