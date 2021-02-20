<script>
   const data = (JSON.stringify({ data: [{ id: 0
    , name: 31
    , position: "New York"
    , salary: "New York"
    , start_date: "123456"
    , office: "New York"
    , extn: "New York" }]}));
 

    console.log(data);

    const jsonString = data;
    const xhr = new XMLHttpRequest();

    xhr.open("POST","receive.php");
    xhr.setRequestHeader("Content-Type","application/json");
    xhr.send(jsonString);
</script>
