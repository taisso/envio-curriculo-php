<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Formulario</title>
</head>
<body>
    <div id="container">
      <div class="content-form">
        <form enctype="multipart/form-data" class="well form-horizontal" action="{{ url('resumes') }}" method="POST">
        @csrf
        <fieldset>
        <legend><center><h2><b>Formulário para envios de currículos</b></h2></center></legend><br>
        
        <div class="form-group">
          <label class="col-md-4 control-label">*Nome</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="name" placeholder="Seu nome" class="form-control" type="text"  required>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" >*Email</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="email" placeholder="Seu Email" class="form-control"  type="email" required>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" >*Telefone</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="telephone" placeholder="Last Name" class="form-control"  type="text" required>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" >*Cargo Desejado</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input placeholder="Cargo Desejado" class="form-control"  type="text" name="office" required>
            </div>
          </div>
        </div>

          <div class="form-group"> 
            <label class="col-md-4 control-label">*Escolaridade</label>
              <div class="col-md-4 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select class="form-control selectpicker" name="schooling" required>
                    <option value="">Selecione a Escolaridade</option>
                    <option value="1">Ensino Fundamental</option>
                    <option value="2">Ensino Médio</option>
                    <option value="3">Ensino Superior</option>
                  </select>
                </div>
              </div>
            </div>

           <div class="form-group col-md-4 inputGroupContainer">
            <label for="exampleFormControlTextarea1">Observações</label>
            <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group col-md-4 inputGroupContainer">
            <label for="exampleFormControlFile1">Selecione um arquivo</label>
            <input required type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          @if($errors->any())
          <div class="card-footer">
            @foreach($errors->all() as $error)
              <div class="alert alert-danger" role="alert">
                {{ $error }}
              </div>
            @endforeach
          </div>
           @endif
           <div class="alert alert-success" role="alert" id="success_message">
             Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
           <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-4"><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <button type="submit" class="btn btn-warning" >
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnviar <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
              </div>
            </div>
        </fieldset> 
        </form>
      </div>
    </div>
</body>
</html>