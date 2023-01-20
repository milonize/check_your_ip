<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<?php
$response=file_get_contents("http://ip-api.com/json");

$data = json_decode($response);
?>
<style>
    .container{
        display: flex;
        align-items: center;
        height: 50vh;
        justify-content: center;
    }
</style>
<div class="container">
    <div class="box w-100">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-tillte"></div>
                    <div class="card-body">
                        <b>IP Address: <?= $data->query?></b> <br>
                    Country: <?= $data->country?> <br>
                    Country Code : <?= $data->countryCode?> <br>
                    District: <?= $data->regionName?> <br>
                    City: <?= $data->city?> <br>
                    Zip: <?= $data->zip?> <br>
                    Timezone : <?= $data->timezone?> <br>
                    ISP: <?= $data->isp?> as <?= $data->as?>  <br>
                    
                    </div>
                    <div class="card-footer"></div>
                </div>
                
            </div>
        
        </div>
    </div>
</div>
<?

?>