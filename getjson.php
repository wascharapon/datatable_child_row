<script>
    $.ajax({
  dataType: "json",
  url: 'http://localhost:9292/Datatable/data_js.php',
  success: function(response) {
    console.log(response);
  }
});
</script>