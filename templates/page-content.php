
          <?php

                  include_once 'php/product_view.php';
                  $product = products();

                  foreach ($product as $row) {
                  echo
                  // $row['img'];
                  '<div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100 card">
                    <a href="#"><img class="card-img-top" src=img/'.$row['img'].' alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">'.$row["product_name"].'</a>
                      </h4>
                      <h5>$'.$row["product_price"].'</h5>
                      <p class="card-text">'.$row["dtl"].'</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                  </div>
                  </div>';
                  }
          ?>