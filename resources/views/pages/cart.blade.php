


<div class="modal fade" id="shoppingCartModal" tabindex="-1" role="dialog"
        aria-labelledby="shoppingCartModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shoppingCartModalTitle">Shopping cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            @if(Session::has('cart'))
              <div class='row'>
                <div class="col-sm-6 col-md-6 col-md-offset3 col-sn-offset-3">
                  <ul class="listgroup">

                    @foreach ($items as $item)
                      <li class="list-group-item">
                        <span class="badge">{{$item['qty']}}</span>
                        <p>{{$item['item']['product']}}</p>

                        <span class="label label-success">{{$item['price']}}</span>

                      </li>
                    @endforeach

                  </ul>
                </div>
              </div>
              <div class='row'>
                <div class="col-sm-6 col-md-6 col-md-offset3 col-sn-offset-3">

                  <strong>Total: {{$totalPrice}}</strong>

                </div>
              </div>
              <hr>
              <div class='row'>
                <div class="col-sm-6 col-md-6 col-md-offset3 col-sn-offset-3">
                  <button type=button class="btn btn-success">Checkout</button>
                </div>
              </div>
              @else
                <div class='row'>
                <div class="col-sm-6 col-md-6 col-md-offset3 col-sn-offset-3">
                  <h2>No items in cart!</h2>
                </div>
              </div>
              @endif
        </div>
            <div class="modal-footer">
                <!-- Clear shopping cart button -->
                <a href="" class="btn btn-danger">Empty</a>
                <!-- Proceed to checkout button -->
                <a href="" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    </div>
</div>

