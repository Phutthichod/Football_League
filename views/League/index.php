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
                        <h2><?php echo $this->data[$index]["NLeague"]; ?></h2>
                        <button type="button" class="btn btn-warning btn-item btn-edit" data-toggle="modal" data-target="#editModal">edit</button>
                        <button type="button" class="btn btn-danger btn-item" >delete</button>
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
                        <div class="form-group">
                            <input type="hidden" id="id" name="id" value = 1>
                            
                            <input type="text" class="form-control" id="name" name="name" placeholder="League name">
                            <br>
                            <input type="text" class="form-control" id="name" name="icon" placeholder="League icon">
                            <br>
                            <input type="text" class="form-control" id="name" name="color" placeholder="League color">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
                        <button type="submit" class="btn btn-primary">Submit</button>
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

<script>
$(document).ready(function(){
    $(document).on('click','.btn-edit',function(){
        console.log("edit na ja");
    })
})
</script>
</html>