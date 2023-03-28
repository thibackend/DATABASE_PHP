<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://cdn-img.thethao247.vn/origin_768x0/storage/files/anhld/2022/10/30/nong-den-on-doi-bong-cu-ronaldo-khien-juventus-bi-phat-51-trieu-bang-211053.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Crirtiaal Ronandol</h5>
            <p class="card-text">2000.000 vnd</p>
            <button type="button" class="btn btn-primary bg-success border border-success" data-toggle="modal" data-target="#myModal"> Buy </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> detail </button>
        </div>
    </div>

  <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                        
                    <h4 class="modal-title bg-success">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm">
                            <img src="https://cdn-img.thethao247.vn/origin_768x0/storage/files/anhld/2022/10/30/nong-den-on-doi-bong-cu-ronaldo-khien-juventus-bi-phat-51-trieu-bang-211053.jpg"  alt="..." class="img-fluid">
                        </div>
                        <div class="col-sm">
                            
                            <p>Name product ao da long bao khi con no ra cam tay nhau ddi choiw vaf chir cos nhungw con thsus</p>
                            <div class="col-sm">
                                <img src="https://cdn-img.thethao247.vn/origin_768x0/storage/files/anhld/2022/10/30/nong-den-on-doi-bong-cu-ronaldo-khien-juventus-bi-phat-51-trieu-bang-211053.jpg" alt="..." class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>
    </div>
  

</body>
</html>