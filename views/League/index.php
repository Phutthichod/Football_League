<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- include style -->
    <link rel="stylesheet" href="<?php echo URL; ?>views/League/style.css">


    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Football League</h1>
        </header>
        <section>
            <div class="grid-section-item">
                    <button type="button" class="btn btn-primary btn-insert" data-toggle="modal" data-target="#insertModal">League Insert</button><br><br>
                    <?php foreach($this->data as $index => $value){ ?>
                    
                    <div class="card grid-item" style = "background-color : <?php echo $this->data[$index]['CLeague'] ?>">
                        <img src="<?php echo $this->data[$index]['ILeague'];?>">
                        <h2 class = 'name'><?php echo $this->data[$index]["NLeague"]; ?></h2>
                        <button type="button" class="btn btn-warning btn-item btn-edit" data-toggle="modal" data-target="#editModal"
                        id = <?php echo $this->data[$index]['LID'] ?>>edit</button>
                        <button type="button" class="btn btn-danger btn-item btn-del" data-id = <?php echo $this->data[$index]['LID'] ?>>delete</button>
                    </div>
                        
                    <?php } ?>
            </div>
        </section>
    </div>


    <!-- modal edit -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">League edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo URL; ?>League/updateData" >
                        <div class="form-group form-edit">
                            <input type="hidden" id="id" name="id" value = 1>
                            
                            <input type="text" class="form-control" id="name" name="name" placeholder="League name">
                            <br>
                            <input type="text" class="form-control" id="name" name="icon" placeholder="League icon">
                            <br>
                            <input type="text" class="form-control" id="name" name="color" placeholder="League color">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <button type="submit" style="float : right;" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <!-- insert modal -->
        <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">League insert</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo URL; ?>League/addData" >
                        <div class="form-group">
                            <input type="hidden" id="id" name="id" value = 1>
                            
                            <input type="text" class="form-control" id="name" name="name" placeholder="League name">
                            <br>
                            <input type="text" class="form-control" id="name" name="icon" placeholder="League icon">
                            <br>
                            <input type="text" class="form-control" id="name" name="color" placeholder="League color">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <button type="submit" style="float : right;" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
</body>

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- sweet -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
 
$(document).ready(function(){
    $(document).on('click','.btn-edit',function(){
        // console.log(($(this).attr("index"))[0]);
        $(".form-edit input[name='id']").val($(this).attr('id'));
        $(".form-edit input[name='name']").val($(this).prev().text());
        $(".form-edit input[name='icon']").val($(this).prev().prev().attr("src"));
        $(".form-edit input[name='color']").val($(this).parent().css("background-color"));

       
    })
    $(document).on('click','.btn-del',function(){
        console.log($(this).attr('data-id'))
        sweetDelete($(this).attr('data-id'));
        
    })
    function deleteData(id){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(JSON.parse(this.responseText));
                // loaddata()
                let data = JSON.parse(this.responseText);
                let text = ' <button type="button" class="btn btn-primary btn-insert" data-toggle="modal" data-target="#insertModal">League Insert</button><br><br>';
                for(i in data){
                    text+=`
                    <div class="card grid-item" style = "background-color : ${data[i].CLeague}">
                        <img src=${data[i].ILeague}>
                        <h2 class = 'name'>${data[i].NLeague}</h2>
                        <button type="button" class="btn btn-warning btn-item btn-edit" data-toggle="modal" data-target="#editModal"
                        id = ${data[i].LID }>edit</button>
                        <button type="button" class="btn btn-danger btn-item btn-del" data-id = ${data[i].LID }>delete</button>
                    </div>
                   
                    `
                }
                $('.grid-section-item').html(text);
            }
        };
        xhttp.open("POST",'<?php echo URL; ?>'+"League/deleteData", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(`id=${id}`);
    }
    function sweetDelete(id){
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                deleteData(id);
              swal("data has been deleted!", {
                icon: "success",
              });
            } else {
              swal("Your data is safe!");
            }
          })
      
    }
   
})
      
</script>
</html>