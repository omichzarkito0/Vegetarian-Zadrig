<script type="text/javascript">
    
var arr = [];
arr[1] = 'hola';
arr[2] = 'hi';

var arr2 = arr;

function test(){

    fetch('./test.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ 
            test: arr,
            test2: arr2
        })
      }).then(function(result) {

        result.json().then(function(json) {
            if(json.error){
                alert("Error");
            }else{
                alert("Success");
                alert(json.test[1]);
                //console.log(json);
            }
        })

      });
}
</script>

<?php
header('Content-Type: application/json');
# retrieve json from POST body
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str);

$json_obj->test[1] = "change";

echo json_encode($json_obj);
?>