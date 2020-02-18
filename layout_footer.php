</div>
 <! -- /container -->
<! -- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/esm/popper.js" integrity="sha256-VD1XVj2obWpClbEbbkKYc6fQnEhClfZMn6UWx8oWz4c=" crossorigin="anonymous"></script>
<! -- Latest compiled and minified Bootstrap JavaScript -->
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<! -- bootbox library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<!-- <script src="https://cdnjs.cloudlflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> -->
<!-- JS dependencies -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<!-- src="" -->
<script>

JavaScript for deleting product
$(document).on('click', '.delete-object', function(){
    alert("hello");
 var id = $(this).attr('delete-id');

 bootbox.confirm({
 message: "<h4>Are you sure?</h4>",
 buttons: {
 confirm: {
 label: '<span class="glyphicon glyphicon-ok"></span> Yes',
 className: 'btn-danger'
 },
 cancel: {
 label: '<span class="glyphicon glyphicon-remove"></span> No',
 className: 'btn-primary'
 }
 },
 callback: function (result) {
 if(result==true){
 $.post('delete_product.php', {
 object_id: id
 }, function(data){
 location.reload();
 }).fail(function() {
 alert('Unable to delete.');
 });
 }
  }
 });
 return false;
});
</script>
</body>
</html>