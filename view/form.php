
<?php echo "<form action='mostrar_notas.php?id=".$id."' method='post' onsubmit='return validaform(this);'>"?>

<div class="row">

<div class="form-group col-md-4">
<strong>Pertinencia:</strong> <input type='text' class="form-control" maxlength='3' required='true' name='pe' id='pe' onblur="valida(this);" />
</div>

<div class="form-group col-md-4">
<strong>Coerencia:</strong>  <input type="text" class="form-control" maxlength='3' required="true" id="co" name="co" onkeyup="validar(this,'num');" onblur="valida(this);" />
</div>

<div class="form-group col-md-4">
<strong>Inovacao:</strong> <input type="text" class="form-control" maxlength='3' required="true" name="in" id="in" onkeyup="validar(this,'num');" onblur="valida(this);"/>
</div>

<div class="form-group col-md-4">
<strong>Desenvoltura:</strong> <input type="text" class="form-control" maxlength='3' required="true" id="de" name="de" onkeyup="validar(this,'num');" onblur="valida(this);" />
</div>

<div class="form-group col-md-4">
<strong>Slide:</strong> <input type="text" required="true" maxlength='3' class="form-control" name="sl" id="sl" onkeyup="validar(this,'num');" onblur="valida(this);" />
</div>

<div class="form-group col-md-4">
<strong>Tempo:</strong> <input type="text" required="true" maxlength='3' class="form-control" id="te" name="te" onkeyup="validar(this,'num');" onblur="valida(this);" />
</div>


<br>
<input type="button" value="Gerar Média" class="btn btn-success" onclick="media()"/>
<input type="number" class="form-control" readonly="false" id="me" name="me" />
<br>
<br>
<input type="button" class="btn btn-default" value="Voltar" onclick="chama();" />
<input type="submit" class="btn btn-primary" value="Confirmar"/>
<br><br>

</div>
</form>